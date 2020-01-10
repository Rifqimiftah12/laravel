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
            ['Nama'=>'Rifqi', 'Jabatan'=>'Direktur', 'Jenis Kelamin'=>'Laki-Laki', 'Alamat'=>'Kp.Sindang Palay', 'Agama'=>'Islam', 'Total Gaji'=>9000000],
            ['Nama'=>'Fauzan', 'Jabatan'=>'Meneger', 'Jenis Kelamin'=>'Laki-Laki', 'Alamat'=>'Buah Batu', 'Agama'=>'Islam', 'Total Gaji'=>'5000000'],
            ['Nama'=>'Alief', 'Jabatan'=>'Sekertaris', 'Jenis Kelamin'=>'Laki-Laki', 'Alamat'=>'TKI', 'Agama'=>'Islam', 'Total Gaji'=>'4000000'],
            ['Nama'=>'Andrian', 'Jabatan'=>'Hrd', 'Jenis Kelamin'=>'Laki-Laki', 'Alamat'=>'Sukamenak', 'Agama'=>'Islam', 'Total Gaji'=>'4000000'],
            ['Nama'=>'Hilmi', 'Jabatan'=>'Hrd', 'Jenis Kelamin'=>'Laki-Laki', 'Alamat'=>'Cibedug', 'Agama'=>'Islam', 'Total Gaji'=>'4000000']
            ];
            // masukkan data ke database
            DB::table('Penggajians')->insert($posts);
    }
}
