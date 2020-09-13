<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'nombre' => 'admin',
        ]);

        Rol::create([
            'nombre' => 'supervisor',
        ]);

        Rol::create([
            'nombre' => 'asesor',
        ]);
    }
}
