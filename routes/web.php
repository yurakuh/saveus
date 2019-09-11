<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();
Auth::routes(['verify'=>true]);


Route::get('/home', 'HomeController@index')->name('home');


//User profile
Route::get('user/profile/settings','UserController@index')->name('user.profile');
Route::post('user/profile/settings/update','UserController@store')->name('profile.update');
Route::post('user/profile/settings/avatar','UserController@avatar')->name('profile.avatar');
Route::get('user/profile','UserController@show')->name('profile.show');

//Volunteer
Route::get('volunteer/{id}/{name}','CompanyController@index')->name('company.index');
Route::post ('volunteer/register','VolunteerRegisterController@volunteerRegister')->name('vol.register');
Route::get('volunteer/settings','CompanyController@create')->name('company.settings');
Route::post('volunteer/settings/update','CompanyController@store')->name('company.store');
Route::post('volunteer/settings/avatar','CompanyController@logo')->name('vol.logo'); 
Route::post('volunteer/settings/verify','CompanyController@verify')->name('vol.verify'); 

//Pets
Route::get('/','PetsController@main')->name('pets.main');
Route::get('/all-pets','PetsController@index')->name('pets.catalog');

Route::get('/pets/create','PetsController@create')->name('pets.create');
Route::post('/pets/create/new','PetsController@store')->name('pets.store');
Route::post('/pets/create/images','PetsController@storeimages')->name('pets.storeimages');
Route::get('pets/{id}/{pet}','PetsController@show')->name('pets.show');
Route::get('pets/my-pets', 'PetsController@mypet')->name('mypets.show');
Route::get('pets/{id}-edit/','PetsController@edit')->name('pets.edit');
Route::post('pets/{id}-edit/update','PetsController@update')->name('pets.update');
Route::post('/applications/{id}', 'PetsController@adopt')->name('apply');
Route::get('/adoption', 'PetsController@adopters')->name('adopters');
Route::delete('/pets/{id}','PetsController@deletepet')->name('delete');

//Favourite
Route::post('/save/{id}','FavouriteController@savePet');
Route::post('/unsave/{id}','FavouriteController@unsavePet');
//Route::get('/saved/pets','FavouriteController@saved');

//Search
Route::get('/pets/search','PetsController@searchPets');





