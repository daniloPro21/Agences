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

use Illuminate\Support\Facades\Route;
//Acceuil
Route::get('/agence', 'PropertiesController@index')->name('properties.index');

Route::get('/', function (){
    return view('Acceuil');
});
Route::get('/ajouter', function (){
    return view('pages.create');
});
Route::get('/about', function (){
    return view('pages.about');
})->middleware('auth');
Route::get('/categories', 'PropertiesController@depot')->name('property.depot')->middleware('auth');
Route::get('/contact', function (){
    return view('pages.contact  ');
})->middleware('auth');

// route des propeites
Route::resource('properties', 'PropertiesController')->except('index');
Route::post('properties/create', 'PropertiesController@store')->name('properties.store');
//route Admin
Route::get('admin', 'AdminController@index');
Route::post('properties', 'PropertiesController@sendemail')->name('properties.sendemail');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

