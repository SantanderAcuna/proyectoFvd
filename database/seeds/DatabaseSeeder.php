<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioTableSeeder::class);
        $this->call(TipoVentaTableSeeder::class);
        $this->call(OperadorTableSeeder::class);
        $this->call(RevenueTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
    }
}
