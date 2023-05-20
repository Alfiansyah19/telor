<?php

use Illuminate\Support\Facades\Route;

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
/* HOME */

Route::get('/', function () {
    return view('welcome');
});


/* HOME INOVASI */
Route::get('/inovasi', function () {
    return view('inovasi');
});


/* TEAM */
Route::get('/team', function () {
    return view('team');
});


/* GALERI */
Route::get('/portfolio', function () {
    return view('portfolio');
});


/* KONTAK */
Route::get('/contact', function () {
    return view('contact');
});


/* PERENCANAAN */
Route::get('/perjanjian', function () {
    return view('perjanjian');
});

Route::get('/sotk', function () {
    return view('sotk');
});

Route::get('/renja', function () {
    return view('renja');
});

Route::get('/dpa', function () {
    return view('dpa');
});

Route::get('/renstra', function () {
    return view('renstra');
});


/* PELAYANAN */
Route::get('/non-perizinan', function () {
    return view('non-perizinan');
});

Route::get('/izin', function () {
    return view('izin');
});


/* INOVASI */
Route::get('/inovasi-web', function () {
    return view('inovasi-web');
});

Route::get('/inovasi-sekat', function () {
    return view('inovasi-sekat');
});

Route::get('/inovasi-panah', function () {
    return view('inovasi-panah');
});

Route::get('/inovasi-ditahan', function () {
    return view('inovasi-ditahan');
});

Route::get('/inovasi-tragis', function () {
    return view('inovasi-tragis');
});

Route::get('/inovasi-bibir', function () {
    return view('inovasi-bibir');
});

Route::get('/inovasi-lakon', function () {
    return view('inovasi-lakon');
});

Route::get('/inovasi-lawak', function () {
    return view('inovasi-lawak');
});

Route::get('/inovasi-sumasuke', function () {
    return view('inovasi-sumasuke');
});

Route::get('/inovasi-undi', function () {
    return view('inovasi-undi');
});

Route::get('/inovasi-lambai', function () {
    return view('inovasi-lambai');
});

Route::get('/inovasi-ditandu', function () {
    return view('inovasi-ditandu');
});

Route::get('/inovasi-david', function () {
    return view('inovasi-david');
});

Route::get('/inovasi-ditags', function () {
    return view('inovasi-ditags');
});

Route::get('/inovasi-sipausdagu', function () {
    return view('inovasi-sipausdagu');
});

Route::get('/inovasi-pointmas', function () {
    return view('inovasi-pointmas');
});

Route::get('/inovasi-geserseru', function () {
    return view('inovasi-geserseru');
});

Route::get('/inovasi-lomak', function () {
    return view('inovasi-lomak');
});

/* KELURAHAN */
Route::get('/kel-lb', function () {
    return view('kel-lb');
});

Route::get('/kel-mp', function () {
    return view('kel-mp');
});

Route::get('/kel-ld', function () {
    return view('kel-ld');
});

Route::get('/kel-sm', function () {
    return view('kel-sm');
});

Route::get('/kel-us', function () {
    return view('kel-us');
});

Route::get('/kel-pls', function () {
    return view('kel-pls');
});
