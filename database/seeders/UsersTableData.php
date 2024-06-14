<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class UsersTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Martin',
            'nickname'=>'mart',
            'email'=>'martin.asta@hotmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('123'),
            'remember_token' => Str::random(10),
            'role'=>'admin'
        ]);

        DB::table('users')->insert([
            'name'=>'User',
            'nickname'=>'loser',
            'email'=>'user@hotmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('456'),
            'remember_token' => Str::random(10),
            'role'=>'user'
        ]);
    }
}
