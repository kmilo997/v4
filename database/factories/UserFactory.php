<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Product::class, function (Faker $faker) {
   

    return [
        'id' => $faker->integer(),
        'nombre' => $faker->string(),
        'minimo' => $faker->integer(),  
        'precio_venta' => $faker->integer(),
        'fecha_vencimiento' => $faker->date(),
        
        
    ];
});


$factory->define(App\Cliente::class, function (Faker $faker) {
   

    return [
        'id' => $faker->integer(),
        'nombre' => $faker->string(),
        'ciudad' => $faker->integer(),
        'direccion' => $faker->integer(),
        'telefono' => $faker->integer(),
        'email' => $faker->integer(),
        
        
    ];
});



$factory->define(App\Proveedor::class, function (Faker $faker) {
   

    return [
    'id'=> $faker->integer(),
        'Nombre' => $faker->string(),
        'Telefono' => $faker->string(),
        'Direccion' => $faker->string(),
        'Correo' => $faker->string(),
        'Ciudad' => $faker->string()
        
        
    ];
});


$factory->define(App\Venta::class, function (Faker $faker) {
   

    return [
    
         'id'=> $faker->integer(),
         'producto'=> $faker->integer(),
         'cliente'=> $faker->string(),
         'unidades'=> $faker->integer(),
         'total' => $faker->integer(),
    ];
});


$factory->define(App\Pedido::class, function (Faker $faker) {
    
 
     return [
     
          'id'=> $faker->integer(),
          'fecha'=> $faker->date(),
          'producto'=> $faker->integer(),
          'cliente'=> $faker->string(),
          'unidades'=> $faker->integer(),
          'total' => $faker->integer(),
          'tipo' => $faker->integer(),
     ];
 });

