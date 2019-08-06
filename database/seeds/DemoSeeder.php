<?php

use App\Question;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Question::create([
        'statement'=>'Quando tempo devo aguardar para higienizar os dentes após as refeições?',
        'option1'=>'imediatamente após',
        'option2'=>'30 minutos',
        'option3'=>'1 hora',
        'option4'=>'2 horas',
        'quiz_id'=>29,
        'answer'=>2,
        'filename'=>'http://ortodontech.ehuaranga.com:8000/uploads/pregunta01.jpeg',
      ]);

      Question::create([
        'statement'=>'Quais alimentos devemos evitar quando usamos aparelhos ortodônticos fixos?',
        'option1'=>'balas e pirulitos',
        'option2'=>'amendoim e castanhas',
        'option3'=>'milho na espiga',
        'option4'=>'todas as anteriores',
        'quiz_id'=>29,
        'answer'=>4,
        'filename'=>'http://ortodontech.ehuaranga.com:8000/uploads/pregunta02.jpeg',
      ]);

      Question::create([
        'statement'=>' Uma boa higienização bucal inclui:',
        'option1'=>'escova, creme dental e enxaguante bucal',
        'option2'=>'escova de cabeça pequena, creme dental e fio dental',
        'option3'=>'enxaguante bucal e escova apropriada',
        'option4'=>'escova, creme dental e palito de dente',
        'quiz_id'=>29,
        'answer'=>2,
        'filename'=>'http://ortodontech.ehuaranga.com:8000/uploads/pregunta03.jpeg',
      ]);

      Question::create([
        'statement'=>'Quanto tempo, em média, deve durar a escovação?',
        'option1'=>'20 segundos',
        'option2'=>'40 segundos',
        'option3'=>'1 minutos',
        'option4'=>'2 minutos',
        'quiz_id'=>29,
        'answer'=>4,
        'filename'=>'http://ortodontech.ehuaranga.com:8000/uploads/pregunta04.jpeg',
      ]);

      Question::create([
        'statement'=>'O que fazer se algum componente de seu aparelho se soltar?',
        'option1'=>'puxar o fio',
        'option2'=>'pedir ajuda para alguém cortar com um alicate',
        'option3'=>'agendar uma consulta o mais rápido possível com o seu dentista (x) ',
        'option4'=>'tentar consertar com cola',
        'quiz_id'=>29,
        'answer'=>3,
        'filename'=>'http://ortodontech.ehuaranga.com:8000/uploads/pregunta05.jpeg',
      ]);

      Question::create([
        'statement'=>'Com qual frequência devemos visitar o dentista quando estamos em tratamento ortodôntico?',
        'option1'=>'todo mês',
        'option2'=>'a cada seis meses ',
        'option3'=>'quando preciso trocar a borrachonas ',
        'option4'=>' nenhuma das anteriores ',
        'quiz_id'=>29,
        'answer'=>1,
        'filename'=>'http://ortodontech.ehuaranga.com:8000/uploads/pregunta06.jpeg',
      ]);

      Question::create([
        'statement'=>'Minha gengiva está inchada e cobrindo o aparelho, o que pode ser?',
        'option1'=>'comi algo que machucou a gengiva',
        'option2'=>'alergia do aparelho',
        'option3'=>'gengivite por má higienização',
        'option4'=>'nenhuma das anteriores',
        'quiz_id'=>29,
        'answer'=>2,
        'filename'=>'http://ortodontech.ehuaranga.com:8000/uploads/pregunta07.jpeg',
      ]);


    }
}
