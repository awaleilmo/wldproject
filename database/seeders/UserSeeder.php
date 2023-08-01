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
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin2020'),
                'alamat' => 'Jakarta',
                'jenisKelamin' => 'Laki-Laki',
                'tanggalLahir' => '2000-01-01',
                'telp' => '0888888888',
                'isAdmin' => 1,
                'role' => 1,
                'created_at' => '2021-04-17 00:11:47', 'updated_at' => '2021-04-17 00:11:47'
            ],[
                'name' => 'Owner',
                'username' => 'owner',
                'email' => 'owner@admin.com',
                'password' => Hash::make('admin2020'),
                'alamat' => 'Jakarta',
                'jenisKelamin' => 'Laki-Laki',
                'tanggalLahir' => '2000-01-01',
                'telp' => '0888888888',
                'isAdmin' => 1,
                'role' => 2,
                'created_at' => '2021-04-17 00:11:47', 'updated_at' => '2021-04-17 00:11:47'
            ],[
                'name' => 'awal',
                'username' => 'awaleilmo',
                'email' => 'awal.eilmo@gmail.com',
                'password' => Hash::make('awal1234'),
                'alamat' => 'Jakarta',
                'jenisKelamin' => 'Laki-Laki',
                'tanggalLahir' => '2000-01-01',
                'telp' => '0888888888',
                'isAdmin' => 0,
                'role' => 0,
                'created_at' => '2021-04-17 00:11:47', 'updated_at' => '2021-04-17 00:11:47'
            ],
        ]);
    }
}
