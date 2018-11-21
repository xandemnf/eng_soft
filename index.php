<?php 
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

<script type="text/javascript">

$(document).ready(function(){
	$('#btn_login').click(function(){
		//alert("O Botão entrar foi clicado");

		var campo_vazio = false;

		if($('#user_name').val() == ''){
			//alert("O campo Usuário está vazio!");
			$('#user_name').css({'border': '2px solid red'});
			//$('#user_name').css({'border-color': '#A94442'});
			campo_vazio = true;
		}else{
			$('#user_name').css({'border': '1px solid #ccc'});
		}
		if($('#password').val() == ''){
			//alert("O campo Senha está vazio!");
			$('#password').css({'border': '2px solid red'});
			campo_vazio = true;
		} else{
			$('#password').css({'border': '1px solid #ccc'});
		}
		
		if(campo_vazio) 
			return false;

		});
});

</script>

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

	<div id="pesquisar_destino" class="col-md-4">
		<input id="nome_destino" type="text" class="form-control" placeholder="Digite o seu destino..." autocomplete="on">
			<span class="input-group-btn">
				<button id="btn_destino" type="submit" class="btn btn-default btnSearch btn_carrega_conteudo">
					<span class="glyphicon glyphicon-search"> </span>
				</button>
			</span>
	</div>

	<form method="post" action="validar_acesso.php">
		<div id="usuario" class="col-md-2" >
			<span style="display: inline-block;">Usuário:</span>
			<input id="user_name" class="form-control" type="text" name="user_name" placeholder="Digite seu usuário..." required="true">
		</div>

		<div id="senha" class="col-md-2">
			<span style="display: inline-block;">Senha:</span>
			<input id="password" class="form-control" type="password" name="password" placeholder="Digite sua senha..." required="true">
		</div>

		<div id="botao_login" class="col-md-1">
			<button id="btn_login" type="submit" class="btn btn-default" value="botao_login" nome="botao_login">Login</button>
		</div>	
	</form>

	<div id="botao_cadastrar" class="col-md-1">
		<p>Ainda não é cadastrado? Cadastre-se agora!</p>
		<a href="cadastro_novo_usuario.php"><button class="btn btn-default" value="botao_cadastrar" nome="botao_cadastrar">Cadastrar</button></a>
	</div>

	<?php 
		if($erro == 1){
			echo "<span style='float: left;display: inline-block;color: red;font-size: 27px;padding-top: 25px;transform: translateX(-48px);'>Usuário ou senha <b>inválidos</b></span>";
		}

	?>

</div>

<!--BLOCKOUT-->


	
<div id="ofertas_pag_ini" class="col-md-12"> 

	<span class="col-md-12">Ofertas de Viagens</span>

	<div class="col-md-4">
		<div class="cont_img">
			<img src="img/rj/rio_de_janeiro/rio.jpg" class="thumbnail" alt="Cinque Terre">
		</div>
		<h3>Rio de Janeiro - RJ</h3>
		<p>Venha conhecer o melhor do Rio de Janeiro com os melhores preços que cabem no seu bolso</p>	
	</div>
	
	<div class="col-md-4">
		<div class="cont_img">
			<img src="img/rj/arraial_do_cabo/arraial.jpg" class="thumbnail" alt="Cinque Terre">
		</div>
		<h3>Arraial do Cabo - RJ</h3>
		<p>Venha conhecer o melhor de Arraial com os melhores preços que cabem no seu bolso</p>	
	</div>
	
	<div class="col-md-4">
		<div class="cont_img">
			<img src="img/rs/gramado/gramado-festuris-2016.jpg" class="thumbnail" alt="Cinque Terre">
		</div>
		<h3>Gramado - RS</h3>
		<p>Venha conhecer o melhor de Gramado com os melhores preços que cabem no seu bolso</p>	
	</div>

</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>


