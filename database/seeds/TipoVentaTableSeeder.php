<?php

use App\TipoVenta;
use Illuminate\Database\Seeder;

class TipoVentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoVenta::create([
            'Nombre' => 'Prepago'
        ]);

        TipoVenta::create([
            'Nombre' => 'Pospago'
        ]);
    }
}
