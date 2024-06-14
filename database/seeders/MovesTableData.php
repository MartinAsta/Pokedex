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
    }
}
