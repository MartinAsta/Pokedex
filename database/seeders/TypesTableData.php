<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TypesTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'name'=>'Normal',
            'image'=>'images/types/normal.png',
            'colour'=>'#C3C3C3'
        ]);

        DB::table('types')->insert([
            'name'=>'Feu',
            'image'=>'images/types/feu.png',
            'colour'=>'#FF7F27'
        ]);

        DB::table('types')->insert([
            'name'=>'Eau',
            'image'=>'images/types/eau.png',
            'colour'=>'#0099DB'
        ]);

        DB::table('types')->insert([
            'name'=>'Plante',
            'image'=>'images/types/plante.png',
            'colour'=>'#A1CC1A'
        ]);

        DB::table('types')->insert([
            'name'=>'Foudre',
            'image'=>'images/types/foudre.png',
            'colour'=>'#FFF200'
        ]);

        DB::table('types')->insert([
            'name'=>'Dragon',
            'image'=>'images/types/dragon.png',
            'colour'=>'#D25ED4'
        ]);
    }
}
