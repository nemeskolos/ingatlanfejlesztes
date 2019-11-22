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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    $advertisement = DB::table('advertisement')->get();
    //dd($advertisement); 
    //játszós
    return view('index', ['advertisement' => $advertisement]);
});

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/advadd', function () {
    return view('advadd');
})->name('advadd');

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');


Route::get('/ad', function () {
    $advertisement = DB::table('advertisement')->get();
    
    //dd($advertisement);
    return view('ad', ['advertisement' => $advertisement]);
})->name('ad');


Route::post('/ad','AdvertisementController@store');


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/searchcontent', 'AdvertisementController@searchcontent');

Route::get('/searchcontent', function () {
    $searchkey = \Request::get('title');
    $posts = DB::table('advertisement')->where('city', 'like', '%'.$searchkey.'%')->get();

    
    //dd($advertisement);
    return view('ad', ['advertisement' => $posts]);
})->name('searchcontent');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
