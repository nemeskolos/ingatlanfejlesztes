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
    return view('index', ['advertisement' => $advertisement]);
});

Route::get('/faq', function () {
    return view('faq');

})->name('faq');

Route::get('/advadd', function () {
    return view('advadd');
});

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/ad', function () {
    $advertisement = DB::table('advertisement')->get();

    return view('ad', ['advertisement' => $advertisement]);
})->name('ad');

Route::post('/ad','AdvertisementController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
