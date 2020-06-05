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
            'nama' => "Sakit kepala parah",
        ]);

        Gejala::create([
            'nama' => "Merasa sering lelah dan lemah",
        ]);

        Gejala::create([
            'nama' => "masalah penglihatan",
        ]);

        Gejala::create([
            'nama' => "kesulitan bernapas",
        ]);

        Gejala::create([
            'nama' => "Detak jantung tidak normal",
        ]);
        Gejala::create([
            'nama' => "Darah dalam urine",
        ]);

        Gejala::create([
            'nama' => "Nyeri dada",
        ]);

        Gejala::create([
            'nama' => "Sering buang air kecil",
        ]);

        Gejala::create([
            'nama' => "Gampang haus",
        ]);
        Gejala::create([
            'nama' => "Cepat lapar",
        ]);
        Gejala::create([
            'nama' => "Berat badan turun drastis",
        ]);

        Gejala::create([
            'nama' => "Jantung berdebar",
        ]);

        Gejala::create([
            'nama' => "Irama jantung berubah",
        ]);


        Gejala::create([
            'nama' => "Pembengkakan pada lengan, perut, tungkai, atau sekitar mata",
        ]);
        Gejala::create([
            'nama' => "Pingsan atau terasa mau pingsan",
        ]);

        Gejala::create([
            'nama' => "Tangan dan kaki terasa dingin",
        ]);

        Gejala::create([
            'nama' => "Infeksi arthritis",
        ]);
        Gejala::create([
            'nama' => "Encok",
        ]);

        Gejala::create([
            'nama' => "Lupus",
        ]);

        Gejala::create([
            'nama' => "Gonorea",
        ]);

        Gejala::create([
            'nama' => "Rheumatoid arthritis",
        ]);

        Gejala::create([
            'nama' => "Nyeri otot",
        ]);
        Gejala::create([
            'nama' => "Sesak napas",
        ]);
        Gejala::create([
            'nama' => "Demam",
        ]);
        Gejala::create([
            'nama' => "Hidung tersumbat",
        ]);
        Gejala::create([
            'nama' => "Batuk persisten atau air liur berwarna darah",
        ]);
        Gejala::create([
            'nama' => "Perubahan kebiasaan buang air besar",
        ]);
        Gejala::create([
            'nama' => "Darah pada tinja",
        ]);
        Gejala::create([
            'nama' => "Suara serak",
        ]);
        Gejala::create([
            'nama' => "Luka yang tidak sembuh",
        ]);
    }
}
