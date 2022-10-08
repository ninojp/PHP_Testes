<?php
session_start();
$_SESSION['nova_session'] = 'Conteudo da Sessao de Teste';
// testando o uso de cookies 
$nome_cookie = "teste_index";
$valor_cookie = "user_logado";
$tempo_expirar = time() + (1 * 24 * 3600); # Tempo de validade do COOKIE, +(1*24*3600) 1dia x 24horas x 3600segundos
$path = "C:\\xampp\\htdocs\\php_testes\\public"; #Só pode ser acessado por este diretório
$domain = "localhost"; #Só pode ser acessado por este Domínio
$secure = false; # true - Só pode ser acessado via HTTPS
$httponly = true; # true - para indicar que NÃO pode ser acessado via JavaScript

setcookie($nome_cookie, $valor_cookie, $tempo_expirar, $path, $domain, $secure, $httponly = false);
header("Set-cookie: $nome_cookie=$valor_cookie; SameSite=Lax; Secure");

//definindo as variaveis e o array para obter a DATA atual
$dia = date("d");
$mes = date("m");
$ano = date("Y"); //y minusculo para ano com dois algarismos
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
//definindo as variaveis para obter a HORA atual
$hora = date("H"); //H maiusculo para o formato 24h
$minuto = date("i");
$segundo = date("s");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/x-icon" href="imgs/favicon.ico" />
    <title>Aprendendo PHP</title>
</head>
<body>
    <div class="menu_lateral">
        <ul>
            <li>Material de Referência</li>
            <li><a href="https://www.php.net/manual/pt_BR/index.php" target="blank">Manual do PHP</a></li>
            <li><a href="https://www.w3schools.com/php/php_intro.asp" target="blank">W3schools PHP</a></li>
            <li><a href="" target="blank">João Ribeiro PHP</a>
                <ul class="ul_sub">
                    <li><a href="https://www.youtube.com/watch?v=krQj4stNu5U&list=PLXik_5Br-zO_5EGPG6_u-u0hVI_f_ThO_" target="blank">PHP Boas Práticas 2017</a><li>
                    <li><a href="https://www.youtube.com/watch?v=jVUeF7cZdFE&list=PLXik_5Br-zO9wODVI0j58VuZXkITMf7gZ" target="blank">PHP Curso Completo 2020</a><li>
                    <li><a href="https://www.youtube.com/watch?v=iDEuQjITm0E&list=PLXik_5Br-zO9Z8l3CE8zaIBkVWjHOboeL" target="blank">Curso Completo Parte2 2021</a><li>
                    <li><a href="https://www.youtube.com/watch?v=OMn8y1RE4FE&list=PLXik_5Br-zO-tsUy1lTPB8dnPGBu8n0Ee&index=3" target="blank">PHP Loja Virtual</a></li>
                    <li><a href="https://www.youtube.com/watch?v=gsPp71nRMQk&list=PLXik_5Br-zO8vLD6X9uB-EH6BpgZL8XBH" target="blank">PHP APIs</a></li>
                </ul></li>
            <li><a href="https://www.youtube.com/watch?v=F7KzJ7e6EAc&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k&index=1" target="blank">PHP Curso em Video 2014</a></li>
            <li><a href="https://www.youtube.com/watch?v=R2KdI-DDYCc&list=PLnex8IkmReXw-QlzKS9zA3rXQsRnK5nnA&index=3" target="blank">PHP7 Edson Maia PHP 2021</a></li>
            <li><a href="https://www.youtube.com/watch?v=71dz_gaE798&list=PLx4x_zx8csUgB4R1dDXke4uKMq-IrSr4B&index=3" target="blank">PHP CFBCursos 2014</a></li>
            <li><a href="https://celke.com.br/clms/home/index" target="blank">Celke PHP Development</a></li>
        </ul>
    </div>
    <header class="header_nav container-fluid">
        <div class="div_cookie text_peq">
            <?php if (isset($_COOKIE['teste_index'])){echo"Cookie de Teste: ".$_COOKIE['teste_index'];}?>
        </div>
        <nav class="navbar_cont container">
            <div class="div_row row">
                <div class="text_menu"> PHP Cursos - Celke - CFBCursos - João Ribeiro - Edson Maia - Curso em Video</div>
            </div>
        </nav>
        <div class='div_data text_peq'>
            <?php echo $dia." de ".$meses[$mes-1]." de ".$ano; echo " - ".$hora.":".$minuto.":".$segundo;?>
        </div>
    </header>
    <main class="main_cont container">
        <section class="sec_princ">
            <h1 class="m-3"> Aprendendo e Praticando <a href="https://www.php.net/manual/pt_BR/index.php" target="blank">PHP</a></h1>
<!--=======================================================================================================================-->
            <h2 class="mt-3">Tags de comentário do PHP</h2>
            <!-- Os comentários no HTML são neste formato -->
            # Os comentários no PHP são neste formato <br>
            // Os comentários no PHP são neste formato<br>
            /* Os comentários no PHP são neste formato, para comentar mais de uma linha */<br><br>
            <h4><a href="https://www.php.net/manual/pt_BR/extensions.membership.php#extensions.membership.core" target="blank">Extensões Principais</a></h4>
            <?= "<hr>"; ?><!-- Forma simplificada de imprimir um echo -->
<!--=======================================================================================================================-->
            <h2 class="mt-3">Tags ECHO e PRINT para Imprimir informações na tela</h2>
            <span class="codigo">echo</span> e <span class="codigo">print</span> são mais ou menos iguais. Ambos são usados ​​para enviar dados para a tela. As diferenças são pequenas: echo não tem valor de retorno enquanto print tem valor de retorno 1 para que possa ser usado em expressões. echo pode receber vários parâmetros (embora tal uso seja raro) enquanto print pode receber um argumento. echo é marginalmente mais rápido que print.
            <?php print "PRINT: É outra forma de imprimir na tela<br>";?>
            <?php echo "ECHO: Pode ser nos formatos! ";?><br>
            <span class="codigo">echo $variavel;</span><br>
            <span class="codigo">echo "Entre ASPAS DUPLAS";</span><br>
            <span class="codigo">echo 'Entre ASPAS SIMPLES';</span><br>
            <span class="codigo">echo ('Entre ASPAS SIMPLES ou DUPLA com colchetes');</span><br> 
            <span class="codigo">echo "TODO o Texto entre ASPAS DUPLAS $variavel sem o ponto para concatenar";</span><br>
            <span class="codigo">echo '(string) concatenado com o ponto' .$variavel. 'Entre ASPAS';</span><br> 
            <?php $variavel='_$Variável';?>
            <span class="codigo">echo <?= "\"Texto concatenado com\" ".$variavel.'\'concatenado com numeros \'' ."\"123\"";?>;</span><br>
            <hr>
<!--=======================================================================================================================-->
            <h2 class="mt-3">$variaveis e CONSTANTES do PHP</h2>
            <h4><a href="https://www.php.net/manual/pt_BR/language.variables.basics.php" target="blank">$variaveis</a></h4>
            <p>Para definir o nome de uma variavel basta colocar o <span class="codigo">$nome</span>, na frente da palavra, que não pode começar com numero, nem ter caracteres especiais ou acentuação e nem possuir mais de 32 caracteres, o valor para a mesma deve ser atribuido com <span class="codigo">=valor</span>.</p>
            Para verificar se uma $variavel foi declarada(definida, mesmo q sem valor) usamos: <span class="codigo">isset();</span><br><?php $v_teste='+Variável'; if(isset($v_teste)){ echo "Existe a variavel: ".$v_teste."<br>";}?><br>
            
            <h4><a href="https://www.w3schools.com/PhP/php_variables_scope.asp" target="blank"> Escopo de Variáveis PHP:</a></h4>
            O escopo de uma variável é a parte do script onde a variável pode ser referenciada/usada.<br>
            O PHP tem três escopos de variáveis ​​diferentes:<br>
            <span class="codigo">local:</span> Uma variável declarada dentro de uma função tem um LOCAL SCOPE e só pode ser acessada dentro dessa função:<br>
            <span class="codigo">global:</span> Uma variável declarada fora de uma função tem um GLOBAL SCOPE e só pode ser acessada fora de uma função: A palavra-chave <span class="codigo">global</span> é usada para acessar uma variável global de dentro de uma função. Para fazer isso, use a palavra-chave <span class="codigo">global</span> antes das variáveis ​​(dentro da função):<br>
            <span class="codigo">estático:</span> Normalmente, quando uma função é concluída/executada, todas as suas variáveis ​​são excluídas. No entanto, às vezes queremos que uma variável local NÃO seja excluída. Precisamos dele para mais um trabalho. Para fazer isso, use a palavra-chave <span class="codigo">static</span> ao declarar a variável pela primeira vez:<br>

            <h4><a href="https://www.w3schools.com/PhP/php_datatypes.asp" target="blank">Tipos de variaveis:</a></h4>
            <?php $v_numero=41;?><span class="codigo">$inteiro = <?=$v_numero?>;</span> Tipo (numérico)Inteiro, (int) (integer)<br>
            <?php $v_nome="palavra";?><span class="codigo">$caracter = "<?=$v_nome?>";</span> Deve ser declarada entre aspas, simples ou dupla (string)<br> 
            <span class="codigo">$real = 1.47;</span> Deve sempre ser separado por ponto, (float) (double) (real)<br>
            <span class="codigo">$logico = true;</span> Pode ser (false = 0) ou (true = 1)<br>
            <span class="codigo">$array = ['indice0'=>'valor','indice1'=>'valor1'];</span> Será detalhado mais abaixo nesta pagina.<br>
            <span class="codigo">Object:</span>Será detalhado na parte de programação orientada a objetos<br>
            <span class="codigo">NULL:</span> Uma variável do tipo de dados NULL é uma variável que não tem valor atribuído a ela.<br>
            <span class="codigo">Resource:</span> O tipo de recurso especial não é um tipo de dados real. É o armazenamento de uma referência a funções e recursos externos ao PHP. Um exemplo comum de uso do tipo de dados de recurso é uma chamada de banco de dados.<br>

            <h4>Variáveis pré-definidas</h4>
                Superglobais — Variáveis nativas que estão sempre disponíveis em todos escopos<br>
                <span class="codigo">$GLOBALS</span> — Referencia todas variáveis disponíveis no escopo global<br>
                <span class="codigo">$_SERVER</span> — Informação do servidor e ambiente de execução<br>
                <span class="codigo">$_GET</span> — Variáveis HTTP GET<br>
                <span class="codigo">$_POST</span> — HTTP POST variables<br>
                <span class="codigo">$_FILES</span> — Variáveis de Upload de Arquivos HTTP<br>
                <span class="codigo">$_REQUEST</span> — Variáveis de requisição HTTP<br>
                <span class="codigo">$_SESSION</span> — Variáveis de sessão<br>
                <span class="codigo">$_ENV</span> — Variáveis de ambiente<br>
                <span class="codigo">$_COOKIE</span> — Cookies HTTP<br>
                <span class="codigo">$php_errormsg</span> — A mensagem de erro anterior<br>
                <span class="codigo">$http_response_header</span> — Cabeçalhos de resposta HTTP<br>
                <span class="codigo">$argc</span> — O número de argumentos passados para o script<br>
                <span class="codigo">$argv</span> — Array de argumentos passados para o script<br>
            <hr>
            
            <h4><a href="https://www.php.net/manual/pt_BR/language.constants.php" target="blank">CONSTANTES:</a></h4>
            <p>São variaveis que devem ser definidas para que seu valor não seja alterado no decorer do codigo. Seu nome deve preferencialmente ser declarada com letras maiúsculas</p>

            <h4><a href="https://www.php.net/manual/pt_BR/reserved.constants.php#reserved.constants.core" target="blank">Principais Constantes Predefinidas</a></h4><br>
            Para declarar uma constante use o seguindte formato:<br>
            <span class="codigo">define("NOME_CONSTANTE", "valor");</span> <?php define("NOME", "Nino");?><br>
            Pode se definir uma CONSTANTE assim também: <span class="codigo">const NOME_CONSTANTE = 'Valor';</span>//embora eu não tenha certeza se faz alguma diferença.<br>
            <span class="codigo">const teste = 'ninojp';  echo "A constante teste é: ".teste;</span> <?php const teste = 'ninojp';  echo "A constante teste é: ".teste; ?><br><br>

            Para conferir se uma constante existe usamos:<span class="codigo"> defined('');</span><br>
            <span class="codigo">if(defined('NOME')){echo "OK! A contante NOME está definida";};</span><?php if(defined('NOME')){echo "OK! A contante NOME está definida";};?><br>
            Para exibir uma constante, não se pode colocar a expressão inteira dentro de ASPAS, no caso de concatenar com strings é necessário o ponto.<br> 
            <span class="codigo"> define("NOME", "Nino"); echo = "O nome da constante é: ".NOME;</span> <?= "O nome da constante é: ".NOME;?><br>
            <span class="codigo">echo constant("NOME");</span> // mesma coisa que a linha anterior: <?=constant('NOME');?><br><br>
            
            <h4>Constantes mágicas</h4>
            Há nove constantes mágicas, que mudam dependendo de onde são utilizadas. Todas essas constantes "mágicas" são resolvidas em tempo de compilação, ao contrário das constantes regulares que são resolvidas em tempo de execução. Essas constantes especiais são case-insentitive e estão descritas a seguir:
                <table class="table table-primary">
                    <thead><tr><th>Constante</th><th>Definição</th><tr></thead>
                    <tbody><tr><td>__LINE__</td><td>O número da linha corrente do arquivo.</td></tr>
                        <tr><td>__FILE__</td><td>O caminho completo e nome do arquivo com links simbólicos resolvidos. Se utilizado dentro de um include, o nome do arquivo incluído será retornado.</td></tr>
                        <tr><td>__DIR__</td><td>O diretório do arquivo. Se usado dentro de um include, o diretório do arquivo incluído é retornado. É equivalente a dirname(__FILE__). O nome do diretório não possui barra no final, a não ser que seja o diretório raiz.</td></tr>
                        <tr><td>__FUNCTION__</td><td>O nome da função, or {closure} para funções anônimas.</td></tr>
                        <tr><td>__CLASS__</td><td>O nome da classe. O nome da classe inclui o namespace em que foi declarado (por exemplo, Foo\Bar). Quando utilizada em um método trait, __CLASS__ é o nome da classe que está utilizando a trait.</td></tr>
                        <tr><td>__TRAIT__</td><td>O nome do trait. O nome do trait inclui o namespace em que foi declarado (por exemplo, Foo\Bar).</td></tr>
                        <tr><td>__METHOD__</td><td>O nome do método da classe.</td></tr>
                        <tr><td>__NAMESPACE__</td><td>O nome do namespace corrente.</td></tr>
                        <tr><td>ClassName::class</td><td>O nome qualificado completo da classe.</td></tr>
                     </tbody>
                </table><hr>
            
            <h4><a href="https://www.php.net/manual/pt_BR/language.variables.superglobals.php" target="blank"> Super __BLOBAIS:</a></h4>
            <p>São CONSTANTES cujo o NOME é previamente definidas pela linguagem de programação(PHP), através de palavras chaves(__keywords), que o valor será definido automaticamente pelo sistema em execussão. e sempre começam com dois underlines seguidos do nome em letras maiúculas __GLOBAIS,</p><br><hr>
<!--=======================================================================================================================-->
            <h2 class="mt-3">OPERADORES:</h2>
            <h3 class="mt-3">Operadores Logicos ou Aritméticos:</h3>

<!--=======================================================================================================================-->
            <h2 class="mt-3">ARRAYs:</h2>
            <p>O array pode ser declarado misturando tipos de valores, mixed: string, numeros, float<br>
            Para declarar um array usamos os seguintes formatos:</p>
            <span class="codigo">$nome_array=['valor1','valor2','valor3'];</span>Formato atual<br>
            <?php $a_array0 = ['Nino', "idade", 41, 1.79];?>
            <span class="codigo">$nome_array=array("valor1", "valor2");</span>Formato mais antigo<br>
            <?php $a_array = array('Nome', 'Idade', 41, 1.79);?><br>
            <h4>Definindo os nomes dos indices do array:</h4>
            <span class="codigo">$a_array1=['nome'=>'Nino', "idade"=>41, 'altura'=>1.79, 1981=>' Data de Nascimento'];</span><br>
            <?php $a_array1=['nome'=>'Nino', "idade"=>41, 'altura'=>1.79, 1981=>' Data de Nascimento'];?><br>
            
            
            <h4>Exibindo ARRAYs</h4>
            Podem ser impressos destas duas formas:<br>
            <span class="codigo">echo $a_array[0]." ".$a_array[1].': '.$a_array[2]." Altura: ".$a_array[3];<br></span>
            <?php echo $a_array[0]." ".$a_array[1].': '.$a_array[2]." Altura: ".$a_array[3];
            echo "<br>";?>
            <span class="codigo">echo "$a_array[0] $a_array[1]: $a_array[2] Altura: $a_array[3]";<br></span>
            <?="$a_array[0] $a_array[1]: $a_array[2] Altura: $a_array[3]";
            echo "<br><br>"; ?>
            <?php $a_nome = ["Nino",41,1.8];?>array de exemplo: <span class="codigo">$a_nome = ["Nino",41,1.8];</span><br>

            Usando os indices do array para exibir:<br><span class="codigo">echo "Nome: ".$a_nome['0']." Idade: ".$a_nome[1]." e altura: ".$a_nome[2];</span><br>
            <?php echo "Nome: ".$a_nome['0']." Idade: ".$a_nome[1]." e altura: ".$a_nome[2];?><br><br>
            Exibindo ARRAYs com o indice nomeado:<br>
            <span class="codigo">echo"Nome: $a_array1[nome], $a_array1[idade] anos, Altura: $a_array1[altura]m, 1981: $a_array1[1981]";</span>
            <?="Nome: $a_array1[nome], $a_array1[idade] anos, Altura: $a_array1[altura]m, 1981: $a_array1[1981]";
            echo "<br><hr>";?>

            Para verificar e exibir o nome, tipo e valores de uma variavel ou array, usamos:<br> 
            <span class="codigo">print_r(nome_array['indice']);</span> ou <span class="codigo">var_dump(nome_array['indice']);</span><br>
            Usando o PRIN_R: <span class="codigo"><?php print_r($a_nome);?></span><br>
            Usando o VAR_DUMP: <span class="codigo"><?php var_dump($a_nome);?></span><br>
            Usando o var_dump com a tag PRE do html: <pre><?php var_dump($a_nome);?></pre><hr>
           
<!--=======================================================================================================================-->
            <h2 class="mt-3">Usando FUNÇÕES pré definidas do PHP</h2>

            <?php
            echo "<h3>A Função strlen() serve para fazer a contagem de caracteres de uma string</h3>";
            $v_frase = "Caracteres sem acentuação";
            printf($v_frase);
            $v_str_frase = strlen($v_frase);
            echo "<br>";
            echo "O numero de caracter da frase é: $v_str_frase";
            echo "<br>";
            echo "<h5>Já o mb_strlen(), (mb_ multbyte string functions), serve para fazer a contagem de caracteres de forma mais precisa no nosso padrão(utf-8) de caracteres, com acentuação</h5>";
            $v_frase2 = "Caracteres com acentuação";
            printf($v_frase2);
            $v_str_frase2 = mb_strlen($v_frase2);
            echo "<br>";
            echo "O numero de caracter da frase é: $v_str_frase2";
            echo "<hr>";
            ?>
            <h3>A Função str_replace() serve para subtituir um caracter por outro dentro de uma string</h3>
            <?php
            #STR_REPLACE serve para subtituir um caracter por outro dentro de uma string
            $v_valor = "1_000.00";
            echo $v_valor . "<br>";
            $v_novo_valor = str_replace('_', ' ', $v_valor);
            echo "String com substituição de caracter: " . $v_novo_valor;
            echo "<br>";
            $v_data = "27-09-2022";
            $v_novo_data = str_replace('-', '/', $v_data);
            echo $v_data . "<br>";
            echo "substituição do - por /: " . $v_novo_data;
            echo "<br><hr>";?>
<!--=======================================================================================================================-->
            <h2 class="m-5"> Formulário para inserção de Dados</h2>
            <form class="form-groups" name="form_test" action="">
                <div class="div_input">
                    <label class="" for="">Nome: </label>
                    <input class="" type="text" name="" placeholder="Insira seu Nome">
                </div>
                <div class="div_input">
                    <label class="" for="">E-mail: </label>
                    <input class="" type="email" name="" placeholder="Insira seu E-mail">
                </div>
            </form>
        </section>
    </main>
<!--=======================================================================================================================-->
<aside class="aside_col col-2">
    <?php include "aside.inc";?>
</aside>
<!--=======================================================================================================================-->
    <footer class="foot_cont container-fluid">
        <div class="div_cont col-12"> Rodapé da pagina</div>
    </footer>
    <script src="js/bootstrap.js"></script>
</body>

</html>