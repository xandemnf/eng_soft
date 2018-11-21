<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">

<title>Sistema Hoteleiro</title>

<link rel="stylesheet" type="text/css" href="css/folha_de_estilo.css">


<link rel="icon" href="img/eagle/images.png">

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

$(document).ready(function() {
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});

$(document).ready(function(){
	$('.btn_carrega_conteudo').click(function(){
		
		var carrega_url = 'http://localhost/trab/';
		$('#loader').css({display:"block"});
		$.ajax({
			url: carrega_url,
			success: function(){
				$('#loader').css({display:"block"});
			}
		});
	});
});	

$(document).ready(function(){

	$('#btn_escola_nome').click(function(){
		if($('#nome_escola').val().length > 0){
			$.ajax({
				url: 'consulta_sql.php',
				method: 'post',
				data: { nome_escola: $('#nome_escola').val(), loc: '', novo_noesc: '', cod_esc: '', qtd_res: '',codigo_escola: '', codigo_matricula: '', codigo_docente: '', codigo_turma: '' },
				success: function(data){
					$('#teste').html(data);
				}
			});
	
		}else{
			alert("<h2><b>Por Favor preencha os dados nos campos de pesquisa</b></h2>");
		}
	});	

	$('#btn_escola_codigo').click(function(){
		if($('#codigo_escola').val().length > 0){
			$.ajax({
				url: 'consulta_sql.php',
				method: 'post',
				data: { codigo_escola: $('#codigo_escola').val(), loc: '', novo_noesc: '', cod_esc: '', qtd_res: '',nome_escola: '', codigo_matricula: '', codigo_docente: '', codigo_turma: '' },
				success: function(data){
					$('#teste').html(data);
				}
			});
		
		}else{
			alert("<h2><b>Por Favor preencha os dados nos campos de pesquisa</b></h2>");
		}
	});

	$('#btn_aluno_codigo').click(function(){
		if($('#codigo_matricula').val().length > 0){
			$.ajax({
				url: 'consulta_sql.php',
				method: 'post',
				data: { codigo_matricula: $('#codigo_matricula').val(), loc: '', novo_noesc: '', cod_esc: '', qtd_res: '',nome_escola: '', codigo_escola: '', codigo_docente: '', codigo_turma: '' },
				success: function(data){
					$('#teste').html(data);
				}
			});
		
		}else{
			alert("<h2><b>Por Favor preencha os dados nos campos de pesquisa</b></h2>");
		}
	});

	$('#btn_docente_codigo').click(function(){
		if($('#codigo_docente').val().length > 0){
			$.ajax({
				url: 'consulta_sql.php',
				method: 'post',
				data: { codigo_docente: $('#codigo_docente').val(), novo_noesc: '', loc: '', cod_esc: '', qtd_res: '',codigo_escola: '', nome_escola: '', codigo_matricula: '', codigo_turma: '' },
				success: function(data){
					$('#teste').html(data);
				}
			});
	
		}else{
			alert("<h2><b>Por Favor preencha os dados nos campos de pesquisa</b></h2>");
		}
	});

	$('#btn_turma_codigo').click(function(){
		if($('#codigo_turma').val().length > 0){
			$.ajax({
				url: 'consulta_sql.php',
				method: 'post',
				data: { codigo_turma: $('#codigo_turma').val(), novo_noesc: '', cod_esc: '', loc: '', qtd_res: '',codigo_escola: '', nome_escola: '', codigo_matricula: '', codigo_docente: '' },
				success: function(data){
					$('#teste').html(data);
				}
			});
	
		}else{
			alert("<h2><b>Por Favor preencha os dados nos campos de pesquisa</b></h2>");
		}
	});
	$('#btn_docente_velho').click(function(){
		if($('#qtd_res').val().length > 0){	
			$.ajax({
				url: 'consulta_sql.php',
				method: 'post',
				data: { qtd_res: $('#qtd_res').val(), novo_noesc: '', cod_esc: '', codigo_escola: '', loc: '', nome_escola: '', codigo_matricula: '', codigo_docente: '', codigo_turma: '' },
				success: function(data){
					$('#teste').html(data);
				}
			});	
		}else{
			alert("<h2><b>Por Favor preencha os dados nos campos de pesquisa</b></h2>");
		}		
	});
	$('#btn_trigger').click(function(){
		if($('#cod_esc').val().length > 0){	
			$.ajax({
				url: 'consulta_sql.php',
				method: 'post',
				data: { cod_esc: $('#cod_esc').val(), novo_noesc: $('#novo_noesc').val(), qtd_res: '', loc: '', codigo_escola: '', nome_escola: '', codigo_matricula: '', codigo_docente: '', codigo_turma: '' },
				success: function(data){
					$('#teste').html(data);
				}
			});	
		}else{
			alert("<h2><b>Por Favor preencha os dados nos campos de pesquisa</b></h2>");
		}		
	});
	$('#btn_procedure').click(function(){
		if($('#loc').val().length > 0){	
			$.ajax({
				url: 'consulta_sql.php',
				method: 'post',
				data: { loc: $('#loc').val(), cod_esc: '', novo_noesc: '', qtd_res: '', codigo_escola: '', nome_escola: '', codigo_matricula: '', codigo_docente: '', codigo_turma: '' },
				success: function(data){
					$('#teste').html(data);
				}
			});	
		}else{
			alert("<h2><b>Por Favor preencha os dados nos campos de pesquisa</b></h2>");
		}		
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
		<img src="img/eagle/eagle-logo.png" class="img-responsive" alt="Imagem não encontrada!">
	</div>

	<div id="pesquisar_destino" class="col-md-4">
		<input id="nome_destino" type="text" class="form-control" placeholder="Digite o seu destino..." autocomplete="on">
			<span class="input-group-btn">
				<button id="btn_escola_nome" type="submit" class="btn btn-default btnSearch btn_carrega_conteudo">
					<span class="glyphicon glyphicon-search"> </span>
				</button>
			</span>
	</div>

	<div id="usuario" class="col-md-2" >
		<span style="display: inline-block;">Usuário:</span>
		<input id="user_name" class="form-control" type="text" name="user_name" placeholder="Digite seu usuário..." required="true">
	</div>

	<div id="senha" class="col-md-2">
		<span style="display: inline-block;">Senha:</span>
		<input id="password" class="form-control" type="password" name="password" placeholder="Digite sua senha..." required="true">
	</div>

	<div id="botao_login" class="col-md-1">
		<button class="btn btn-default" value="botao_login" nome="botao_login">Login</button>
	</div>

	<div id="botao_cadastrar" class="col-md-1">
		<p>Ainda não é cadastrado? Cadastre-se agora!</p>
		<button class="btn btn-default" value="botao_cadastrar" nome="botao_cadastrar">Cadastrar</button>
	</div>

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


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	

</body>
</html>


