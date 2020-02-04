<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a="Aku Cinta Bandung";
        return view('latihan',compact('a'));
    }

    public function pass1()
    {
        $data = [
            ['nama'=>'Ucup','kelas'=>'Rpl 2'],
            ['nama'=>'IcIp','kelas'=>'Rpl 1'],
            ['nama'=>'Ecep','kelas'=>'Rpl 3'],
        ];
        return view ('latihan1',['siswa' => $data]);
    }

    public function pass2()
    {
        $data = [
            ['nama'=>'Fauzan','nip'=>'22144','jabatan'=>'Manager','agama'=>'Islam',
            'jk'=>'Laki-Laki','jam_kerja' =>'250'],

            ['nama'=>'Rifqi','nip'=>'22121','jabatan'=>'Sekertaris','agama'=>'Islam',
            'jk'=>'Laki-Laki','jam_kerja' =>'240'],

            ['nama'=>'Alif','nip'=>'222243','jabatan'=>'Staff','agama'=>'Islam',
            'jk'=>'Laki-Laki','jam_kerja' =>'210'],
        ];
        return view ('latihan2',['pegawai'=> $data]);
    }
}
