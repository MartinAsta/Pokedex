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
            'name'=>'Maxwell',
            'hp'=>999,
            'weight'=>500,
            'height'=>5,    
            'image'=>'images/pokemon/Maxwell.png',
            'type1_id'=>1
        ]);

        DB::table('pokemon')->insert([
            'name'=>'Shatmo',
            'hp'=>49,
            'weight'=>8.5,
            'height'=>1.3,
            'image'=>'images/pokemon/e0686fbe7417a616d470c44260bf7f40.png',
            'type1_id'=>1
        ]);

        DB::table('pokemon')->insert([
            'name'=>'Mained',
            'hp'=>45,
            'weight'=>12.6,
            'height'=>5.9,
            'image'=>'images/pokemon/139b3062dd89fee76917d0f0cd88f80f.png',
            'type1_id'=>1
        ]);
        DB::table('pokemon')->insert([
            'name'=>'Deimos',
            'hp'=>400,
            'weight'=>1500,
            'height'=>15,
            'image'=>'images/pokemon/84868c74ede49128cb20b05163da6658.png',
            'type1_id'=>1
        ]);
        DB::table('pokemon')->insert([
            'name'=>'Gorseval',
            'hp'=>250,
            'weight'=>2000,
            'height'=>12,
            'image'=>'images/pokemon/9f13b1dfef72064f125349814e293268.png',
            'type1_id'=>1
        ]);
        DB::table('pokemon')->insert([
            'name'=>'Qadim',
            'hp'=>300,
            'weight'=>150,
            'height'=>4,
            'image'=>'images/pokemon/62c81c2719113325cc163fe73ad6a140.png',
            'type1_id'=>1
        ]);
        DB::table('pokemon')->insert([
            'name'=>'Xera',
            'hp'=>250,
            'weight'=>80,
            'height'=>2,
            'image'=>'images/pokemon/b881d9b672ba40661dda421a0d5f53bc.png',
            'type1_id'=>1
        ]);
        DB::table('pokemon')->insert([
            'name'=>'Samarog',
            'hp'=>350,
            'weight'=>2300,
            'height'=>10,
            'image'=>'images/pokemon/0840a50da92d6390fe70210b835c89d3.png',
            'type1_id'=>1
        ]);
    }
}
