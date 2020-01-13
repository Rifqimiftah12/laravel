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

Route::get('/testmodel', function() {
    $query = App\Post::all();
    return $query;
    });

    Route::get('/testmodel', function() {
        $query = App\Post::find(1);
        return $query;
    });

    Route::get('/testmodel', function(){
        $query = App\Post::where('title','like','%cepat nikah%')->get();
        return $query;
    });
    Route::get('/testmodel', function(){
        $post = App\Post::find(1);
        $post->title = "Ciri Keluarga Sakinah";
        $post->save();
        return $post;
    });
    Route::get('/testmodel', function(){
        $post = App\Post::find(1);
        $post->delete();
    });
    Route::get('/testmodel', function(){
        $post = new App\Post;
        $post->title = "7 Amalan Pembuka Jodoh";
        $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
        $post->save();
        return $post;
    });
    Route::get('/tes', function() {
        $query = App\Penggajian::all();
        return $query;
    });
     Route::get('/data-gaji-1',function(){
         $query = App\Penggajian::where('jabatan','=','Direktur')->get();
         return $query;
     });
     Route::get('/data-gaji-2',function(){
        $query = App\Penggajian::select('id','nama','jabatan')
        ->where('jabatan','=','Hrd ')
        ->get();
        return $query;
    });
    Route::get('/data-gaji/{id}',function($id){
        $query = App\Penggajian::find($id);
        return $query;
    });
    Route::get('tambah-data-gaji', function(){
        $gaji = new App\Penggajian();
        $gaji->nama = 'Indah Mambo';
        $gaji->jabatan = 'Sekertaris';
        $gaji->jk = 'perempuan';
        $gaji->alamat = 'Bojong Honey';
        $gaji->total_gaji = '5000000';
        $gaji->agama = 'Islam';
        $gaji->save();
        return $gaji;
    });

    Route::get('haloo','SekolahController@hallo');

    Route::get('haloo1','SekolahController@a');

    Route::get('haloo2','SekolahController@b');

    Route::get('haloo3','SekolahController@c');

    Route::get('haloo4','SekolahController@d');

    Route::get('haloo5','SekolahController@e');

    Route::get('haloo6','SekolahController@f');

    Route::get('haloo7','SekolahController@g');

    Route::get('haloo8','SekolahController@h');

    Route::get('warnakucing/{warna?}',function($warna=null){
            if (isset($warna)) {
            return" Nama Kucing kamu : ".$warna;
        }
        else{
            return"Nama Kucing Kamu : ";
        }
    });

    Route::get('beli/{iten?}/{harga?}',function($item=null,$harga=null){
        if (isset($item)) {
            return"Anda Memesan : ".$item;
        }
        if(isset($harga)){
        if ($harga >= 15000) {
            echo "Dengan Ukuran Jumbo ".$harga;
        }elseif ($harga < 15000 && $harga >= 7500) {
            echo "Dengan Ukuran Medium ".$harga;
        }elseif($harga < 7500)
            echo "Dengan Ukuran Small ".$harga;
    }
        if ($item == null & $harga == null) {
            return"Silakan Masukan Item Terlebih Dahulu : ";
        }
    });
