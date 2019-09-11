<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use Auth;


class FavouriteController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

   public function savePet($id){
	$petsid = Pets::find($id);
	$petsid->favourites()->attach(auth()->user()->id);
	return redirect()->back();
   }

   public function unsavePet($id){
   	$petsid = Pets::find($id);
	$petsid->favourites()->detach(auth()->user()->id);
	return redirect()->back();
   }

   //public function saved(){
   //	$pets = Auth::user()->favourites;
  // 	return view('pets.saved', compact('pets'));
  // }


}
