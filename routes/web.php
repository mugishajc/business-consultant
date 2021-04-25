<?php

use Illuminate\Support\Facades\Route;
use App\Categories;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagesController;
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

Route::get('/', function () {
    return view('Ahabanza.Homepage');
});

Route::get('/registerconselor', function () {
   
    $ikiciro=Categories::get()->all();
    return view('Signupconselor')->with('ikiciro',$ikiciro);
})->name('registerconselor');



Auth::routes();

Route::get('/registerusers', function () {
    return view('addclient');
})->name('registeruser');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Route::post('/add','RegisterUserController@add')->name('add');

Route::get('/logout', [HomeController::class,'logout'])->name('logout')
->middleware('auth');


Route::post('/adduser','RegisterUserController@adduser')->name('adduser');
Route::post('/addclient','RegisterUserController@addclient')->name('addclient');




Route::get('/manageusers', [HomeController::class,'viewusers'])
    ->name('manageuser')
    ->middleware('auth');

    
Route::get('/addconselor', [HomeController::class,'addconselor'])
->name('addconselor')
->middleware('auth');


Route::post('/adduser','HomeController@adduser')->name('adduser');


Route::get('deleteuser/{id}','HomeController@destroyuser')
->middleware('auth');


Route::get('/addcategory', [HomeController::class,'createcategory'])
    ->name('addcategory')
    ->middleware('auth');

    
Route::post('/addcategory','HomeController@addcategory')->name('addcategory');
Route::get('deletecategory/{id}','HomeController@destroycategory')
->middleware('auth');



Route::get('/askquestion', [MessagesController::class,'index'])
    ->name('askquestion')
    ->middleware('auth');

    
Route::post('/addQuery','MessagesController@addmessage')->name('addQuery');


Route::get('/Ubutumwa', [MessagesController::class,'ubutumwa'])
    ->name('ubutumwa')
    ->middleware('auth');

    
Route::get('/Ubutumwaconselor', [MessagesController::class,'Ubutumwaconselor'])
->name('Ubutumwaconselor')
->middleware('auth');


Route::get('UserProfile/{id}', [MessagesController::class,'UserProfile'])
->name('UserProfile')
->middleware('auth');




Route::get('Updateuser/{id}','RegisterUserController@showuser')
->middleware('auth');


Route::post('edituser/{id}','RegisterUserController@updateuser');




Route::get('ReplyConselor/{id}','MessagesController@showreplies')
->middleware('auth');


Route::post('submitreply/{client_id}','MessagesController@replymessage');
