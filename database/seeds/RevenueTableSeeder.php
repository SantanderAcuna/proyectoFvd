<?php

use App\Revenue;
use Illuminate\Database\Seeder;

class RevenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Revenue::create([
            'valor' => '3000',
            
        ]);

        Revenue::create([
            'valor' => '5000',
            
        ]);

        Revenue::create([
            'valor' => '10000',
            
        ]);


        Revenue::create([
            'valor' => '15000',
            
        ]);


        Revenue::create([
            'valor' => '20000',
            
        ]);


        Revenue::create([
            'valor' => '60000',
            
        ]);


        Revenue::create([
            'valor' => '75000',
            
        ]);


        Revenue::create([
            'valor' => '100000',
            
        ]);
    }
}
