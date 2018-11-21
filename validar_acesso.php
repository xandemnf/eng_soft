<?php 

require_once('conecta_db.php');

$usuario = $_POST['user_name'];
$senha = $_POST['password'];

echo $usuario;
echo '<br>';
echo $senha;

$sql = "select * from usuarios where usuario = '$usuario' and senha = '$senha' ";

//echo $sql;
$objDb = new db;
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
	$dados_usuario = mysqli_fetch_array($resultado_id);
	//var_dump($dados_usuario);
	if(isset($dados_usuario['usuario'])){
		echo "Usuario Existe";
	} else{
		header('Location: index.php?erro=1');	
	}

}else{
	echo "Erro na excecução da consulta, favor entrar em contato com o ADM do sistema!";
}





//update true/false
//insert true/false
//select false/resource
//delete true/false

?>