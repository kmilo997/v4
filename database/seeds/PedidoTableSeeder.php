<?php

use Illuminate\Database\Seeder;
use App\Pedido;

class PedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Pedido::class,80)->create();
    }
}
