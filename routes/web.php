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

//Route Basic
Route::get('/about', function() {
return '<h1>Halo</h1>'
.'Selamat datang di webapp saya<br>'
.'Laravel, emang keren.';
});

Route::get('profil',function()
{
return view('biodata');
});

// Route::get('profil1',function()
// {
// return view('biodata1');
// });

// Route::get('profil2',function()
// {
// return view('biodata2');
// });

// Route::get('profil3',function()
// {
// return view('biodata3');
// });

// Route::get('profil4',function()
// {
// return view('biodata4');
// });

// Route::get('profil5',function()
// {
// return view('biodata5');
// });

//Route Parameter
Route::get('/pesan/{makan}/{minum}/{harga}',function($mkn,$min,$hrg){
    return 'Makanan Yang Saya Pesan Adalah '.$mkn. '<br>Minum Saya '.$min.'<br>Harga '.$hrg;
});

//Route Optimal Parameter
Route::get('halo/{nama?}',function($nama='Rifqi'){
    return 'Halo Nama Saya Adalah '.$nama;
});

//Route Optimal Parameter
Route::get('pesanan/{minuman?}/{makanan?}/{harga?}',function($min=null,$mkn=null,$hrg=null){
    if (isset($min)) {
        echo"Anda Memesan : ".$min;
    }
        if (isset($mkn)) {
        echo" & ".$mkn;
    }
        if (isset($hrg)) {
        echo" Dengan Harga : ".$hrg;
    }
    if ($min == null & $mkn == null & $hrg == null) {
        echo"Anda Belum Memesan Makanan";
    }
});
