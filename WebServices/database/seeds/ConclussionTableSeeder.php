<?php

use \App\Conclussion;
use Illuminate\Database\Seeder;

class ConclussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conclussion::create([
            'gejala' => '1,2,3,4,5,6,7,12,13,',
            'penyakit_id' => 1,
        ]);
        Conclussion::create([
            'gejala' => '2,3,8,9,10,11,13,30,',
            'penyakit_id' => 2,
        ]);
        Conclussion::create([
            'gejala' => '12,13,14,15,16,',
            'penyakit_id' => 3,
        ]);
        Conclussion::create([
            'gejala' => '2,10,17,18,19,20,21,22,',
            'penyakit_id' => 4,
        ]);
        Conclussion::create([
            'gejala' => '1,12,22,23,24,25,',
            'penyakit_id' => 5,
        ]);
        Conclussion::create([
            'gejala' => '1,6,9,10,11,23,24,26,27,28,29,30,',
            'penyakit_id' => 6,
        ]);


        Conclussion::create([
            'gejala' => '1,2,3,12,13,',
            'penyakit_id' => 1,
        ]);
        Conclussion::create([
            'gejala' => '2,3,8,9,30,',
            'penyakit_id' => 2,
        ]);
        Conclussion::create([
            'gejala' => '12,13,',
            'penyakit_id' => 3,
        ]);
        Conclussion::create([
            'gejala' => '2,10,22,',
            'penyakit_id' => 4,
        ]);
        Conclussion::create([
            'gejala' => '1,24,25,',
            'penyakit_id' => 5,
        ]);
        Conclussion::create([
            'gejala' => '1,6,9,10,28,29,30,',
            'penyakit_id' => 6,
        ]);


        Conclussion::create([
            'gejala' => '1,6,7,12,13,',
            'penyakit_id' => 1,
        ]);
        Conclussion::create([
            'gejala' => '2,11,13,30,',
            'penyakit_id' => 2,
        ]);
        Conclussion::create([
            'gejala' => '12,13,14,15,16,',
            'penyakit_id' => 3,
        ]);
        Conclussion::create([
            'gejala' => '19,20,21,22,',
            'penyakit_id' => 4,
        ]);
        Conclussion::create([
            'gejala' => '1,12,22,23,24,25,',
            'penyakit_id' => 5,
        ]);
        Conclussion::create([
            'gejala' => '9,10,11,26,27,28,29,30,',
            'penyakit_id' => 6,
        ]);
    }
}
