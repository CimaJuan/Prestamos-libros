<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = 
        [
            'Cuento',
            'Novela',
            'Drama',
            'Libros de texto',
            'Cientificos',
            'Biográficos',
            'Religiosos',
            'Consulta',
            'Poesia',
            'Instructivos'
        ];

        foreach($categoria as $categoria){
            DB::table('categoria')->insert([
                'nombre' => $categoria
            ]);
        }

    }
}
