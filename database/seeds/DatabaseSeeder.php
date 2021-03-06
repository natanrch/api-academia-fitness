<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TipoExercicioSeeder::class);
        $this->call(ExercicioSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
