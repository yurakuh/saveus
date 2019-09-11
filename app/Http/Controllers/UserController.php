<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{
     public function __construct(){
      $this->middleware('donator');
    }

    public function index(){
    	return view('profile.index');
    	
    }

    
    public function show(){
        return view('profile.show');
        
    }
  
    public function store(Request $request){
        $this->validate($request,[
            'vklink'=>'active_url',
            'fblink'=>'active_url',
            'instlink'=>'active_url'



        ]);
    	$user_id = auth()->user()->id;
    	Profile::where('user_id',$user_id)->update([
    		'bio'=>request('bio'),
    		'vklink'=>request('vklink'),
    		'fblink'=>request('fblink'),
    		'instlink'=>request('instlink')


    	]); 

    	return redirect()->back()->with('message', 'Информация профиля обновлена');

    }

    public function avatar (Request $request){
        $this->validate($request,[
            'avatar'=>'required|mimes:png,jpeg,jpg'

        ]);
        $user_id = auth()->user()->id;
        if($request->hasfile('avatar')){
            $destinationPath='uploads/avatar';
            $file = $request->file('avatar');
            $ext = $file->extension();
            $filename = str_random(20).'.'.$ext;
            $resizedImg = Image::make($file)->resize(200,200);
            $resizedImg->save($destinationPath.'/'.$filename);
            Profile::where('user_id',$user_id)->update([
                'avatar'=>$filename
                
            ]);
            return redirect()->back()->with('message', 'Фото профиля успешно обновлено');
        }
        
    }
    
}
