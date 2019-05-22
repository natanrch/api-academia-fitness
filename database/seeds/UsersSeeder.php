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
            'data_de_nascimento' => '1990-07-01',
            'data_de_pagamento' => '10',
            'modalidade' => 'musculação',
            'avaliacao' => 'arquivo.pdf',
            'novo_usuario' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'teste',
            'email' => 'teste_outro_aluno@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '44444444444',
            'tipo' => 'default',
            'data_de_nascimento' => '1990-07-01',
            'data_de_pagamento' => '10',
            'modalidade' => 'musculação',
            'avaliacao' => 'arquivo.pdf',
            'novo_usuario' => 0,
        ]);
        DB::table('users')->insert([
            'name' => 'teste instrutor',
            'email' => 'teste_instrutor@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '11111111111',
            'tipo' => 'instrutor',
            'cref' => '111111',
            'novo_usuario' => 0,
        ]);
        DB::table('users')->insert([
            'name' => 'teste admin',
            'email' => 'teste_admin@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '22222222222',
            'tipo' => 'admin',
            'novo_usuario' => 0,
        ]);
        DB::table('instrutor_alunos')->insert([
            'instrutor_id' => 3,
            'aluno_id' => 1,
            'status' => 'sem_ficha',
        ]);
        DB::table('instrutor_alunos')->insert([
            'instrutor_id' => 3,
            'aluno_id' => 2,
            'status' => 'sem_ficha',
        ]);

    }
}
