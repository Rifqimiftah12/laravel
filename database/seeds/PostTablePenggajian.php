<?php

use Illuminate\Database\Seeder;

class PostTablePenggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['nama'=>'Rifqi', 'jabatan'=>'Direktur', 'jk'=>'Laki-Laki', 'alamat'=>'Kp.Sindang Palay', 'agama'=>'Islam', 'total_gaji'=>'9000000'],
            ['nama'=>'Fauzan', 'jabatan'=>'Meneger', 'jk'=>'Laki-Laki', 'alamat'=>'Buah Batu', 'agama'=>'Islam', 'total_gaji'=>'5000000'],
            ['nama'=>'Alief', 'jabatan'=>'Sekertaris', 'jk'=>'Laki-Laki', 'alamat'=>'TKI', 'agama'=>'Islam', 'total_gaji'=>'4000000'],
            ['nama'=>'Andrian', 'jabatan'=>'Hrd', 'jk'=>'Laki-Laki', 'alamat'=>'Sukamenak', 'agama'=>'Islam', 'total_gaji'=>'4000000'],
            ['nama'=>'Hilmi', 'jabatan'=>'Hrd', 'jk'=>'Laki-Laki', 'alamat'=>'Cibedug', 'agama'=>'Islam', 'total_gaji'=>'4000000']
            ];
            // masukkan data ke database
            DB::table('Penggajians')->insert($posts);
    }
}
