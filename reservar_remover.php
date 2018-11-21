<?php 

require_once('conecta_db.php');

$reserva = $_SESSION['reserva']

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "insert into usuarios(reserva) values('$reserva')";

if(mysqli_query($link, $sql) ){
	echo 'Reserva registrada com sucesso!';
} else{
	echo 'Erro ao registrar a reserva!';
}


?>


<?php 

session_start();

require_once('conecta_db.php');

$usuario = $_POST['user_name'];
$senha = $_POST['password'];
$tipo = $_SESSION['tipo'];

//echo $usuario;
//echo '<br>';
//echo $senha;



//echo $sql;
$objDb = new db;
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
	$dados_usuario = mysqli_fetch_array($resultado_id);
	//var_dump($dados_usuario);
	if(isset($dados_usuario['usuario'])){
		$_SESSION['usuario'] = $dados_usuario['usuario'];
		$_SESSION['email'] = $dados_usuario['email'];
		$_SESSION['tipo'] = $dados_usuario['tipo'];
		header('Location: home.php');
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