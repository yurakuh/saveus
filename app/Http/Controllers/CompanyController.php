<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Pets; 
use App\Http\Requests\PetPostRequest;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{

     public function __construct(){
      $this->middleware('volunteer',['except'=>array('index')]);
    }
    public function index($id){

    	 $company=Company::find($id);
    	 return view('company.index',compact('company'));

    }
    

    public function create(){
    	return view('company.create');

    }

     public function store(Request $request){

        $this->validate($request,[
            'vklink'=>'active_url',
            'fblink'=>'active_url',
            'instlink'=>'active_url'



        ]);
       
    	$user_id = auth()->user()->id;
    	Company::where('user_id',$user_id)->update([
    		'bio'=>request('bio'),
    		'vklink'=>request('vklink'),
    		'fblink'=>request('fblink'),
    		'instlink'=>request('instlink')


    	]); 

    	return redirect()->back()->with('message', 'Информация профиля обновлена');

    }
    

    public function logo (Request $request){
        $this->validate($request,[
            'logo'=>'required|mimes:png,jpeg,jpg'
        ]);
        $user_id = auth()->user()->id;
       if($request->hasfile('logo')){
            $destinationPath='uploads/logo';
            $file = $request->file('logo');
            $ext = $file->extension();
            $filename = str_random(20).'.'.$ext;
            $resizedImg = Image::make($file)->resize(200,200);
            $resizedImg->encode('jpeg', 75)->save($destinationPath.'/'.$filename);
            Company::where('user_id',$user_id)->update([
                'logo'=>$filename
                
            ]);
                  return redirect()->back()->with('message', 'Фотография профиля успешно обновлена!');

        }
    }

     public function verify (Request $request){
        $this->validate($request,[
            'verify'=>'required|mimes:png,jpeg,jpg'

        ]);
        $user_id = auth()->user()->id;
        if($request->hasfile('verify')){
            $file = $request->file('verify');
            $ext = $file->extension();
            $filename = time().'.'.$ext;
            $file->move('uploads/verify',$filename);
            Company::where('user_id',$user_id)->update([
                'verify'=>'1'
                
            ]);
            return redirect()->back()->with('message', 'Скан паспорта успешно загружен. Пожалуйста, дождитесь окончания модерации');
        }
    }
    
}
