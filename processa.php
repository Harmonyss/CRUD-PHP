<?php
session_start();
include_once "conexao.php";

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

// echo "NOME: $nome <br>";
// echo "EMAIL: $email <br>";


$result="INSERT INTO usuarios (nome, email, criado) VALUES('$nome', '$email',NOW())";
$resultado=mysqli_query($conect, $result);

if(mysqli_insert_id($conect)){
    $_SESSION["msg"] = "<p style='color: green;'>Ususario Cadastrado com sucesso</p>";
    header("Location: index.php");
} else{
    $_SESSION["msg"] = "<p style='color: red;'>Ususario não foi cadastrado</p>";
    header("Location: index.php");

}