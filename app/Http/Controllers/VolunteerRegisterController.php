<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use Hash;
class VolunteerRegisterController extends Controller
{




    public function volunteerRegister(Request $request) {
   
    	$this->validate($request,[
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed',
            'name'=>'required|max:55|min:3'



        ]);
    $user = User::create([
          
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type'),
        ]);

       Company::create([
        'user_id'=>$user->id,
        'name'=> request('name'),
        'slug'=>str_slug(request('name'))
       ]);
       return redirect()->to('login')->with('message','Пожалуйста, подтвердите ваш email адрес');
       }
}
