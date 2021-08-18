<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Ian Joseph',
                'email' => 'ian.joseph@gmail.com',
                'phone' => '0123456789',
                'address' => 'Taipei, Taiwan',
                'password' => 'ian123',
                'national_id' => '12345678'
            ],
            [
                'name' => 'Graciela Gabrielle',
                'email' => 'grace.gabrielle@gmail.com',
                'phone' => '01234567890',
                'address' => 'Jakarta, Indonesia',
                'password' => 'grace123',
                'national_id' => '123456789'
            ]
        ]);
    }
}
