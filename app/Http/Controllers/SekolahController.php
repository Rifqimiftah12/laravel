<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function hallo()
    {
        return "Hallo Dunia";
    }
    public function dunia()
    {
        return "Dunia";
    }

    public function a()
    {
        return "Hay....";
    }

    public function b()
    {
        return "hay nama saya upin ini adik saya ipin";
    }

    public function c()
    {
        return "Hallo Dunia Yang Indah";
    }

    public function d()
    {
        return "Hallo Alam Yang Indah";
    }

    public function e()
    {
        return "Hallo  Untuk Semuanya";
    }

    public function f()
    {
        return "Dunia Ini Sebentar lagi";
    }

    public function g()
    {
        return "Bertobat lah";
    }

    public function h()
    {
        return "Hallo Fauzan";
    }

    public function jeniskucing($warna)
    {
        return "Warna Kucing Kamu : ";
    }

    public function beli($item,$harga)
    {
        if(isset($harga)){
            if ($harga >= 15000) {
                echo "Dengan Ukuran Jumbo ".$harga;
            }elseif ($harga < 15000 && $harga >= 7500) {
                echo "Dengan Ukuran Medium ".$harga;
            }elseif($harga < 7500)
                echo "Dengan Ukuran Small ".$harga;
        }
    }
}
