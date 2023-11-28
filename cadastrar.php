<?php

/*Variáveis para armazenamento de dados do form */
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

/*Confirma dados informados pelo usuário */
echo "<h3>Nome: $nome</h3>";
echo "<h3>Email: $email</h3>";
echo "<h3>Senha: A senha é secreta</h3>

// String de inserção no banco
$cad_usuario = "INSERT INTO usuario(nome,email, senha) VALUES ('$nome', '$email', '$senha')";

?>