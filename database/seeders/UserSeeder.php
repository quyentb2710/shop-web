<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'quyentb01@gmail.com',
            'first_name' => 'TRAN',
            'last_name' => 'QUYEN',
            'is_admin' => 1,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'email' => 'quyentb02@gmail.com',
            'first_name' => 'TRAN',
            'last_name' => 'QUYEN',
            'password' => Hash::make('password'),
        ]);
    }
}
