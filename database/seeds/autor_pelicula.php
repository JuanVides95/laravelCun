<?php

use Illuminate\Database\Seeder;

class autor_pelicula extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factura = factory(App\autor::class, 5)
        ->create()
        ->each(function($autor){
        	$autor->pelicula()->save(factory(App\pelicula::class)->make());
        });
    }
}
