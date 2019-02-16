<?php

use Illuminate\Database\Seeder;
use App\Exercicio;

class ExercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create('Leg Press 180', 1);
        $this->create('Leg Press 45', 1);
        $this->create('Agachamento', 1);
        $this->create('Hack 45', 1);
        $this->create('Cadeira Extensora', 1);
        $this->create('Cadeira Flexora', 1);
        $this->create('Mesa Flexora', 1);
        $this->create('Flexora em Pé', 1);
        $this->create('Adução do Quadril', 1);
        $this->create('Avanço', 1);
        $this->create('Stiff', 1);
        $this->create('Extensão do Quadril', 2);
        $this->create('Abdução do Quadril', 2);
        $this->create('Elevação do Quadril (chão)', 2);
        $this->create('Máquina de Glúteo', 2);
        $this->create('Glúteo no Graviton', 2);
        $this->create('Panturrilha Sentado', 3);
        $this->create('Panturrilha em Pé', 3);
        $this->create('Panturrilha (Leg)', 3);
        $this->create('Supra na Prancha', 4);
        $this->create('Infra na Prancha', 4);
        $this->create('Supra no Solo', 4);
        $this->create('Infra no Solo', 4);
        $this->create('Oblíquos no Solo', 4);
        $this->create('Máquina de Abdomem', 4);
        $this->create('Extensão de Tronco', 5);
        $this->create('Levantamento Terra', 5);
        $this->create('Banco Romano', 5);
        $this->create('Puxador Frente', 6);
        $this->create('Puxador Costas', 6);
        $this->create('Remada Articulada', 6);
        $this->create('Barra', 6);
        $this->create('Remada Cavalinho', 6);
        $this->create('Remada Sentado', 6);
        $this->create('Voador Invertido', 6);
        $this->create('Pullover', 6);
        $this->create('Pulldown', 6);
        $this->create('Supino Horizontal Livre', 7);
        $this->create('Supino Inclinado', 7);
        $this->create('Supino Declinado', 7);
        $this->create('Voador', 7);
        $this->create('Crucifixo', 7);
        $this->create('Cross Over', 7);
        $this->create('Supino Vertical', 7);
        $this->create('Paralelas', 7);
        $this->create('Desenvolvimento Barra', 8);
        $this->create('Desenvolvimento Máquina', 8);
        $this->create('Desenvolvimento Halter', 8);
        $this->create('Abdução de Ombros', 8);
        $this->create('Flexão de Ombros', 8);
        $this->create('Remada Alta', 8);
        $this->create('Rosca Polia', 9);
        $this->create('Rosca Scott', 9);
        $this->create('Rosca Alternada', 9);
        $this->create('Rosca Simultânea', 9);
        $this->create('Rosca Concentrada', 9);
        $this->create('Rosca com Barra', 9);
        $this->create('Rosca Martelo', 9);
        $this->create('Tríceps Pulley', 10);
        $this->create('Tríceps Francês', 10);
        $this->create('Tríceps Testa', 10);
        $this->create('Tríceps Mergulho Paralela', 10);
        $this->create('Tríceps Coice', 10);
        $this->create('Tríceps Press', 10);
        $this->create('Flexão de Punho', 11);
        $this->create('Extensão de Punho', 11);
        $this->create('Encolhimento de Ombro', 12);
        $this->create('Remada Alta', 12);
    }

    private function create($titulo, $tipoExercicioId)
    {
    	return Exercicio::create([
    		'titulo' => $titulo,
    		'tipo_exercicio_id' => $tipoExercicioId,
    	]);
    }
}
