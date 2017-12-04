<?php

use Illuminate\Database\Seeder;
use App\Clientes;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Clientes::class,80)->create();
    }
}
