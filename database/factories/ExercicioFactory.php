<?php

use Faker\Generator as Faker;

$factory->define(App\Exercicio::class, function (Faker $faker) {
    return [
        'titulo' => $faker->word,
        'tipo_exercicio_id' => 1,
    ];
});
