<?php 

require_once('conecta_db.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$objDb = new bd();
$link = $objDb->conecta_mysql();

$sql = "insert into usuarios(usuario, email, senha) values('$usuario','$email','$senha')";

if(mysqli_query($link, $sql)){
	echo 'Usuário registrado com sucesso!';
} else{
	echo 'Erro ao registrar o usúario!';
}


?>