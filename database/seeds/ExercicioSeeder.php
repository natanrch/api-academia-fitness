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
        $this->create('Leg Press 180', 1, 'O Leg Press 180º ou 80º é um exercício destinado a musculatura envolvida no quadríceps e glúteo máximo. O músculo que será atingido com maior concentração depende do posicionamento dos pés no aparelho e da amplitude realizada no movimento.');
        $this->create('Leg Press 45', 1, 'O Leg Press 45º é um exercício destinado a musculatura envolvida no quadríceps e glúteo máximo. O músculo que será atingido com maior concentração depende do posicionamento dos pés no aparelho e da amplitude realizada no movimento.');
        $this->create('Agachamento', 1, 'O agachamento é um exercício que solicita grande parte do sistema muscular. Ele é capaz de atingir os quadríceps, glúteo médio e glúteo maior. Além disso, é um ótimo exercício para o sistema cardiovascular.');
        $this->create('Hack 45', 1, 'O Hack 45º visa atingir, de forma mais concentrada, os músculos envolvidos no quadríceps, como o vasto medial, intermediário e lateral.');
        $this->create('Cadeira Extensora', 1, 'A cadeira extensora visa atingir diversos músculos envolvidos no quadríceps, sendo eles o reto da coxa, vasto medial, vasto lateral e vasto intermediário, de forma mais concentrada.');
        $this->create('Cadeira Flexora', 1, 'A cadeira flexora busca atingir os mais diversos músculos envolvidos na parte posterior da coxa, sendo eles: bíceps da coxa (cabeça longa), bíceps da coxa (cabeça curta), semitendinoso, semimembranoso e gastrocnêmio.');
        $this->create('Mesa Flexora', 1, 'A mesa flexora busca atingir os mais diversos músculos envolvidos na parte posterior da coxa, sendo eles: bíceps da coxa (cabeça longa), bíceps da coxa (cabeça curta), semitendinoso, semimembranoso e gastrocnêmio.');
        $this->create('Flexora em Pé', 1, 'A flexora em pé atinge os músculos envolvidos na parte posterior da coxa, sendo eles: semitendinoso, bíceps da coxa (cabeça longa), semimembranoso e gastrocnêmio.');
        $this->create('Adução do Quadril', 1, 'A adução de quadril é um exercício que visa atingir os músculos presentes na área interna das coxas, sendo estes: adutor médio e longo, grácil e pectíneo.');
        $this->create('Avanço', 1, 'O avanço (ou afundo) é um exercício destinado a trabalhar as coxas e os glúteos. Mais especificamente, os músculos envolvidos neste exercício são: reto da coxa, vasto medial, vasto lateral e glúteo máximo.', 'hvHh2g587ic');
        $this->create('Stiff', 1, 'O stiff é um exercício destinado a área posterior das coxas e aos glúteos. Para tal, são atingidos os seguintes músculos: glúteo máximo, semitendinoso, bíceps da coxa (cabeça longa), semimembranoso e bíceps da coxa (cabeça curta).', 'mu8vPGDhM-c');
        $this->create('Extensão do Quadril', 2, 'A extensão de quadril trabalha, principalmente, o glúteo máximo, e, em menor extensão, o semitendinoso, semimembranoso e o bíceps da coxa (cabeça longa).');
        $this->create('Abdução do Quadril', 2, 'A abdução de quadril é um exercício destinado para a parte superior do quadril, trabalhando principalmente o glúteo máximo e o médio.', 'bMdWJYc-RXk');
        $this->create('Elevação do Quadril (chão)', 2, 'A elevação de quadril visa trabalhar, principalmente, os músculos presentes na parte posterior das coxas, e os glúteos máximos.', 'c-LjzTk8Ld4');
        $this->create('Máquina de Glúteo', 2, 'A máquina de glúteo é destinada a trabalhar diversos músculos envolvidos no glúteo, mas, de forma mais concentrada, o glúteo máximo.');
        $this->create('Glúteo no Graviton', 2, 'O glúteo no graviton é destinado a trabalhar diversos músculos envolvidos no glúteo, mas, de forma mais concentrada, o glúteo máximo.');
        $this->create('Panturrilha Sentado', 3, 'A panturrilha sentada destina-se a trabalhar os músculos envolvidos na panturrilha. De forma mais concentrada, é trabalhado neste exercício o músculo sóleo.');
        $this->create('Panturrilha em Pé', 3, 'A panturrilha em pé é destinada a trabalhar os músculos presentes na área da panturrilha. São eles: gastrocnêmio (cabeça lateral), sóleos e gastrocnêmio (cabeça medial).');
        $this->create('Panturrilha (Leg)', 3, 'A panturrilha, quando trabalhada no leg, destina-se a atingir os seguintes músculos presentes na panturrilha: gastrocnêmio e sóleo.', 'WI4b6oCqRZY');
        $this->create('Supra na Prancha', 4, 'A supra na prancha é um exercício direcionado para os músculos do abdômen, mais especificamente: oblíquo externo, tensor da fáscia lata e reto da coxa.', 'yogbYCdmM-o');
        $this->create('Infra na Prancha', 4, 'A infra na prancha é um exercício direcionado para os músculos do abdômen, trabalhando principalmente o tensor da fáscia lata, o reto abdominal, o reto da coxa e o oblíquo externo.', 'tRjeMgYFCzg');
        $this->create('Supra no Solo', 4, 'A supra no solo é um exercício voltado para os músculos do abdômen, como os oblíquos, podendo atingir também os flexores de quadril. Porém, sua ação é exercida de forma mais concentrada no reto abdominal.', 'ZDTXR6BbUlE');
        $this->create('Infra no Solo', 4, 'A infra no solo é um exercício direcionado para os músculos do abdômen, trabalhando principalmente o tensor da fáscia lata, o reto abdominal, o reto da coxa e o oblíquo externo.');
        $this->create('Oblíquos no Solo', 4, 'O obliquo no solo trabalha os músculos envolvidos no abdômen, mais especificamente os oblíquos em sua fase de flexão, e menos intensamente, o reto abdominal.','FI9wc73ooUY');
        $this->create('Máquina de Abdomem', 4, 'A máquina de abdômen trabalha os músculos do abdômen, mais especificamente: oblíquo externo, tensor da fáscia lata e reto da coxa. Esse exercício pode ser regulado com pesos, aumentando a sua dificuldade ou diminuindo.');
        $this->create('Extensão de Tronco', 5, 'A extensão do tronco é um exercício destinado a lombar, que consiste em uma área da costa. Por sua vez, este exercício trabalha os seguintes músculos: ilicistal do lombo (parte lombar), quadrado do lombo, glúteo máximo, semitendíneo, semimembranáceo, quadríceps femoral (vasto lateral), bíceps femoral (cabeça longa), espinal do tórax e longuíssimo do tórax.');
        $this->create('Levantamento Terra', 5, 'O levantamento terra é um exercício destinado a lombar, que consiste em uma área da costa. Por sua vez, este exercício atinge os seguintes músculos: eretores da espinha (sob a aponeurose), glúteo máximo, bíceps femoral (cabeça longa), semitendíneo, bíceps femoral (cabeça curta) e semimembranáceo.', 'GIHN1iNWOlE');
        $this->create('Banco Romano', 5, '  O banco romano é aparelho que busca tramalhar a lombar, que consiste em uma área da costa. Por sua vez, este exercício trabalha os seguintes músculos: ilicistal do lombo (parte lombar), quadrado do lombo, glúteo máximo, semitendíneo, semimembranáceo, quadríceps femoral (vasto lateral), bíceps femoral (cabeça longa), espinal do tórax e longuíssimo do tórax.');
        $this->create('Puxador Frente', 6, 'O puxador frente é um exercício voltado para o desenvolvimento das costas, sobretudo as fibras superiores e centrais do latíssimo do dorso. Além disso, são trabalhados também o trapézio (parte transversa e ascendente), o romboide, o bíceps braquial, e, com menor intensidade, o peitoral.', 'hy5lRRfjGw4');
        $this->create('Puxador Costas', 6, 'O puxador costas é um exercício destinado para as costas, trabalhando os latíssimos do dorso (principalmente as fibras externas e inferiores) e os redondos maiores. São também trabalhados os flexores de cotovelos (bíceps braquial, braquial e braquiorradial), assim como os romboides e a parte descendente dos trapézios.', '-uB51sAbS6c');
        $this->create('Remada Articulada', 6, 'A remada articulada é um exercício destinado para as costas, localizando o esforço sobre o latíssimo do dorso, o redondo maior, a parte espinal do deltoide, o bíceps braquial, o braquial e o braquiorradial.');
        $this->create('Barra', 6, 'A barra é um exercício destinado para as costas, trabalhando também o bíceps do braço, o braquial, o braquiorradial e o peitoral maior.', 'tFXj7iJjMk');
        $this->create('Remada Cavalinho', 6, 'A remada cavalinho trabalha os músculos envolvidos na costa, sobretudo o latíssimo do dorso, o redondo maior, a parte espinal do deltoide, os flexores de cotovelos, assim como o trapézio e o romboide.', 'X-jT33Kg77M');
        $this->create('Remada Sentado', 6, 'A remada sentada é um exercício destinado para as costas, localizando o esforço sobre o latíssimo do dorso, o redondo maior, a parte espinal do deltoide, o bíceps braquial, o braquial e o braquiorradial.', 'wPfvrQ-HjP8');
        $this->create('Voador Invertido', 6, 'O voador invertido aciona os músculos das costas, sendo eles: o deltoide posterior, infraespinhal, latíssimo do dorso, redondo maior, tríceps cabeça longa, romboides maior e menor, trapézio e as fibras mediais.', 'MUXqecgHxtE');
        $this->create('Pullover', 6, 'O pullover é um exercício utilizado para atingir tanto os músculos envolvidos no peitoral quanto os músculos envolvidos nas costas. De forma geral os principais músculos ativados são: peitoral maior, latíssimo do dorso, serrátil anterior, tríceps braquial (porção longa) e romboide.');
        $this->create('Pulldown', 6, 'O pulldown é um exercício utilizado para atingir os músculos da costa, mais especificamente o latíssimo do dorso e o deltoide (porção anterior). Os músculos lombares e o tríceps braquial também podem ser trabalhados dependendo da execução do exercício.', 'xG63LanCnXc');
        $this->create('Supino Horizontal Livre', 7, 'O supino horizontal livre é um exercício voltado para os peitorais, trabalhando os seguintes músculos: peitoral maior e menor, o feixe anterior do deltoide, os serráteis anteriores e o coracobraquial.');
        $this->create('Supino Inclinado', 7, 'O supino inclinado é um exercício voltado para os peitorais, trabalhando os seguintes músculos: peitoral maior, sobretudo seu feixe clavicular, o feixe anterior do deltoide, o tríceps, o serrátil anteior e o peitoral menor.', 'q23AGfHdDgI');
        $this->create('Supino Declinado', 7, 'O supino declinado é um exercício voltado para os peitorais, trabalhando os seguintes músculos: peitoral maior, sobretudo seus feixes inferiores, os tríceps e o feixe anterior do deltoide.', '7xfN9bPhE_M');
        $this->create('Voador', 7, 'O voador é um aparelho destinado a trabalhar os músculos dos peitorais, sendo estes músculos: peitorais maiores, coracobraquial e a cabeça curta dos bíceps.', 'TW_mnkkMAjs');
        $this->create('Crucifixo', 7, 'O crucifixo é um exercício voltado para os peitorais, principalmente sobre seus feixes claviculares, garantindo uma boa expansão torácica.', 'nJ5rN_y9Q5E');
        $this->create('Cross Over', 7, 'O cross over é um exercício voltado para os peitorais, mais especificamente o peitoral maior inferior e superior. Além disso, ele também trabalha o deltoide anterior, tríceps e latíssimo do dorso.', 'iXlV95rHIfk');
        $this->create('Supino Vertical', 7, 'O supino vertical é um exercício voltado para os peitorais, trabalhando os seguintes músculos: peitoral maior e menor, o feixe anterior do deltoide, os serráteis anteriores e o coracobraquial.');
        $this->create('Paralelas', 7, 'As paralelas são um exercício voltado para o peitoral, mas que atinge diversos músculos, sendo eles: deltoide (feixe anterior), vasto lateral do tríceps, porção longa do tríceps, vasto medial do tríceps, ancôneo e peitoral maior.');
        $this->create('Desenvolvimento Barra', 8, 'O desenvolvimento barra é um exercício que trabalha dos ombros, recrutando a região anterior do deltoide, além da porção lateral e posterior, tríceps, trapézio e romboides.', 'cm5uSm7NE9I');
        $this->create('Desenvolvimento Máquina', 8, 'O desenvolvimento máquina é um exercício que trabalha os ombros, recrutando o deltoide (feixe anterior), assim como o feixe clavicular do peitoral maior, o trapézio, o serrátil anterior e o tríceps braquial.');
        $this->create('Desenvolvimento Halter', 8, 'O desenvolvimento halter é um exercício que trabalha os ombros, recrutando o deltoide (feixe anterior), assim como o feixe clavicular do peitoral maior, o trapézio, o serrátil anterior e o tríceps braquial.', 'VqFT379cVek');
        $this->create('Abdução de Ombros', 8, 'A abdução dos ombros é um exercício que trabalha os ombros, recrutando os deltoides (porção média). Além disso, ele também trabalha o trapézio e o feixe anterior do deltoide.', '2y2YvodL1og');
        $this->create('Flexão de Ombros', 8, 'A flexão de ombros é um exercício que trabalha os ombros, principalmente o feixe anterior do deltoide, o feixe clavicular do peitoral maior, e, numa extensão menor, o resto do deltoide.', '2GtilJs0i1A');
        $this->create('Remada Alta', 8, 'A remada alta é um exercício que trabalha os ombros e alguns músculos das costas, sendo eles os deltoides, os trapézios, os bíceps, assim como alguns músculos do antebraço.');
        $this->create('Rosca Polia', 9, 'A rosca polia é voltada para os bíceps, trabalhando principalmente os bíceps do braço e o braquial de forma bem concentrada.', 'yXNWgG_o6nw');
        $this->create('Rosca Scott', 9, 'A rosca scott é voltada para os bíceps, trabalhando principalmente os bíceps do braço e o braquial de forma bem concentrada.', 'MgAKqEqcU4');
        $this->create('Rosca Alternada', 9, 'A rosca alternada é voltada para os bíceps, trabalhando principalmente o braquial, braquiorradial e o deltoide (feixe anterior).', '6NBuNWFIV1Q');
        $this->create('Rosca Simultânea', 9, 'A rosca simultânea é voltada para o bíceps, trabalhando diversos músculos que o envolvem, sendo eles: braquial, braquiorradial, extensor radial curto e longo do carpo, extensor de dedos, extensor de dedo mínimo, extensor ulnar do carpo e flexor ulnar do carpo.','1h2ejAmW1oY');
        $this->create('Rosca Concentrada', 9, 'A rosca concentrada é voltada para os bíceps, trabalhando principalmente os bíceps do braço e o braquial de forma bem concentrada.', 'VWyqSEC4AZo');
        $this->create('Rosca com Barra', 9, 'A rosca com a barra é voltada para o bíceps, trabalhando diversos músculos que o envolvem, sendo eles: braquial, braquiorradial, extensor radial curto e longo do carpo, extensor de dedos, extensor de dedo mínimo, extensor ulnar do carpo e flexor ulnar do carpo.', 'jdLuj6chXnk');
        $this->create('Rosca Martelo', 9, 'A rosca scott é voltada para os bíceps, trabalhando principalmente os bíceps do braço, braquiorradial e o braquial de forma bem concentrada.', 'Kp4VGmOSOUc');
        $this->create('Tríceps Pulley', 10, 'O tríceps pulley é um exercício voltado para os músculos envolvidos no tríceps, que são: vasto lateral do tríceps, porção longa do tríceps e vasto medial do tríceps.', '7O7qv5Rc0Bc');
        $this->create('Tríceps Francês', 10, 'O tríceps francês permite trabalhar o tríceps, solicitando, de modo uniforme, as três porções do músculo.', 'AlPkUhpjUOA');
        $this->create('Tríceps Testa', 10, 'A tríceps testa é um exercício voltado para os músculos envolvidos no tríceps, que são: vasto medial do tríceps e porção longa do tríceps.', 'ryYxmbk00V8');
        $this->create('Tríceps Mergulho Paralela', 10, 'As paralelas são um exercício voltado para o peitoral, mas que atinge diversos músculos, sendo eles: deltoide (feixe anterior), vasto lateral do tríceps, porção longa do tríceps, vasto medial do tríceps, ancôneo e peitoral maior.', '2Yt6sRaisEE');
        $this->create('Tríceps Coice', 10, 'O tríceps coice é um exercício voltado para os músculos envolvidos no tríceps, trabalhando os seguintes: vasto lateral do tríceps, porção longa do tríceps e ancôneo.', 'ZA8kPGW_oJ0');
        $this->create('Tríceps Press', 10, 'O tríceps press trabalha os tríceps, os peitorais e também as porções anteriores dos deltoides. ', 'HGhg5iszbms');
        $this->create('Flexão de Punho', 11, 'A flexão de punho é voltada para o antebraço, solicitando o palmar longo, palmar curto, o flexor ulnar do carpo, assim como os flexores profundos e superficiais dos dedos.', '_JBI5dZdUKo');
        $this->create('Extensão de Punho', 11, 'A extensão de punha é voltada para o antebraço, solicitando o extensor radial longo do carpo e o extensor radial curto do carpo, o extensor dos dedos, o extensor do dedo mínimo e o extensor ulnar do carpo.', 'jpN3kl8VMKg');
        $this->create('Encolhimento de Ombro', 12, 'O encolhimento de ombro é um exercício que desenvolve a parte do trapézio descendente, principalmente seu feixe occipito clavicular, assim como levantador da escápula.', '3O50e-ZzfLc');
        $this->create('Remada Alta', 12, 'A remada alta é um exercício que trabalha os ombros e alguns músculos das costas, sendo eles os deltoides, os trapézios, os bíceps, assim como alguns músculos do antebraço.', 'CHi3JniSNzo');
    }

    private function create($titulo, $tipoExercicioId, $descricao = null, $demonstracao = null, $imagem = null)
    {
    	return Exercicio::create([
    		'titulo' => $titulo,
    		'tipo_exercicio_id' => $tipoExercicioId,
            'descricao' => $descricao,
            'demonstracao' => $demonstracao,
            'imagem' => $imagem,
    	]);
    }
}
