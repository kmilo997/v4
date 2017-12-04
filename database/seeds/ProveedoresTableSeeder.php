<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Proveedor::class,80)->create();
    }
}
