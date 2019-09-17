<?php

use Illuminate\Database\Seeder;

class cliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cliente = factory(App\cliente::class, 10)->create();
    }
}
