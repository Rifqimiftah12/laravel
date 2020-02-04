<?php

use Illuminate\Database\Seeder;
use App\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    $this->call(ArtikelSeeder::class);
    //    $this->call(PostTablePenggajian::class);
    //    $this->call(PostsTableSeeder::class);

    factory(Barang::class,100)->create();
    }
}
