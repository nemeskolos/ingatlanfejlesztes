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
<<<<<<< Updated upstream
})->name('advadd');

Route::get('/advedit', function () {
    return view('advedit');
})->name('advedit');
=======
});
>>>>>>> Stashed changes

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

<<<<<<< Updated upstream
Route::get('/insertadddata', function () {
    return view('insertadvdata');
})->name('insertadvdata');

=======
>>>>>>> Stashed changes
Route::get('/ad', function () {
    $advertisement = DB::table('advertisement')->get();

    return view('ad', ['advertisement' => $advertisement]);
})->name('ad');

<<<<<<< Updated upstream


Route::post('/ad','AdvertisementController@store');
Route::post('/advadd','AdvertisementController@store');
Route::post('/insertadvdata','AdvertisementController@store');

Route::get('/home', function () {
    return view('home');
})->name('home');
=======
Route::post('/ad','AdvertisementController@store');


>>>>>>> Stashed changes


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
