<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Producto::class, static function (Faker\Generator $faker) {
    return [
        'Nombre' => $faker->sentence,
        'Descripcion' => $faker->sentence,
        'Precio' => $faker->sentence,
        'Stock' => $faker->randomNumber(5),
        'Categoria' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Usuario::class, static function (Faker\Generator $faker) {
    return [
        'Nombres' => $faker->sentence,
        'Apellidos' => $faker->sentence,
        'Usuario' => $faker->sentence,
        'Contraseña' => $faker->sentence,
        'Email' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
