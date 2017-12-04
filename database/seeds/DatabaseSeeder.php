<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProveedoresTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(VentaTableSeeder::class);
         $this->call(PedidoTableSeeder::class);
    }
}
