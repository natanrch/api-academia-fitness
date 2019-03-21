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
            'tipo' => 'default',
        ]);
        DB::table('users')->insert([
            'name' => 'teste instrutor',
            'email' => 'teste_instrutor@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '11111111111',
            'tipo' => 'instrutor',
        ]);
        DB::table('users')->insert([
            'name' => 'teste admin',
            'email' => 'teste_admin@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '22222222222',
            'tipo' => 'admin',
        ]);

    }
}
