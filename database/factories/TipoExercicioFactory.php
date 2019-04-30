<?php

use Faker\Generator as Faker;

$factory->define(App\TipoExercicio::class, function (Faker $faker) {
    return [
        'titulo' => $faker->word,
    ];
});
