<?php include_once 'nav_top.php';?>
<?php 
    # Recebendo os dados do FORMULÁRIO via _POST
    if (isset($_POST['input_words'])) {$v_string=$_POST['input_words'];} 
    if (isset($_POST['input_number_1'])) {$v_number1=$_POST['input_number_1'];} 
    if (isset($_POST['input_number_2'])) {$v_number2=$_POST['input_number_2'];} 
    if (isset($_POST['input_email'])) {$v_email=$_POST['input_email'];} 
    if (isset($_POST['input_password'])) {$v_password=$_POST['input_password'];} 
?>
<div class="container-fluid ps-5 pe-5">
    <div class="row justify-content-center">
        <h1 class="alert alert-success text-center">Pagina de Banco de dados</h1>
        <div class="col-4 alert alert-primary">
        <h2 class="text-center">Formulário para inserção</h2>
        <form class="p-3" method="POST" name="form_insert" action="">
            <div class="mb-3">
                <label class="form-label mb-0 pb-0" for="input_words">Inserir Palavras:</label>
                <input id="input_words" name="input_words" class="form-control" type="text" placeholder="Inserir Palavras (Strings)">
            </div>
            <div class="mb-3">
                <label class="form-label mb-0 pb-0" for="input_number_1">Insira o valor 1:</label>
                <input id="input_number_1" name="input_number_1" class="form-control" type="number" placeholder="Insira o valor 1 (Number)">
                <label class="form-label mb-0 pb-0" for="input_number_2">Insira o valor 2:</label>
                <input id="input_number_2" name="input_number_2" class="form-control" type="number" placeholder="Insira o valor 2 (Number)">
            </div>
            <div class="mb-3">
                <label class="form-label mb-0 pb-0" for="input_email">Insira o E-mail:</label>
                <input id="input_email" name="input_email" class="form-control" type="email" placeholder="Insira o E-mail">
            </div>
            <div class="mb-3">
                <label class="form-label mb-0 pb-0" for="input_password">Insira a Senha:</label>
                <input id="input_password" name="input_password" class="form-control" type="password" placeholder="Insira a Senha">
            </div>
            <div class="row justify-content-between">
                <div class="mt-4 col-4">
                    <button class="btn btn-warning" type="reset">Limpar Form</button>
                </div>
                <div class="mt-4 col-3">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
        </div>
        <div class="col-4 alert alert-success">
            <?php # Verificando e exibindo os dados recebidos do formulario
            echo "<h3>Exibindo as variaveis do formulário:</h3><br>";
            if(isset($v_string)){echo "O Texto é: $v_string<br>";}
            if(isset($v_number1)){echo "O Primeiro numero é: $v_number1<br>";}
            if(isset($v_number2)){echo "O Segundo numero é: $v_number2<br>";}
            if(isset($v_email)){echo "O E-mail é: $v_email<br>";}
            if(isset($v_password)){echo "A Senha é: $v_password<br>";}
            ?>
        </div>
        <div class="col-4 alert alert-info">
            <h4>Trabalhando com dados vindos do Furmulário:</h4>
            <?php if(isset($v_number1) and ($v_number2)){$v_soma= $v_number1 + $v_number2;
                echo "A Soma de V1 + V2 é: $v_soma <br>";
            }else{echo "Valor não definido!";}?>
        </div>
    </div>
</div>
