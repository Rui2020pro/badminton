/*
*/


$('.nav-link').click(function(){
	/* alert('click'); */
	//console.log('click');
	$('.nav-link').removeClass('active');
	$(this).addClass('active');
});

/*
*abrir popup modal para entrar na administração
*/
$('#btn-entrar-admin').click(function(){
	$('#modal-entrar-admin').modal('show')
})

$('#btn-entrar-administracao').click(function(){
	
	var nome = $('#txt-nome-administracao').val();
	var pass = $('#txt-pass-administracao').val();

	$.ajax({
		type: 'POST',
		dataType: 'JSON',
		url: 'ajax/entrarAdministracao.php?i=' + Math.random(),
		data:{ nome: nome, password: pass },
		success: function( data )
		{
			console.log(data);
			if( data == 'ok' )
			{
				console.log( 'administrador ligado' );
				$('#div-entrar-admin').addClass('d-none');
				$('#div-admin-ligado').removeClass('d-none');
			}
		},
		error: function( data )
		{
				console.log( 'erro:' + data);
		},
		complete: function( data )
		{
			$('#modal-entrar-admin').modal('hide');
		}
	})

})
