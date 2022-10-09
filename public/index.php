<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo e Praticando o PHP8</title>
    <link rel="icon" type="image/x-icon" href="imgs/favicon.ico" />
</head>
<body>
    <?php require_once "nav_top.php";
    // include_once "header.php";?>
    <h2 class="m-3 text-center"><a href="index.php?a=inicio" target="_self">Aprendendo</a> - <a href="index.php?a=praticando" target="_blank">Praticando</a> - <a href="index.php?a=funcoes" target="_blank">Funções do PHP</a> - <a href="index.php?a=banco_dados" target="_new">Banco de Dados</a> - <a href="index.php?a=php_oop" target="_new">PHP OOP</a></h2>
<!--=======================================================================================================================-->
    <main class="main_cont container-fluid">
    <!-- testando um método que aprendi no curso do João Ribeiro, PHP 2017 -->
        <?php 
        #analisar que conteudo apresentar 
        $acao='inicio';
        #verifica se 'a' está definida
        if(isset($_GET['a'])) $acao=$_GET['a'];
        #análise da ação
        switch ($acao){
            case 'inicio':
                include 'aprendendo.php';
                break;
            case 'praticando':
                include 'praticando.php';
                break;
            case 'funcoes':
                include 'funcoes.php';
                break;
            case 'banco_dados':
                include 'banco_dados.php';
                break;
            case 'php_oop':
                include 'php_oop.php';
                break;
        }?>
    </main>
<!--=======================================================================================================================-->
    <footer class="foot_cont container-fluid">
        <div class="div_cont col-12"> Rodapé da pagina</div>
    </footer>
</body>
</html>