<?php include_once 'nav_top.php';?>
<div class="container-fluid">
    <div class="row">
        <h2 class="mt-3">Usando FUNÇÕES pré definidas do PHP</h2><br>
        <h4>Lista completa de funções para trabalhar com Strings:</h4>
        <h3><a href="https://www.php.net/manual/pt_BR/ref.strings.php" target="blank"> Manual do PHP</a> - <a href="https://www.php.net/manual/pt_BR/ref.mbstring.php" target="https://www.php.net/manual/pt_BR/ref.mbstring.php">MultiByte</a> - <a href="https://www.w3schools.com/PhP/php_ref_string.asp" target="">W3schools list</a></h3>

        A Função strlen() serve para fazer a contagem de caracteres de uma string
        <?php $v_frase = "Caracteres sem acentuação";
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
        ?>
        <h4>A Função str_replace() serve para subtituir um caracter por outro dentro de uma string</h4>
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
        echo "<br><hr>"; ?>
        <h4>Lista completa de funções para trabalhar Numeros:</h4>
    </div>
</div>