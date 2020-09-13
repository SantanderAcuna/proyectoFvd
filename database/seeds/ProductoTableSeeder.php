<?php

use App\Producto;
use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'Chip Especial',

        ]);

        Producto::create([
            'nombre' => 'Portabilidad Prepago',

        ]);


        Producto::create([
            'nombre' => 'Promocion Portabilidad Prepago',

        ]);


        Producto::create([
            'nombre' => 'Chip Prepago 3 dias',
        ]);


        Producto::create([
            'nombre' => 'Chip Prepago 7 dias',
        ]);


        Producto::create([
            'nombre' => 'Chip Prepago 15 dias',
        ]);


        Producto::create([
            'nombre' => 'Portabilidad Pospago',

        ]);



        Producto::create([
            'nombre' => 'Migracio Pospago',

        ]);



        Producto::create([
            'nombre' => 'Portabilidad Pospago',

        ]);


        Producto::create([
            'nombre' => 'Pospago 5.11',

        ]);


        Producto::create([
            'nombre' => 'Pospago 5.2',

        ]);


        Producto::create([
            'nombre' => 'Pospago 5.3',

        ]);
    }
}
