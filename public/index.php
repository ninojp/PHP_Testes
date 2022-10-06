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
                <ul>
                    <li><a href="" target="blank">PHP Parte2</a><li>
                    <li><a href="" target="blank">Loja Virtual</a></li>
                </ul></li>
            <li><a href="" target="blank">Curso em Video PHP</a></li>
            <li><a href="" target="blank">Edson Maia PHP</a></li>
            <li><a href="https://www.youtube.com/watch?v=71dz_gaE798&list=PLx4x_zx8csUgB4R1dDXke4uKMq-IrSr4B&index=3" target="blank">CFBCursos PHP</a></li>
            <li><a href="" target="blank">Celke PHP</a></li>
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
            <h2 class="mt-3">Tags de comentário de do PHP</h2>
            <!-- Os comentários no HTML são neste formato -->
            # Os comentários no PHP são neste formato <br>
            // Os comentários no PHP são neste formato<br>
            /* Os comentários no PHP são neste formato, para comentar mais de uma linha */<br>
            <?= "<hr>"; ?><!-- Forma simplificada de imprimir um echo -->
<!--=======================================================================================================================-->
            <h2 class="mt-3">Tags ECHO e PRINT para Imprimir informações na tela</h2>
            <?php print(" PRINT:É outra forma de imprimir na tela<br>");?>
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
            <h2 class="mt-3">$variaveis e _CONSTANTES do PHP</h2>
            <h4><a href="https://www.php.net/manual/pt_BR/language.variables.basics.php" target="blank">$variaveis</a></h4>
            <p>Para definir o nome de uma variavel basta colocar o <span class="codigo">$nome</span>, na frente da palavra, que não pode começar com numero, nem ter caracteres especiais ou acentuação e nem possuir mais de 32 caracteres, o valor para a mesma deve ser atribuido com <span class="codigo">=valor</span>.</p>
            
            <h4>Tipos de variaveis:</h4>
            <?php $v_numero=41;?><span class="codigo">$inteiro = <?=$v_numero?>;</span> Tipo (numérico)Inteiro, (int) (integer)<br>
            <?php $v_nome="palavra";?><span class="codigo">$caracter = "<?=$v_nome?>";</span> Deve ser declarada entre aspas, simples ou dupla (string)<br> 
            <span class="codigo">$real = 1.47;</span> Deve sempre ser separado por ponto, (float) (double) (real)<br>
            <span class="codigo">$logico = true;</span> Pode ser (false = 0) ou (true = 1)<br><br><hr>
            
            <h4>CONSTANTES:</h4>
            <p>São variaveis que devem ser definidas para que seu valor não seja alterado no decorer do codigo. Seu nome deve preferencialmente ser declarada com letras maiúsculas</p>
            Para declarar uma constante use o seguindte formato:<br>
            <span class="codigo">define("NOME_CONSTANTE", "valor");</span> <?php define("NOME", "Nino");?><br>
            Para exibir uma constante, não se pode colocala dentro de ASPAS, no caso de concatenar com strings é necessário o ponto.<br> 
            <span class="codigo"> define("NOME", "Nino"); echo = NOME;</span> <?=NOME;?><br><hr>
            
            <h4>Super __BLOBAIS:</h4>
            <p>São CONSTANTES cujo o NOME é previamente definidas pela linguagem de programação(PHP), através de palavras chaves(__keywords), que o valor será definido automaticamente pelo sistema em execussão. e sempre começam com dois underlines seguidos do nome em letras maiúculas __GLOBAIS,</p><br><hr>
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
            echo "<h5>Já o mb_strlen() serve para fazer a contagem de caracteres de forma mais precisa no nosso padrão de caracteres, com acentuação</h5>";
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