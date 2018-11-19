<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">

<title>Sistema Hoteleiro</title>

<link rel="stylesheet" type="text/css" href="css/folha_de_estilo.css">


<link rel="icon" href="img/images.png">

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

<!--AREA RESPONSTAVEL PELA ROW (LOGO, SEARCH, LOGIN, SIGN-->
<div id="area1" class="col-md-12">

	<div id="logo" class="col-md-2">
		<img src="img/eagle-logo.png" class="img-responsive">
	</div>

	<div id="pesquisar_destino" class="col-md-5">
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

	<div id="botao_cadastrar" class="col-md-1">
		<button class="btn btn-default" value="botao_cadastrar" nome="botao_cadastrar" >Cadastrar</button>
	</div>



</div>


<div class="container col-md-7" style="display: none;">
	<div>
		<h2 class="text-center"><b>Pesquisas</b></h2>
		<!--Criação das tabs-->
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#escola" data-toggle="tab">Escola</a></li>
			<li><a href="#aluno" data-toggle="tab" role="tab">Aluno</a></li>
			<li><a href="#docente" data-toggle="tab" role="tab">Docente</a></li>
			<li><a href="#turma" data-toggle="tab" role="tab">Turma</a></li>
			<li><a href="#view" data-toggle="tab" role="tab">Mais Velho</a></li>
			<li><a href="#trigger" data-toggle="tab" role="tab">Update N.Escola</a></li>
			<li><a href="#procedure" data-toggle="tab" role="tab">Escolas Urb/Rur.</a></li>
		</ul>

		<!--Criação das tabs (container de conteúdos)-->
		<div class="tab-content">
					
			<!--Escola-->
			<div class="tab-pane active" role="tabpanel" id="escola">
				<div id="pesquisa_escola" class="row">
					<!--<form method="post" action="consulta_sql.php">-->
						<div class="container col-md-6">
							<h4>Pesquisar por nome da Escola:</h4>
							<div class="input-group">
								<input id="nome_escola" type="text" class="form-control" placeholder="Procurar por nome..." autocomplete="off">
								<span class="input-group-btn">
									<button id="btn_escola_nome" type="submit" class="btn btn-default btnSearch btn_carrega_conteudo">
										<span class="glyphicon glyphicon-search"> </span>
									</button>
								</span>
							</div>
						</div>

						<div class="container col-md-5">
							<h4>Pesquisar por Código da Escola:</h4>
							<div class="input-group ">
								<input id="codigo_escola" name="codigo_escola" type="text" class="form-control" placeholder="Procurar por escola..." autocomplete="off">
									<span class="input-group-btn">
										<button id="btn_escola_codigo" type="button" class="btn btn-default btnSearch btn_carrega_conteudo">
											<span class="glyphicon glyphicon-search"> </span>
										</button>
						 			</span>
							</div>
						</div>
					<!--</form>-->
				</div> <!--FECHA A ROW ESCOLA-->
			</div><!--FECHA A TAB ESCOLA-->

			<!--Aluno-->
			<div class="tab-pane" role="tabpanel" id="aluno">
				<div id="pesquisa_aluno" class="row">
					<form method="post" action="consulta_sql.php">
						<div class="container col-md-5">
							<h4>Pesquisar por Matrícula do Aluno:</h4>
							<div class="input-group">
								<input id="codigo_matricula" name="codigo_matricula" type="text" class="form-control" placeholder="Procurar por matrícula..." autocomplete="off">
								<span class="input-group-btn">
									<button id="btn_aluno_codigo" type="button" class="btn btn-default btnSearch btn_carrega_conteudo">
										<span class="glyphicon glyphicon-search"> </span>
									</button>
				 				</span>
							</div>
						</div>
					</form>
				</div> <!--FECHA A ROW ALUNO-->
			</div> <!--FECHA A TAB ALUNO-->

			<!--Docente-->
			<div class="tab-pane" role="tabpanel" id="docente">
				<div id="pesquisa_docente" class="row">
					<form method="post" action="consulta_sql.php">
						<div class="container col-md-5">
							<h4>Pesquisar por código do Docente:</h4>
							<div class="input-group">
								<input id="codigo_docente" name="codigo_docente" type="text" class="form-control" placeholder="Procurar por docente..." autocomplete="off">
									<span class="input-group-btn">
										<button id="btn_docente_codigo" type="button" class="btn btn-default btnSearch btn_carrega_conteudo">
											<span class="glyphicon glyphicon-search"> </span>
										</button>
						 			</span>
							</div>
						</div>
					</form>	
				</div><!--FECHA A ROW DOCENTE-->
			</div>	<!--FECHA A TAB DOCENTE-->

			<!--Turma-->
			<div class="tab-pane" role="tabpanel" id="turma">
				<div id="pesquisa_turma" class="row">
					<form method="post" action="consulta_sql.php">
						<div class="container col-md-5">
							<h4>Pesquisar por código da Turma:</h4>
							<div class="input-group">
								<input id="codigo_turma" name="codigo_turma" type="text" class="form-control" placeholder="Procurar por turma..." autocomplete="off">
								<span class="input-group-btn">
									<button id="btn_turma_codigo" type="button" class="btn btn-default btnSearch btn_carrega_conteudo">
										<span class="glyphicon glyphicon-search"> </span>
									</button>
				 				</span>
							</div>
						</div>
					</form>
				</div><!--FECHA A ROW TURMA-->
			</div><!--FECHA A TAB TURMA-->
			
			<!--View-->
			<div class="tab-pane" role="tabpanel" id="view">
				<div id="pesquisa_view" class="row">
					<form method="post" action="consulta_sql.php">
						<div class="container col-md-5">
							<h4>Pesquisar por Docentes mais velhos:</h4>
							<div class="input-group">
								<input id="qtd_res" name="qtd_res" type="text" class="form-control" placeholder="nro de Doc's a procurar..." autocomplete="off">
								<span class="input-group-btn">
									<button id="btn_docente_velho" type="button" class="btn btn-default btnSearch btn_carrega_conteudo">
										<span class="glyphicon glyphicon-search"> </span>
									</button>
				 				</span>
							</div>
						</div>
					</form>
				</div> <!--FECHA A ROW View-->
			</div> <!--FECHA A TAB View-->
		
		
			<!--Trigger-->
			<div class="tab-pane" role="tabpanel" id="trigger">
				<div id="pesquisa_trigger" class="row">
					<form method="post" action="consulta_sql.php">
						<div class="container col-md-5">
							<h4>Update no nome de uma escola:</h4>
							<div class="input-group">
								<input id="cod_esc" name="cod_esc" type="text" class="form-control" placeholder="codigo da escola..." autocomplete="off">
								<input id="novo_noesc" name="novo_noesc" type="text" class="form-control" placeholder="novo nome da escola..." autocomplete="off">
								<span class="input-group-btn">
									<button id="btn_trigger" type="button" class="btn btn-danger btn_carrega_conteudo">
										<span class="glyphicon glyphicon-search"> </span>
									</button>
				 				</span>
							</div>
						</div>
					</form>
				</div> <!--FECHA A ROW Trigger-->
			</div> <!--FECHA A TAB Trigger-->
			
			<!--Procedure-->
			<div class="tab-pane" role="tabpanel" id="procedure">
				<div id="pesquisa_procedure" class="row">
					<form method="post" action="consulta_sql.php">
						<div class="container col-md-5">
							<h4>Pesquisar escolas Urbanas ou Rurais:</h4>
							<div class="input-group">
								<input id="loc" name="loc" type="text" class="form-control" placeholder="1- Urbanas, 2- Rurais..." autocomplete="off">
								<span class="input-group-btn">
									<button id="btn_procedure" type="button" class="btn btn-default btnSearch">
										<span class="glyphicon glyphicon-search"> </span>
									</button>
				 				</span>
							</div>
						</div>
					</form>
				</div> <!--FECHA A ROW Procedure-->
			</div> <!--FECHA A TAB Procedure-->
			
		</div>	<!--FECHA O CONTAINER DE CONTEUDO DAS TABS-->

	</div> <!--Tab-content-->

</div> <!--FECHA O CONTAINER DA AREA DAS PESQUISAS-->

<div id="resultados" class="container col-md-5 text-center" style="position: relative;display: none;">
   <h1><strong>Resultados:</strong></h1>
   <div id="teste" class="list-group"><img src="loader.gif" style="display: none; margin-left: auto;margin-right: auto;height: 200px;" id="loader"></div>
</div>

<!--***************************************************************************************************************************-->


<div id="ofertas_pag_ini" class="row">

	<span class="col-md-12">Ofertas de Viagens</span>

	<div class="col-md-4">
		<img src="cinqueterre.jpg" class="rounded" alt="Cinque Terre">
	</div>
	
	<div class="col-md-4">
		<img src="cinqueterre.jpg" class="rounded" alt="Cinque Terre">
	</div>
	
	<div class="col-md-4">
		<img src="cinqueterre.jpg" class="rounded" alt="Cinque Terre">
	</div>

</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	

</body>
</html>


