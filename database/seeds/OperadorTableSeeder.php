<?php

use App\Operador;
use Illuminate\Database\Seeder;

class OperadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operador::create([
            'nombre' => 'Tigo',
            
        ]);

        Operador::create([
            'nombre' => 'Claro',
            
        ]);

        Operador::create([
            'nombre' => 'Movistar',
            
        ]);


        Operador::create([
            'nombre' => 'Virgin',
            
        ]);


        Operador::create([
            'nombre' => 'Flash mobile',
            
        ]);


        Operador::create([
            'nombre' => 'Exito',
            
        ]);


        Operador::create([
            'nombre' => 'Avantel',
            
        ]);


        Operador::create([
            'nombre' => 'Etb',
            
        ]);


        Operador::create([
            'nombre' => 'Ronnin',
            
        ]);


        Operador::create([
            'nombre' => 'Scarlet',
            
        ]);


        Operador::create([
            'nombre' => 'Kaley mobile',
            
        ]);


        Operador::create([
            'nombre' => 'Uff',
            
        ]);


        Operador::create([
            'nombre' => 'Wom',
            
        ]);

    }
}
