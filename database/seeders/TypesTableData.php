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
            'colour'=>'#808080'
        ]);

        DB::table('types')->insert([
            'name'=>'Feu',
            'image'=>'images/types/feu.png',
            'colour'=>'##d1530a'
        ]);
    }
}
