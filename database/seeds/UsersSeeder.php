<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'teste',
            'email' => 'teste@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '00000000000',
        ]);
    }
}
