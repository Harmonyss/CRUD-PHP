<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cadastro PHP</title>
</head>
<body>
    <section>
    <h1>Cadastro de Usuario</h1>
    <?php
    if(isset($_SESSION["msg"])){
        echo $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }
    ?>
    <form method = "POST" action="processa.php">
        <label><h3>Nome: </h3></label>
        <input type="text" name="nome" placeholder="Digite seu Nome Completo" require><br><br>

        <label><h3>E-mail: </h3></label>
        <input type="email" name="email" placeholder="Digite seu Email" require><br><br>

        <input type ="submit" value="Enviar">
    </form>
    </section>
</body>
</html>