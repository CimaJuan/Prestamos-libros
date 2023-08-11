<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado =
        [
            'Disponible',
            'No Disponible'
        ];

        foreach($estado as $estado){
            DB::table('estado')->insert([
                'nombre' => $estado
            ]);
        }

    }
}
