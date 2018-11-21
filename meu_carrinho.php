<?php 
session_start();
if(!isset($_SESSION['usuario'])){
	header('Location: index.php?erro=1');
}


$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">

<title>Sistema Hoteleiro</title>

<link rel="stylesheet" type="text/css" href="css/folha_de_estilo.css">


<link rel="icon" href="img/logo/logo.png">

<script type="text/javascript" src="js/javascript.js"></script>


<!-- jquery - link cdn -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- bootstrap - link cdn -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
<header class="col-md-12" style="text-align: center;padding: 0px;">
	<h1>Sistema Hoteleiro</h1>
	<p>Engenharia de Software 2º/2018</p>	
		<div class="jumbotron text-center" style="margin-bottom: 10px;border-bottom: 10px solid;">
  			<strong><pre style="margin: 0px 0px 0px 0px;">Alexandre Gonçalves Teixeira - 15/0115571<br />Breno - XX/0000000<br />Thalles - XX/000000</pre></strong>
		</div>
</header> 


<!--AREA RESPONSTAVEL PELA ROW (LOGO, SEARCH, LOGIN, SIGN -->
<div id="area1" class="col-md-12">

	<div id="logo" class="col-md-2">
		<img src="img/logo/logo.png" class="img-responsive" alt="Imagem não encontrada!" >
	</div>

	<form>
		<div id="pesquisar_destino" class="col-md-5" style="margin-top: 65px;">
			<input id="nome_destino" type="text" class="form-control" placeholder="Digite o seu destino..." autocomplete="on">
				<span class="input-group-btn">
					<button id="btn_destino" type="submit" class="btn btn-default btnSearch btn_carrega_conteudo">
						<span class="glyphicon glyphicon-search"> </span>
					</button>
				</span>
		</div>
	</form>

	<form method="post" action="meu_carrinho.php">
		<div class="col-md-1" style="margin-top: 65px;">
			<button id="btn_carrinho" type="submit" class="btn btn-default btnSearch">Meu carrinho
					<span class="glyphicon glyphicon-shopping-cart"> </span>
				</button>
		</div>
	</form>

	<form method="post" action="sair.php">
		<div class="col-md-1" style="margin-top: 65px;margin-left: 20px;">
			<button id="btn_logoff" type="submit" class="btn btn-default btnSearch">Sair da Sessão
					<span class="glyphicon glyphicon-off"> </span>
				</button>
		</div>
	</form>


	<div class="col-md-2" style="margin-top: 50px;margin-left: 20px;transform: translateX(30px);">
		<?php
			echo "<span style='font-weight: 800'>Usuário: ";
			echo $_SESSION['usuario'];
			echo "</span><br>";
			echo "<span style='font-weight: 800'>Email: ";
			echo $_SESSION['email'];
			echo "</span><br>";
			echo "<span style='font-weight: 800'>Tipo de Cadastro: ";
			echo $_SESSION['tipo'];
			echo "</span>";
			
	?>

	</div>


</div>


<div class="col-md-12">
	
</div>

<div id="carrinho" class="col-md-12">
 	
 	<div class="col-md-2">
   	<span>Carrinho de: <br><?php echo $_SESSION['usuario']; ?></span>
   </div>
  
   <div id="carrinho_compras" class="col-md-10">
   	<?php if($_SESSION['tipo'] == NULL){
   		echo "O Carrinho está Vazio!!!";
   	}else{
   		echo "Compras: ";
   	} 
   		?>
   </div>

</div>

	





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>


