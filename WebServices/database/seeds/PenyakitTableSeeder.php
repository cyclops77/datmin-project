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
            'nama' => "Darah TInggi",
        ]);
        Penyakit::create([
            'nama' => "Diabetes",
        ]);
        Penyakit::create([
            'nama' => "Penyakit Jantung",
        ]);
        Penyakit::create([
            'nama' => "Penyakit Persendian",
        ]);
        Penyakit::create([
            'nama' => "ISPA",
        ]);
        Penyakit::create([
            'nama' => "Kanker",
        ]);
    }
}
