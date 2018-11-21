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