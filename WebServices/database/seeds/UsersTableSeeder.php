<?php

use \App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Percob",
            'email' => "a@a.com",
            'password' => bcrypt("a"),
        ]);
    }
}
