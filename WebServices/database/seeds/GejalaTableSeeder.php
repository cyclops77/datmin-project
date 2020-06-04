<?php

use \App\Gejala;
use Illuminate\Database\Seeder;

class GejalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gejala::create([
            'nama' => "Gejala 1",
        ]);

        Gejala::create([
            'nama' => "Gejala 2",
        ]);

        Gejala::create([
            'nama' => "Gejala 3",
        ]);

        Gejala::create([
            'nama' => "Gejala 4",
        ]);
    }
}
