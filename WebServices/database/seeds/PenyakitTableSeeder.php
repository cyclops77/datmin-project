<?php

use \App\Penyakit;
use Illuminate\Database\Seeder;

class PenyakitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penyakit::create([
            'nama' => "Penyakit Satu",
        ]);
        Penyakit::create([
            'nama' => "Penyakit Dua",
        ]);
        Penyakit::create([
            'nama' => "Penyakit Tiga",
        ]);
    }
}
