<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Company;
use App\Album;
use App\City;
use Intervention\Image\Facades\Image;
use App\Http\Requests\PetPostRequest;
use Auth;



class PetsController extends Controller
{
    public function __construct(){
      $this->middleware('volunteer',['except'=>array('index','show','adopt','searchPets','main')]);
    }
    public function index(Request $request){
    	
       // $keyword = $request->get('city');
       //$category= $request->get('category_id');
        //$old = $request->get('old');
        //$inv = $request->get('inv');
       // $hands = $request->get('hands');
       // $auto = $request->get('auto');
        //$piar = $request->get('piar');
       // $photo = $request->get('photo');
       //  $kurator = $request->get('kurator');
        //$perederzka = $request->get('perederzka');
       // $donor = $request->get('donor');
       // $gurskogo = $request->get('gurskogo');
        //$naiden = $request->get('naiden');
       //if($keyword||$category||$old||$inv||$hands||$auto||$piar||$photo||$kurator||$perederzka||$donor||$gurskogo||$naiden){
       // $pets = Pets::where('city','LIKE','%'.$keyword.'%')->orWhere('old',$old)->orWhere('inv',$inv)->orWhere('hands',$hands)->orWhere('auto',$auto)->orWhere('piar',$piar)->orWhere('photo',$photo)->orWhere('kurator',$kurator)->orWhere('donor',$donor)->orWhere('gurskogo',$gurskogo)->orWhere('naiden',$naiden)->orWhere('perederzka',$perederzka)->orWhere('category_id',$category)->orderBy('updated_at','desc')->simplePaginate(10);
        //return view('welcome',compact('pets'));
       //}else{
         //$pets=Pets::where('status',1)->orderBy('updated_at','desc')->simplePaginate(10);
    	//return view('welcome',compact('pets'));

      $pets = Pets::where('status',1)->filter($request)->orderBy('updated_at','desc')->simplePaginate(10);
      $home = Pets::where('status',0)->count();
      $look = Pets::where('hands',1)->count();
      $company = Company::count();
      return view ('catalog', compact('pets','home','company','look'));

      }
   // }

      public function main(){

         return view ('welcome');
      }

      protected function getFilters(){
        return [
          
        ];
      }

   
    public function show($id){
    	
     $pets=Pets::find($id);
    
    	return view('pets.show',compact('pets')); 
    }

    public function create(){
    	return view('pets.create');
    }

    public function mypet(){
        $pets = Pets::where('user_id',auth()->user()->id)->get();
        return view('pets.mypets', compact('pets'));

    

    }
    
    public function edit($id){
        $pets=Pets::find($id);
        $petsimage=Album::where('pets_id',$id)->get();
        return view('pets.edit',['pets'=> $pets,'petsimage'=>$petsimage]);
    }

    public function storeimages(Request $request){
      $file = $request->file('file');
      
    $destinationPath='uploads/petimages';
    $ext = $file->extension(); 
    $filename = str_random(20).'.'.$ext; 
    $resizedImg = Image::make($file)->insert('uploads/logo.png')->resize(750,500);
    $resizedImg->save($destinationPath.'/'.$filename);
    

     

    }
    public function deletepet($id){
      $pet = Album::find($id)->delete();
      return redirect()->back();
    }

    public function store(PetPostRequest $request){
        $user_id = auth()->user()->id;
         $company = Company::where('user_id',$user_id)->first();

         $company_id= $company->id;
        $pet = Pets::create([
            'user_id'=> $user_id,
            'company_id'=> $company_id,
            'title'=>request('title'),
            'subtitle'=>request('subtitle'),
            'slug'=>str_slug(request('title')),
            'amount'=>request('amount'),
            'old'=>request('old'),
            'inv'=>request('inv'),
            'hands'=>request('hands'),
            'auto'=>request('auto'),
            'piar'=>request('piar'),
            'photo'=>request('photo'),
            'perederzka'=>request('perederzka'),
            'kurator'=>request('kurator'),
            'donor'=>request('donor'),
            'gurskogo'=>request('gurskogo'),
            'naiden'=>request('naiden'),
            'city'=>request('city'),
            'description'=>request('description'),
            'category_id'=>request('category_id'),
            'status'=>request('status')


        ]);
        
      if($request->petimages){
        foreach ($request->petimages as $petimage) {
          $destinationPath='uploads/petimages';
          $ext = $petimage->extension(); 
          $filename = str_random(20).'.'.$ext; 
          $resizedImg = Image::make($petimage)->resize(750, 500)->insert('uploads/logo.png');
          $resizedImg->save($destinationPath.'/'.$filename);
          Album::create([
                        'image_url'=> $filename,
                        'pets_id'=>$pet->id,
                        'user_id'=>$user_id,
                        'image_url_resized'=>$filename,
                        'company_id'=> $company_id
        ]);
        }
      }
      return redirect()->back()->with('status','Объявление успешно создано'); 
    }

    public function update(Request $request,$id){
      $pets = Pets::findOrFail($id);
      $pets->update($request->except('petimages'));
      $user_id = auth()->user()->id;
      $company = Company::where('user_id',$user_id)->first();
      $company_id= $company->id;
      if($request->petimages){
        foreach ($request->petimages as $petimage) {
          $destinationPath='uploads/petimages';
          $ext = $petimage->extension(); 
          $filename = str_random(20).'.'.$ext; 
          $resizedImg = Image::make($petimage)->resize(750, 500)->insert('uploads/logo.png');
          $resizedImg->save($destinationPath.'/'.$filename);
          Album::create([
                        'image_url'=> $filename,
                        'pets_id'=>$id,
                        'user_id'=>$user_id,
                        'company_id'=> $company_id
        ]);
        }
      }
      return redirect()->back()->with('message','Объявление успешно обновлено!'); 
    }

    public function adopt(Request $request,$id){
      $petsid = Pets::find($id);
      $petsid->users()->attach(Auth::user()->id);
      return redirect()->back()->with('message','Ваш запрос успешно отправлен!'); 

    }

    public function adopters(){
      $adopters = Pets::has('users')->where('user_id',auth()->user()->id)->get();
      return view ('pets.adopters',compact('adopters'));

    }

    public function searchPets(Request $request){
      $keyword = $request->get('keyword');
      $pet = Pets::where('title','like','%'.$keyword.'%')->orWhere('subtitle','like','%'.$keyword.'%')->limit(5)->get();
      return response()->json($pet);

    }

    
}
  
                
                
            