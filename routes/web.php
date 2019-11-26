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

Route::get('/sucadvmsg', function () {
    return view('sucadvmsg');
})->name('sucadvmsg');

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

Route::post('/advadd', 'AdvertisementController@create');

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/ad', function () {
    $advertisement = DB::table('advertisement')->get();   
    //dd($advertisement);
    return view('ad', ['advertisement' => $advertisement]);
})->name('ad');

Route::post('/ad','AdvertisementController@store');

Route::get('/advdel', function () {
    $advertisement = DB::table('advertisement')->get(); 
    //dd($advertisement);
    return view('advdel', ['advertisement' => $advertisement]);
})->name('advdel');

Route::post('/advdel','AdvertisementController@store1');

Route::get('/delete/{id}','AdvertisementController@delete');

Route::get('/delete', function () {
    return view('delete');
})->name('delete');



Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/try', function () {
    return view('try');
})->name('try');

Route::get('/searchcontent', 'AdvertisementController@searchcontent');

Route::get('/searchcontent', function () {
    $searchkey = \Request::get('title');
    $posts = DB::table('advertisement')->where('city', 'like', '%'.$searchkey.'%')->get();
    //dd($advertisement);
    return view('ad', ['advertisement' => $posts]);
})->name('searchcontent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
