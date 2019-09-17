<?php

use Illuminate\Database\Seeder;

class autor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::insert("INSERT INTO autors (nombre, telefono) VALUES
    				('SILVIO TULIO  JOSE','26451616'),
    				('JOSE CARLOS RODRIGUES','+57 3014546484')");
    }
}
