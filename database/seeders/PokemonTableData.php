<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;
use DB;

class PokemonTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pokemon')->insert([
            'name' => 'Maxwell',
            'hp' => 999,
            'weight' => 500,
            'height' => 5,
            'image' => 'images/pokemon/Maxwell.png',
            'type1_id' => 1,
            'move1_id' => 1,
            'move2_id' => 2,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Shatmo',
            'hp' => 49,
            'weight' => 8.5,
            'height' => 1.3,
            'image' => 'images/pokemon/shatmo.png',
            'type1_id' => 4,
            'type2_id' => 6,
            'move1_id' => 5,
            'move2_id' => 7,
            'move3_id' => 3,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Mained',
            'hp' => 45,
            'weight' => 12.6,
            'height' => 5.9,
            'image' => 'images/pokemon/mained.png',
            'type1_id' => 3,
            'move1_id' => 6,
        ]);
        DB::table('pokemon')->insert([
            'name' => 'Deimos',
            'hp' => 400,
            'weight' => 1500,
            'height' => 15,
            'image' => 'images/pokemon/deimos.png',
            'type1_id' => 3,
            'type2_id' => 2,
            'move1_id' => 7,
        ]);
        DB::table('pokemon')->insert([
            'name' => 'Gorseval',
            'hp' => 250,
            'weight' => 2000,
            'height' => 12,
            'image' => 'images/pokemon/gorseval.png',
            'type1_id' => 3,
            'type2_id' => 5,
            'move1_id' => 5,
        ]);
        DB::table('pokemon')->insert([
            'name' => 'Qadim',
            'hp' => 300,
            'weight' => 150,
            'height' => 4,
            'image' => 'images/pokemon/qadim.png',
            'type1_id' => 1,
            'move1_id' => 2,
        ]);
        DB::table('pokemon')->insert([
            'name' => 'Xera',
            'hp' => 250,
            'weight' => 80,
            'height' => 2,
            'image' => 'images/pokemon/xera.png',
            'type1_id' => 6,
            'move1_id' => 6,
        ]);
        DB::table('pokemon')->insert([
            'name' => 'Samarog',
            'hp' => 350,
            'weight' => 2300,
            'height' => 10,
            'image' => 'images/pokemon/samarog.png',
            'type1_id' => 1,
            'move1_id' => 4,
        ]);
    }
}
