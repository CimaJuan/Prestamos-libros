<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class editorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        $editorial = 
        [
        'Editorial: Acantilado', 
        'Editorial: Akal',
        'Editorial: Alba',
        'Editorial: Aguilar',
        'Editorial: Caja Negra',
        'Editorial: Combel',
        'Editorial: Herder',
        'Editorial: Lumen',
        'Editorial: Paidós',
        'Editorial: Penguin Books'
        ];

        foreach($editorial as $editorial){
            DB::table('editorial')->insert([
                'nombre' => $editorial
            ]);
        }

    }
}