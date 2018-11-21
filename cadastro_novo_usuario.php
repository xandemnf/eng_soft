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

</head>

<body>
<header class="col-md-12" style="text-align: center;padding: 0px;">
	<h1>Sistema Hoteleiro</h1>
	<p>Engenharia de Software 2º/2018</p>	
		<div class="jumbotron text-center" style="margin-bottom: 10px;border-bottom: 10px solid;">
  			<strong><pre style="margin: 0px 0px 0px 0px;">Alexandre Gonçalves Teixeira - 15/0115571<br />Breno - XX/0000000<br />Thalles - XX/000000</pre></strong>
		</div>
</header> 


<div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3 style="text-align: center">Inscreva-se já.</h3>
	    		<br />
				<form method="post" action="" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>

					<div id="tipo_usuario" class="form-group">
						<span style="width: 100% !important;display: block;font-size: 20px;font-weight: bold;font-size: 20px;margin-bottom: 15px;">Tipo de Usuário:</span>
						<span>Administrador:</span>
							<input type="radio" class="form-control" id="user_adm" name="tipo_usuario" required="requiored"><br>
						<span>Hóspede:</span>
							<input type="radio" class="form-control" id="user_hosp" name="tipo_usuario" required="requiored"><br>
						<span>Proprietário:</span>
							<input type="radio" class="form-control" id="user_prop" name="tipo_usuario" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>


