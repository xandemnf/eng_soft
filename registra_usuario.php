<?php 

require_once('conecta_db.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo_usuario'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "insert into usuarios(usuario, email, senha, tipo) values('$usuario','$email','$senha', '$tipo')";

if(mysqli_query($link, $sql) ){
	echo 'Usuário registrado com sucesso!';
} else{
	echo 'Erro ao registrar o usúario!';
}


?>