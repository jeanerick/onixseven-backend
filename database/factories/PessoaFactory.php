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

$factory->define(App\Pessoa::class, function (Faker $faker) {
    return [
        'pes_nome' => $faker->name,
        'pes_data_nascimento' =>  $faker->date($format = 'Y-m-d', $max = 'now'),
        'pes_cpf' => $faker->text(14),
        'pes_telefone' => $faker->e164PhoneNumber(),
        'pes_observacoes' => $faker->text(14),
    ];
});