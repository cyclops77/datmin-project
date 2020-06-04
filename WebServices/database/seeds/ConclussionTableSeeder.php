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
            'gejala' => '1,3,',
            'penyakit_id' => 1,
        ]);
        Conclussion::create([
            'gejala' => '2,3,4,',
            'penyakit_id' => 2,
        ]);
        Conclussion::create([
            'gejala' => '1,4,',
            'penyakit_id' => 3,
        ]);
    }
}
