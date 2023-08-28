<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=>'Fatma Abu_Elnasr',
            'email'=>'tom@gmail.com ',
            'password'=>Hash::make('12345')
        ]);

        DB::table('users')->insert([
            'name'=>'Mayada Muhammed',
            'email'=>'may@gmail.com ',
            'password'=>Hash::make('1981')
        ]);
    }
}
