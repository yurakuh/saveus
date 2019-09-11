<?php

namespace App\Http\Controllers;

use App\Pets;
use  Illuminate\Http\Request;



class ApiPetsController extends Controller

{
	public function index(Request $request){

		$pets = Pets::where('status',1)->filter($request)->orderBy('updated_at','desc')->simplePaginate(10);
		return response()->json($pets); 
	}

}