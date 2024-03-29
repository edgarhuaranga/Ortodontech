<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Question;
use App\TopicIcon;
use App\User;
use App\Post;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        App\Category::create(['name'=>"Arte"]);
        App\Category::create(['name'=>"Arte brasileira"]);
        App\Category::create(['name'=>"Artes marciais"]);
        App\Category::create(['name'=>"Automobilismo"]);
        App\Category::create(['name'=>"Basquete"]);
        App\Category::create(['name'=>"Beisebol"]);
        App\Category::create(['name'=>"Celebridades brasileiras"]);
        App\Category::create(['name'=>"Ciências"]);
        App\Category::create(['name'=>"Comida e bebida"]);
        App\Category::create(['name'=>"Comidas típicas"]);
        App\Category::create(['name'=>"Copa do Mundo"]);
        App\Category::create(['name'=>"Desafio musical"]);
        App\Category::create(['name'=>"Ditados e provérbios"]);
        App\Category::create(['name'=>"Educação"]);
        App\Category::create(['name'=>"Esportes"]);
        App\Category::create(['name'=>"Estilo de vida"]);
        App\Category::create(['name'=>"Filmes"]);
        App\Category::create(['name'=>"Folclore brasileiro"]);
        App\Category::create(['name'=>"Formações geológicas da Américas."]);
        App\Category::create(['name'=>"Futebol"]);
        App\Category::create(['name'=>"Futebol americano"]);
        App\Category::create(['name'=>"Futebol brasileiro"]);
        App\Category::create(['name'=>"Geografia de Portugal"]);
        App\Category::create(['name'=>"Geografia do Brasil"]);
        App\Category::create(['name'=>"História"]);
        App\Category::create(['name'=>"História do Brasil"]);
        App\Category::create(['name'=>"Imprensa Cor-de-Rosa"]);
        App\Category::create(['name'=>"Jogos"]);
        App\Category::create(['name'=>"Lembra daquela propaganda?"]);
        App\Category::create(['name'=>"Literatura"]);
        App\Category::create(['name'=>"Literatura brasileira"]);
        App\Category::create(['name'=>"Logos"]);
        App\Category::create(['name'=>"Mundo"]);
        App\Category::create(['name'=>"Música"]);
        App\Category::create(['name'=>"Música brasileira"]);
        App\Category::create(['name'=>"Natureza"]);
        App\Category::create(['name'=>"Negócios"]);
        App\Category::create(['name'=>"Olimpíadas"]);
        App\Category::create(['name'=>"Paulo Coelho"]);
        App\Category::create(['name'=>"Qual é a música?"]);
        App\Category::create(['name'=>"Qual é o brinquedo?"]);
        App\Category::create(['name'=>"Qual é o número?"]);
        App\Category::create(['name'=>"Reality shows: Brasil"]);
        App\Category::create(['name'=>"TV"]);
        App\Category::create(['name'=>"World Religions"]);

        App\Quiz::create(['category_id'=>1,'topic'=>'Movimentos Artísticos', 'image_url'=>'name-the-art-movement']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Arte do Século XX', 'image_url'=>'en-20th-century-art']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Arquitetura', 'image_url'=>'architecture']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Design geral', 'image_url'=>'en-design']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Qual é o artista', 'image_url'=>'name-artist']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Design de moda', 'image_url'=>'fashion']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Artes', 'image_url'=>'arts-general']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Pinturas', 'image_url'=>'arts-picture-quiz']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Musicais', 'image_url'=>'musicals-arts']);
        App\Quiz::create(['category_id'=>1,'topic'=>'Romantismo', 'image_url'=>'en-romanticism']);
        App\Quiz::create(['category_id'=>2,'topic'=>'Arte brasileira', 'image_url'=>'pt-brazilian-arts']);
        App\Quiz::create(['category_id'=>3,'topic'=>'Boxe', 'image_url'=>'boxing']);
        App\Quiz::create(['category_id'=>4,'topic'=>'Fórmula 1', 'image_url'=>'formula']);
        App\Quiz::create(['category_id'=>5,'topic'=>'Chicago Bulls', 'image_url'=>'chigaco-bulls']);
        App\Quiz::create(['category_id'=>5,'topic'=>'Básicos da NBA', 'image_url'=>'nba-basics']);
        App\Quiz::create(['category_id'=>5,'topic'=>'Basquete: Geral', 'image_url'=>'basketball']);
        App\Quiz::create(['category_id'=>5,'topic'=>'Jogadores da NBA', 'image_url'=>'name-nba-player']);
        App\Quiz::create(['category_id'=>5,'topic'=>'NBA', 'image_url'=>'nba']);
        App\Quiz::create(['category_id'=>6,'topic'=>'Beisebol', 'image_url'=>'baseball']);
        App\Quiz::create(['category_id'=>7,'topic'=>'Celebridades brasileiras', 'image_url'=>'pt-brazilian-celebrities']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Espaço Sideral', 'image_url'=>'space']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Fobias', 'image_url'=>'phobias']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Geology', 'image_url'=>'earth-sciences']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Química', 'image_url'=>'chemistry']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Scientists & Inventors', 'image_url'=>'scientists']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Tabela Periódica', 'image_url'=>'the-periodic-table']);
        App\Quiz::create(['category_id'=>8,'topic'=>'O Corpo Humano', 'image_url'=>'health-and-human-bio']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Mudanças climáticas', 'image_url'=>'en-climate-change']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Medicina', 'image_url'=>'medical']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Psicologia', 'image_url'=>'psychology']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Filosofia', 'image_url'=>'philosophy']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Exploração espacial', 'image_url'=>'space-exploration']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Biologia', 'image_url'=>'biology']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Qual é o elemento?', 'image_url'=>'name-the-element']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Medicina fácil', 'image_url'=>'es-jugando-a-galeno']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Physik', 'image_url'=>'de-physics']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Energy', 'image_url'=>'energy']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Ciência Geral', 'image_url'=>'science-general']);
        App\Quiz::create(['category_id'=>8,'topic'=>'Historia de la medicina', 'image_url'=>'es-historia-medicina']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Rótulos de Cerveja', 'image_url'=>'beer-logos']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Chocolate', 'image_url'=>'pt-chocolate']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Qual é o alimento?', 'image_url'=>'en-name-the-food']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Comida', 'image_url'=>'food']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Cerveja', 'image_url'=>'beer']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Gastronomia portuguesa', 'image_url'=>'pt-culinaria-portuguesa']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Qual é o prato?', 'image_url'=>'pt-br-name-dish']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Vinho', 'image_url'=>'wine']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Bebidas', 'image_url'=>'drinks']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Ervas e especiarias', 'image_url'=>'herbs-and-spices']);
        App\Quiz::create(['category_id'=>9,'topic'=>'Frutas e Vegetais', 'image_url'=>'fruits-and-veggies']);
        App\Quiz::create(['category_id'=>10,'topic'=>'Comidas típicas', 'image_url'=>'pt-culinaria-brasileira']);
        App\Quiz::create(['category_id'=>11,'topic'=>'Seleção Brasileira', 'image_url'=>'wc-brazil']);
        App\Quiz::create(['category_id'=>11,'topic'=>'Jogadores da Copa', 'image_url'=>'wc-name-the-player']);
        App\Quiz::create(['category_id'=>12,'topic'=>'Desafio musical', 'image_url'=>'pt-finishthelyrics']);
        App\Quiz::create(['category_id'=>13,'topic'=>'Ditados e provérbios', 'image_url'=>'pt-brazilian-sayings']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Números em inglês', 'image_url'=>'es-numeros-ingles']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Letras perdidas', 'image_url'=>'pt-missing-letters']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Francês fácil', 'image_url'=>'french']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Cata palavras', 'image_url'=>'pt-word-scramble']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Frases', 'image_url'=>'pt-quotes']);
        App\Quiz::create(['category_id'=>14,'topic'=>'False friends', 'image_url'=>'pt-en-false-friends']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Matemática fácil', 'image_url'=>'math-easy']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Significados', 'image_url'=>'pt-word-meanings']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Ciência básica', 'image_url'=>'school-science']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Espanhol fácil', 'image_url'=>'spanish']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Sinônimos e antônimos', 'image_url'=>'pt-synonyms-antonyms']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Palavras curiosas', 'image_url'=>'pt-curious-words']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Guia de Viagem', 'image_url'=>'pt-phrase-book']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Ortografia', 'image_url'=>'pt-spelling']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Vocabulário espanhol', 'image_url'=>'spanish-vocabulary']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Algarismos romanos', 'image_url'=>'de-roemische-zahlen']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Inglês fácil', 'image_url'=>'es-ingles']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Inglês: ortografia', 'image_url'=>'pt-english-spelling']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Expressões portuguesas', 'image_url'=>'pt-portuguese-sayings']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Subtração básica', 'image_url'=>'en-subtraction']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Nossa Língua', 'image_url'=>'pt-portuguese-language']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Matemática difícil', 'image_url'=>'math-hard']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Italiano', 'image_url'=>'la-italiano']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Matemática geral', 'image_url'=>'math-general']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Inglês: vocabulário', 'image_url'=>'es-ingles-vocabulario']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Adição Básica', 'image_url'=>'en-addition']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Geometria', 'image_url'=>'shape-and-space']);
        App\Quiz::create(['category_id'=>14,'topic'=>'Qual é a língua?', 'image_url'=>'fr-trouvez-la-langue']);
        App\Quiz::create(['category_id'=>15,'topic'=>'Esportes', 'image_url'=>'sports-general']);
        App\Quiz::create(['category_id'=>15,'topic'=>'Golfe', 'image_url'=>'golf']);
        App\Quiz::create(['category_id'=>15,'topic'=>'Tênis', 'image_url'=>'tennis']);
        App\Quiz::create(['category_id'=>15,'topic'=>'Qual é o esporte?', 'image_url'=>'name-the-sport']);
        App\Quiz::create(['category_id'=>15,'topic'=>'Xadrez', 'image_url'=>'chess']);
        App\Quiz::create(['category_id'=>15,'topic'=>'O esporte no Brasil', 'image_url'=>'pt-brazilian-sports']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Internetês', 'image_url'=>'pt-internet-speak']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Variedades Brasil', 'image_url'=>'pt-br-general-knowledge']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Lendas e tradições portuguesas', 'image_url'=>'pt-portuguese-folklore']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Festas', 'image_url'=>'en-celebrations']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Quantos São', 'image_url'=>'en-how-many']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Mães', 'image_url'=>'pt-mothers']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Carnaval', 'image_url'=>'pt-carnival']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Quem mente?', 'image_url'=>'pt-br-whos-lying']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Quem é?', 'image_url'=>'pt-who-is-it']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Anos 90', 'image_url'=>'pt-br-the-nineties']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Compras', 'image_url'=>'pt-br-shopping']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Anos 80', 'image_url'=>'pt-the-eighties']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Expressões', 'image_url'=>'pt-brazilian-idioms']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Lazer em Portugal', 'image_url'=>'pt-portuguese-leisure']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Nomes', 'image_url'=>'pt-names']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Famosos', 'image_url'=>'pt-name-the-brazilian-celebrity']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Amor', 'image_url'=>'love']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Variedades Portugal', 'image_url'=>'pt-pt-general-knowledge']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Donald Trump', 'image_url'=>'en-donald-trump']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Casais', 'image_url'=>'pt-famous-couples']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Qual é o intruso?', 'image_url'=>'pt-odd-one']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Melhor do Quiz Up', 'image_url'=>'en-best-of-quizup']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Carros', 'image_url'=>'cars']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Celebridades', 'image_url'=>'name-celebrity']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Cores', 'image_url'=>'colors']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Superstições', 'image_url'=>'pt-superstitions']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Duplas Famosas', 'image_url'=>'famous-duos']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Misturas', 'image_url'=>'pt-mixes']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Qual é o nome?', 'image_url'=>'pt-entertainment-titles']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Anos 00', 'image_url'=>'pt-the-noughties']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Quem sou eu?', 'image_url'=>'pt-br-who-am-i']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Supermodelos', 'image_url'=>'name-the-model']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Variedades', 'image_url'=>'general-knowledge']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Desenhos e quadrinhos', 'image_url'=>'pt-desenhos-quadrinhos']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Natal', 'image_url'=>'pt-christmas']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Um pouco de tudo', 'image_url'=>'pt-bit-of-everything']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Charadas', 'image_url'=>'pt-riddles']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Monstros', 'image_url'=>'en-monsters']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Qual é o automóvel?', 'image_url'=>'name-car']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Tatuagens', 'image_url'=>'en-celebrity-tattoos']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Qual é o objeto?', 'image_url'=>'pt-name-the-object']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Expressões portuguesas', 'image_url'=>'pt-portuguese-idioms']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Astrologia', 'image_url'=>'pt-astrologia']);
        App\Quiz::create(['category_id'=>16,'topic'=>'Roupas', 'image_url'=>'clothes']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes Clássicos', 'image_url'=>'classic-movies']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Os Oscars', 'image_url'=>'the-oscars']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Cinema brasileiro', 'image_url'=>'pt-brazilian-cinema']);
        App\Quiz::create(['category_id'=>17,'topic'=>'"Filmes ""Senhor dos Anéis"""', 'image_url'=>'lotr']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Qual é o filme?', 'image_url'=>'name-the-movie']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Saga Crepúsculo', 'image_url'=>'twilight']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes de terror', 'image_url'=>'horror']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes de Drama', 'image_url'=>'drama']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Titanic', 'image_url'=>'en-titanic']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Estrelas de cinema', 'image_url'=>'name-themoviestar']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes do Harry Potter', 'image_url'=>'harry-potter-mov']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes de Ação e Aventura', 'image_url'=>'action-adventure']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes', 'image_url'=>'movies-general']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Princesas Disney', 'image_url'=>'disney-princesses']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Vilões da Disney', 'image_url'=>'disney-villains']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes Românticos', 'image_url'=>'romantic']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Adivinhe o filme', 'image_url'=>'movie-clues']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Guerra nas Estrelas', 'image_url'=>'star-wars']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes da Disney', 'image_url'=>'disney']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Personagens Disney', 'image_url'=>'en-name-the-disney-character']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Cavaleiro das Trevas', 'image_url'=>'the-dark-knight']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes da Pixar', 'image_url'=>'pixar']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes para Crianças e Família', 'image_url'=>'kids-family-movies']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Jogos Vorazes', 'image_url'=>'the-hunger-games-movies']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes de Comédia', 'image_url'=>'comedy-movies']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Frozen', 'image_url'=>'frozen']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes de Ficção Científica', 'image_url'=>'sci-fi-movies']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Meninas Malvadas', 'image_url'=>'mean-girls-movies']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Sucessos do Cinema', 'image_url'=>'movie-blockbusters']);
        App\Quiz::create(['category_id'=>17,'topic'=>'Filmes de Animação', 'image_url'=>'animation-movies']);
        App\Quiz::create(['category_id'=>18,'topic'=>'Folclore brasileiro', 'image_url'=>'pt-brazilian-folklore']);
        App\Quiz::create(['category_id'=>19,'topic'=>'Formações geológicas da Américas.', 'image_url'=>'la-acgeo-la']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Bayern de Munique', 'image_url'=>'bayern-munich']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Quem é o jogador?', 'image_url'=>'name-soccer-player']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Copa Libertadores', 'image_url'=>'la-copa-libertadores']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Templos do futebol', 'image_url'=>'soccer-team-location']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Brasileirão 2015', 'image_url'=>'pt-brazilian-league-2015']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Real Madrid', 'image_url'=>'real-madrid']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Libertadores 2016', 'image_url'=>'pt-libertadores-live']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Liga dos Campeões', 'image_url'=>'champions-league']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Futebol português', 'image_url'=>'pt-portuguese-football']);
        App\Quiz::create(['category_id'=>20,'topic'=>'História das Copas', 'image_url'=>'wc-rookie']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Barcelona', 'image_url'=>'barcelona']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Futebol', 'image_url'=>'soccer-general']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Premier League', 'image_url'=>'premier-league']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Campeonato Europeu UEFA', 'image_url'=>'euro-cup']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Copa América 2015', 'image_url'=>'pt-copa-america-vivo']);
        App\Quiz::create(['category_id'=>20,'topic'=>'Le rendez-vous', 'image_url'=>'en-euro-2016']);
        App\Quiz::create(['category_id'=>21,'topic'=>'Futebol americano', 'image_url'=>'nfl-easy']);
        App\Quiz::create(['category_id'=>22,'topic'=>'Futebol brasileiro', 'image_url'=>'pt-brazilian-football']);
        App\Quiz::create(['category_id'=>23,'topic'=>'Geografia de Portugal', 'image_url'=>'pt-portuguese-geography']);
        App\Quiz::create(['category_id'=>24,'topic'=>'Geografia do Brasil', 'image_url'=>'pt-brazil']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História da Ásia', 'image_url'=>'asian-history']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História de Portugal', 'image_url'=>'pt-portuguese-history']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Roma Antiga', 'image_url'=>'ancient-rome']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Séculos 18 e 19', 'image_url'=>'eighteenth-ninteenth-century']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Linha do tempo', 'image_url'=>'es-linea-de-tiempo']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História dos Séculos 20 e 21', 'image_url'=>'twentieth-twentyfirst-century']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Retrospectiva 2015', 'image_url'=>'pt-2015-brasil']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Retrospectiva 2015', 'image_url'=>'pt-2015-portugal']);
        App\Quiz::create(['category_id'=>25,'topic'=>'1ª Guerra Mundial', 'image_url'=>'world-war-one']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Grécia Antiga', 'image_url'=>'greeks']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Ditadura', 'image_url'=>'pt-brazilian-dictatorship']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Séculos 16 e 17', 'image_url'=>'sixteenth-seventeenth-century']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Mitologia grega', 'image_url'=>'la-mitologia-griega']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História Moderna', 'image_url'=>'modern-history']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História Antiga', 'image_url'=>'ancient-history']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Atualidades', 'image_url'=>'pt-br-world-news']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Líderes Mundiais', 'image_url'=>'world-leaders']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Qual é o ano?', 'image_url'=>'name-the-year']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História', 'image_url'=>'history-general']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Mulheres históricas', 'image_url'=>'historical-women']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Guerra Fria', 'image_url'=>'en-cold-war-history']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História dos Anos 80', 'image_url'=>'en-80s-history']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Mitologia Nórdica', 'image_url'=>'en-norse-mythology']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Eventos históricos', 'image_url'=>'history-pictures']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Política brasileira', 'image_url'=>'pt-brazilian-politics']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Segunda Guerra Mundial', 'image_url'=>'world-war-two']);
        App\Quiz::create(['category_id'=>25,'topic'=>'Personalidades Históricas', 'image_url'=>'historical-figures']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História Europeia', 'image_url'=>'euro-history']);
        App\Quiz::create(['category_id'=>25,'topic'=>'História do Século XIX', 'image_url'=>'en-19th-century']);
        App\Quiz::create(['category_id'=>25,'topic'=>'2016', 'image_url'=>'pt_BR-2016']);
        App\Quiz::create(['category_id'=>26,'topic'=>'História do Brasil', 'image_url'=>'pt-historia-brazil']);
        App\Quiz::create(['category_id'=>27,'topic'=>'Imprensa Cor-de-Rosa', 'image_url'=>'pt-portuguese-celebrities']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Minecraft', 'image_url'=>'minecraft']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Qual é o Pokémon?', 'image_url'=>'name-the-pokemon']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Títulos de videogame', 'image_url'=>'video-game-titles']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Pokémon', 'image_url'=>'pokemon']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Games', 'image_url'=>'games-general']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Jogos Clássicos', 'image_url'=>'classic-games']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Personagens de videogame', 'image_url'=>'en-video-game-heroes-villains']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Videogames', 'image_url'=>'videogames']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Jogos de Playstation', 'image_url'=>'playstation-games']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Jogos de Tabuleiro', 'image_url'=>'tabletop-games']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Itens do Minecraft', 'image_url'=>'name-the-minecraft-item']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Jogos de Nintendo', 'image_url'=>'nintendo-titles']);
        App\Quiz::create(['category_id'=>28,'topic'=>'Final Fantasy', 'image_url'=>'final-fantasy']);
        App\Quiz::create(['category_id'=>29,'topic'=>'Lembra daquela propaganda?', 'image_url'=>'pt-ad-slogans']);
        App\Quiz::create(['category_id'=>30,'topic'=>'A Culpa É das Estrelas', 'image_url'=>'tfios']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Turma da Mônica', 'image_url'=>'pt-monica']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Personagens de Harry Potter', 'image_url'=>'hp-characters']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Crônicas do Gelo e Fogo', 'image_url'=>'song-of-ice-and-fire']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Livros do Harry Potter', 'image_url'=>'harry-potter-lit']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Percy Jackson', 'image_url'=>'percy-jackson-lit']);
        App\Quiz::create(['category_id'=>30,'topic'=>'O Guia do Mochileiro das Galáxias', 'image_url'=>'hitchikers-guide']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Contos de Fada', 'image_url'=>'fairy-tales']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Quem é o autor?', 'image_url'=>'en-name-the-author']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Quadrinhos do Tintim', 'image_url'=>'tintin']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Quadrinhos Marvel', 'image_url'=>'marvel-comics']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Literatura Clássica', 'image_url'=>'classic-novels']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Cinquenta Tons de Cinza', 'image_url'=>'shades-of-grey']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Livros do Crepúsculo', 'image_url'=>'twilight-lit']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Trilogia dos Jogos Vorazes', 'image_url'=>'hunger-games']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Livros de O Senhor dos Anéis', 'image_url'=>'lotr-novels']);
        App\Quiz::create(['category_id'=>30,'topic'=>'Trilogia Divergente', 'image_url'=>'divergent-lit']);
        App\Quiz::create(['category_id'=>31,'topic'=>'Literatura brasileira', 'image_url'=>'pt-brazilian-literature']);
        App\Quiz::create(['category_id'=>32,'topic'=>'Logos', 'image_url'=>'pt-logos']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Países da Ásia', 'image_url'=>'asian-countries']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Geografia', 'image_url'=>'geography-general']);
        App\Quiz::create(['category_id'=>33,'topic'=>'França', 'image_url'=>'france']);
        App\Quiz::create(['category_id'=>33,'topic'=>'América do Sul', 'image_url'=>'south-america']);
        App\Quiz::create(['category_id'=>33,'topic'=>'São Paulo', 'image_url'=>'pt-saopaulo']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Qual é a bandeira', 'image_url'=>'name-the-flag']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Bandeiras', 'image_url'=>'national-flags']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Monumentos', 'image_url'=>'monuments']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Cidades do Brasil', 'image_url'=>'pt-brazilian-cities']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Países do Mundo', 'image_url'=>'countries-ofthe-world']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Qual é a cidade?', 'image_url'=>'which-city']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Capitais do Mundo', 'image_url'=>'world-capitals']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Lugares Famosos', 'image_url'=>'landmarks']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Lisboa', 'image_url'=>'pt-lisbon']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Europa', 'image_url'=>'europe-geography']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Estados Unidos', 'image_url'=>'us-geography']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Ásia', 'image_url'=>'asia-geography']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Onde estou?', 'image_url'=>'pt-where-am-i']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Gentílicos', 'image_url'=>'pt-gentilicos']);
        App\Quiz::create(['category_id'=>33,'topic'=>'A Terra Vista de Cima', 'image_url'=>'earth-from-above']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Austrália', 'image_url'=>'australia-geography']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Aeroportos', 'image_url'=>'airports']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Cidades do Mundo', 'image_url'=>'cities-of-the-world']);
        App\Quiz::create(['category_id'=>33,'topic'=>'América do Norte', 'image_url'=>'geography-north-america']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Estados dos EUA', 'image_url'=>'us-states']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Giro pelo mundo', 'image_url'=>'pt-around-the-world']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Países das Américas', 'image_url'=>'countries-of-the-americas']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Línguas do mundo', 'image_url'=>'es-idiomas-del-mundo']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Islândia', 'image_url'=>'iceland']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Países europeus', 'image_url'=>'european-countries']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Ilhas', 'image_url'=>'islands']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Qual é o lugar?', 'image_url'=>'name-the-landmark']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Qual é o país?', 'image_url'=>'name-the-country']);
        App\Quiz::create(['category_id'=>33,'topic'=>'Numismática', 'image_url'=>'es-numismatica']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Quem é o popstar?', 'image_url'=>'name-pop-star']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Música portuguesa', 'image_url'=>'pt-portuguese-music']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Música Country', 'image_url'=>'country-music']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Geografia na Música', 'image_url'=>'music-geography']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Letras traduzidas', 'image_url'=>'pt-lyrics-in-translation']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Boy Bands', 'image_url'=>'boybands']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Reggae', 'image_url'=>'reggae']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Música dos anos 2000', 'image_url'=>'two-thousands-music']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Quem é o cantor?', 'image_url'=>'en-name-the-singer']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Música dos Anos 90', 'image_url'=>'nineties-music']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Hits dos anos 90', 'image_url'=>'en-pop-hits-of-the-90s']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Justin Timberlake', 'image_url'=>'justin-timberlake']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Música Jazz', 'image_url'=>'jazz-music']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Ópera', 'image_url'=>'opera']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Rock Clássico', 'image_url'=>'classic-rock']);
        App\Quiz::create(['category_id'=>34,'topic'=>'5 Seconds of Summer', 'image_url'=>'five-seconds']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Quem canta?', 'image_url'=>'pt-who-sings-it']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Hip Hop e Rap', 'image_url'=>'hip-hop']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Música clássica', 'image_url'=>'classical-music']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Capas de discos pop', 'image_url'=>'pop-album-covers']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Instrumentos', 'image_url'=>'instruments']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Capas de Disco', 'image_url'=>'name-the-album-cover']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Letras do One Direction', 'image_url'=>'en-one-direction-lyrics']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Música', 'image_url'=>'music-general']);
        App\Quiz::create(['category_id'=>34,'topic'=>'One Direction', 'image_url'=>'one-direction']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Alternativa e Indie', 'image_url'=>'alternative']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Justin Bieber', 'image_url'=>'justin-bieber']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Música Pop', 'image_url'=>'pop-music']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Ariana Grande', 'image_url'=>'ariana-grande']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Rock', 'image_url'=>'rock']);
        App\Quiz::create(['category_id'=>34,'topic'=>'Os Beatles', 'image_url'=>'the-beatles']);
        App\Quiz::create(['category_id'=>35,'topic'=>'Música brasileira', 'image_url'=>'pt-brazilian-music']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Qual é o maior animal?', 'image_url'=>'en-biggest-animal']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Botânica', 'image_url'=>'botany']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Vida aquática', 'image_url'=>'fish']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Dinossauros', 'image_url'=>'dinosaurs']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Animais', 'image_url'=>'animals']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Pássaros', 'image_url'=>'birds']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Cães', 'image_url'=>'dogs']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Mamíferos', 'image_url'=>'mammals']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Insetos', 'image_url'=>'insects']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Gatos', 'image_url'=>'cats']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Qual é o animal', 'image_url'=>'name-theanimal']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Qual é o filhote?', 'image_url'=>'en-name-the-baby-animal']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Répteis', 'image_url'=>'reptiles']);
        App\Quiz::create(['category_id'=>36,'topic'=>'Animais Marinhos', 'image_url'=>'aquatic-animals']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Logos de apps', 'image_url'=>'app-logos']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Marcas em Portugal', 'image_url'=>'pt-portuguese-brands']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Tecnologia', 'image_url'=>'it-web-tech']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Empreendedores', 'image_url'=>'entrepreneurs']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Qual é o gadget?', 'image_url'=>'name-the-gadget']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Qual é a profissão?', 'image_url'=>'en-name-the-job']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Logos de Cias. Aéreas', 'image_url'=>'en-airline-logos']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Cultura da internet', 'image_url'=>'web-culture']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Economia', 'image_url'=>'economics']);
        App\Quiz::create(['category_id'=>37,'topic'=>'Dinheiro', 'image_url'=>'money']);
        App\Quiz::create(['category_id'=>38,'topic'=>'Rio 2016', 'image_url'=>'en-rio-2016']);
        App\Quiz::create(['category_id'=>38,'topic'=>'Jogos Olímpicos', 'image_url'=>'summer-olympics']);
        App\Quiz::create(['category_id'=>39,'topic'=>'Paulo Coelho', 'image_url'=>'pt-paul-coelho']);
        App\Quiz::create(['category_id'=>40,'topic'=>'Qual é a música?', 'image_url'=>'pt-brazilian-song-titles']);
        App\Quiz::create(['category_id'=>41,'topic'=>'Qual é o brinquedo?', 'image_url'=>'pt-name-the-toy']);
        App\Quiz::create(['category_id'=>42,'topic'=>'Qual é o número?', 'image_url'=>'pt-name-number']);
        App\Quiz::create(['category_id'=>43,'topic'=>'Reality shows: Brasil', 'image_url'=>'pt-reality-shows']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Game of Thrones', 'image_url'=>'game-of-thrones']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Reality Shows', 'image_url'=>'reality-shows']);
        App\Quiz::create(['category_id'=>44,'topic'=>'The Walking Dead', 'image_url'=>'walking-dead']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Dê o nome do Personagem de TV', 'image_url'=>'name-tv-character']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Bob Esponja', 'image_url'=>'spongebob']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Malhação', 'image_url'=>'pt-malhacao']);
        App\Quiz::create(['category_id'=>44,'topic'=>'TV', 'image_url'=>'tv-general']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Vampire Diaries', 'image_url'=>'the-vampire-diaries']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Sobrenatural', 'image_url'=>'supernatural']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Qual é a Série?', 'image_url'=>'name-tv-show']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Sex and the City', 'image_url'=>'sex-and-the-city']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Dexter', 'image_url'=>'dexter']);
        App\Quiz::create(['category_id'=>44,'topic'=>'True Blood', 'image_url'=>'true-blood']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Doctor Who Moderno', 'image_url'=>'new-dr-who']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Chaves', 'image_url'=>'la-el-chavo']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Novelas brasileiras', 'image_url'=>'pt-brazilian-soaps']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Breaking Bad', 'image_url'=>'breaking-bad']);
        App\Quiz::create(['category_id'=>44,'topic'=>'TV brasileira', 'image_url'=>'pt-brazilian-tv']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Personagens GoT', 'image_url'=>'en-game-of-thrones-characters']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Glee', 'image_url'=>'glee']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Programas de Drama de TV', 'image_url'=>'tv-drama']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Friends', 'image_url'=>'friends']);
        App\Quiz::create(['category_id'=>44,'topic'=>'One Piece', 'image_url'=>'one-piece']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Programas Policiais de TV', 'image_url'=>'crime-shows']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Dragon Ball', 'image_url'=>'dragon-ball']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Estrelas de TV', 'image_url'=>'tv-stars']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Arquivo X', 'image_url'=>'x-files']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Pretty Little Liars', 'image_url'=>'pretty-lil-liars']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Once Upon a Time', 'image_url'=>'once-upon']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Seriados de Comédia', 'image_url'=>'sitcoms']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Teen Wolf', 'image_url'=>'teen-wolf']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Greys Anatomy', 'image_url'=>'greys-anatomy']);
        App\Quiz::create(['category_id'=>44,'topic'=>'The Big Bang Theory', 'image_url'=>'big-bang-theory']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Seinfeld', 'image_url'=>'seinfeld']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Os Simpsons', 'image_url'=>'the-simpsons']);
        App\Quiz::create(['category_id'=>44,'topic'=>'American Horror Story', 'image_url'=>'american-horror']);
        App\Quiz::create(['category_id'=>44,'topic'=>'How I Met Your Mother', 'image_url'=>'how-i-met-your-mother']);
        App\Quiz::create(['category_id'=>44,'topic'=>'House of Cards', 'image_url'=>'house-cards']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Stranger Things', 'image_url'=>'en-stranger-things']);
        App\Quiz::create(['category_id'=>44,'topic'=>'Family Guy', 'image_url'=>'family-guy']);
        App\Quiz::create(['category_id'=>45,'topic'=>'A Bíblia', 'image_url'=>'the-bible']);

        $faker = Factory::create();
        $quizzes = App\Quiz::all();

        for ($i = 0; $i <= 6000; $i++) {
          Question::create([
            'statement'=>$faker->word,
            'option1'=>$faker->word,
            'option2'=>$faker->word,
            'option3'=>$faker->word,
            'option4'=>$faker->word,
            'quiz_id'=>$faker->numberBetween($min = 1, $max = $quizzes->count()),
            'answer'=>$faker->numberBetween($min = 1, $max = 4),
            'filename'=>$faker->imageUrl(640, 480),
          ]);
        }

        User::create([
            'name'=>'Edgar Huaranga',
            'email'=>'edhu1227@gmail.com',
            'city'=>'Lima',
            'birthday'=>'1992-12-27',
        ]);

        /*for($i=0; $i<35; $i++){
          User::create([
              'name'=>$faker->name,
              'email'=>$faker->email,
              'city'=>$faker->city,
              'birthday'=>$faker->dateTimeThisCentury->format('Y-m-d'),
          ]);
        }*/

        /*for($i=0; $i<30000; $i++){
          $user = User::find($faker->numberBetween(1, 36));
          $question = Question::find($faker->numberBetween(1, 6000));
          $answer =  $faker->numberBetween($min = 1, $max = 4);
          $state = 2;
          $points = 0;
          if($question->answer == $answer){
            $state = 1;
            $points = 3;
          }

          App\Answer::create([
            'user_id'=>$user->id,
            'question_id'=>$question->id,
            'user_answer'=>$answer,
            'answer_state'=>$state,
            'points_received'=>$points,
            'created_at'=>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
          ]);
        }*/

        for($i=0; $i<30; $i++){
          Post::create([
            'title'=>$faker->word,
            'content'=>$faker->randomHtml(2, 3),
            'filename'=>$faker->imageUrl(640, 480),
          ]);
        }


    }
}
