<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Santander Acuña',
            'email' => 'santanderjose19@gmail.com',
            'password' => bcrypt('85154239')
        ]);

        User::create([
            'name' => 'Fredy cala',
            'email' => 'freddycala@hotmail.com',
            'password' => bcrypt('85462895')
        ]);

        User::create([
            'name' => 'Lizeth margarita Rudas locarno',
            'email' => 'Rudaslocarnolizethmargarita@gmail.com',
            'password' => bcrypt('1082932590')
        ]);


        User::create([
            'name' => 'Amanda Salazar romero',
            'email' => 'salazar.20166@gmail.com',
            'password' => bcrypt('1082958397')
        ]);


        User::create([
            'name' => 'Nasly rocio mier perdomo',
            'email' => 'shadiilmendi2012@gmail.com',
            'password' => bcrypt('1082930449')
        ]);

        User::create([
            'name' => 'Keomad Polanco Moscote',
            'email' => 'bellarosapv@gmail.com',
            'password' => bcrypt('1081910839')
        ]);


        User::create([
            'name' => 'Yamile Portillo',
            'email' => 'YAMILEPORTILLO@HOTMAIL.COM',
            'password' => bcrypt('36718999')
        ]);


        User::create([
            'name' => 'Celene Encarnación Rodriguez Sarabia',
            'email' => 'celenesamuel03@gmail.com',
            'password' => bcrypt('1082885189')
        ]);


        User::create([
            'name' => 'Alba Afanador carrasquilla',
            'email' => 'alfa.83@live.com',
            'password' => bcrypt('57295275')
        ]);


        User::create([
            'name' => 'Jorge Alberto Celis Molina',
            'email' => 'hentaisamario@hotmail.com',
            'password' => bcrypt('7634413')
        ]);


        User::create([
            'name' => 'Yeimy Hernández',
            'email' => 'hernandezasencioestrella@gmail.com',
            'password' => bcrypt('1030576486')
        ]);


        User::create([
            'name' => 'Lilian Susana Villada Bovea',
            'email' => 'liliansusavillabo@gmail.com',
            'password' => bcrypt('36724470')
        ]);


        User::create([
            'name' => 'Osman Hoyos Beltran',
            'email' => 'osmanlds@gmail.com',
            'password' => bcrypt('1002303426')
        ]);


        User::create([
            'name' => 'Teresa de jesus Maldonado mateus',
            'email' => 'notiene@gmail.com',
            'password' => bcrypt('11898205')
        ]);


        User::create([
            'name' => 'Sharik Jlabe Marin',
            'email' => 'sharikswag@gmail.com',
            'password' => bcrypt('1003250694')
        ]);


        User::create([
            'name' => 'Cristián Santodomingo',
            'email' => 'cristiansan01@hotmail.com',
            'password' => bcrypt('1082873818')
        ]);


        User::create([
            'name' => 'Lisbeth maria Ortiz orozco',
            'email' => 'limaoro.92@hotmail.com',
            'password' => bcrypt('1081812009')
        ]);


        User::create([
            'name' => 'Laura Karina Fernández montaño',
            'email' => 'laurakarinafernandez@gmail.com',
            'password' => bcrypt('1082903453')
        ]);



        User::create([
            'name' => 'Maryuris Galan Polo',
            'email' => 'heleny-galan@hotmail.com',
            'password' => bcrypt('1083466921')
        ]);

    }
}
