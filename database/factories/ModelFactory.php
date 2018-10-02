<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/* $factory->define(App\Product::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'n_ordenpago'   => $faker->text(5),
        'n_cheque'      => $faker->text(5),
        'fecha'         => $faker->date($format = 'Y-m-d', '1990-12-31'),
        'objeto'        => $faker->text(10),
        'detalle'       => $faker->text(20),
        'doc_respaldo'  => $faker->sentence(2),
        'monto_numero'  => $faker->text(5),
        'monto_literal' => $faker->text(5),
        
        'nom_cheque'  => $faker->text(5),
        'n_cuenta'      => $faker->text(10),
       
    ];
});

$factory->define(App\Empresa::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nom_empresa' => $faker->text(10),
        'banco'       => $faker->text(10),
        'n_cuenta'    => $faker->text(10),
       
    ];
}); */