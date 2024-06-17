<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MovesTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('moves')->insert([
            'name'=>'Bend',
            'damage'=>999,
            'move_descr'=>'Bends the paper.',
            'type_id'=>1
        ]);

        DB::table('moves')->insert([
            'name'=>'DO NOT',
            'damage'=>0,
            'move_descr'=>'Do not bend the paper, Maxwell.',
            'type_id'=>1
        ]);

        DB::table('moves')->insert([
            'name'=>'Météore',
            'damage'=>81,
            'move_descr'=>"Fait tomber un météore sur l'ennemi.",
            'type_id'=>2
        ]);

        DB::table('moves')->insert([
            'name'=>'Arc',
            'damage'=>26,
            'move_descr'=>"Envoie de l'électricité qui rebondit entre les ennemis.",
            'type_id'=>5
        ]);

        DB::table('moves')->insert([
            'name'=>'Fouet liane',
            'damage'=>43,
            'move_descr'=>"Frappe l'ennemi de plein fouet avec une liane.",
            'type_id'=>4
        ]);

        DB::table('moves')->insert([
            'name'=>'Pistolet à eau',
            'damage'=>21,
            'move_descr'=>"Crache de l'eau sur l'ennemi.",
            'type_id'=>3
        ]);

        DB::table('moves')->insert([
            'name'=>'Absolution',
            'damage'=>9999,
            'move_descr'=>"Absout la cible de ses péchés en la tuant parce que je sais pas.",
            'type_id'=>6
        ]);
    }
}
