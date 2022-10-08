<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de testes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php 
        if (isset($_GET['v1'])) {
            $v_valor1=$_GET['v1'];
        }
        if (isset($_GET['v2'])) {
            $v_valor2=$_GET['v2'];
        } 
    ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <h1 class="alert alert-success">Bora Praticar</h1>
            <div class="col-5 alert alert-primary">
            <h2>Valores recebidos via url:</h2>
                <?php if(isset($v_valor1)){
                    echo "O valor da variavel 1 é: $v_valor1 <br>";
                }else{
                    echo "Variavel V1 não definida <br>";
                }
                if(isset($v_valor2)){
                    echo "O valor da variavel 2 é: $v_valor2 <br>";
                }else{
                    echo "Variavel V2 não definida <br>";
                }?>
            </div>
            <div class="col-5 alert alert-info">
            <h2>Exibindo a variavel recebida via url:</h2>
                <?php if(isset($v_valor1) || ($v_valor2)){
                    $v_soma= $v_valor1 + $v_valor2;
                    echo "A Soma de V1 + V2 é: $v_soma <br>";
                }else{
                    echo "Valor não definido!";
                }?>
            </div>
        </div>
    </div>
</body>
</html>