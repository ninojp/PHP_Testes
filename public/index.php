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
    <h1 class="m-3 text-center"><a href="index.php?a=inicio" target="blank">Aprendendo</a> - <a href="index.php?a=praticando" target="blank">Praticando</a> - <a href="index.php?a=banco_dados" target="blank">Banco de Dados</a></h1>
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
            case 'banco_dados':
                include 'banco_dados.php';
                break;
        }?>
    </main>
<!--=======================================================================================================================-->
    <footer class="foot_cont container-fluid">
        <div class="div_cont col-12"> Rodapé da pagina</div>
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>