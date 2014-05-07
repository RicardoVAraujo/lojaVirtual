$(document).ready(function(){

	var conteudo = $("#conteudo");
	var produtos = conteudo.find('.produtos');
	var btn_comprar = produtos.find(".btn-comprar");
	var table_carrinho = conteudo.find("#table-carrinho");

	btn_comprar.on('click', function(event){
		var idProduto = $(this).attr('data-id');

		$.ajax({
			url: '/carrinho/adicionar/'+idProduto,
			type: 'GET',
			success: function(data){
				console.log(data);
				var adicionado = $(event.currentTarget).next().html('Adicionado ao carrinho');
				setTimeout(function(){
					adicionado.html('');
				},2000);
			}
		});
		event.preventDefault();
	});

	table_carrinho.on('click','.btn-alterar',function(event){
		var idProduto = $(this).attr('data-id');
		var qtde = $(event.currentTarget).closest('tr').find('.input-qtde');
		var qtdeTotal;

		qtdeTotal = (qtde.val() == 0) ? 1 : qtde.val()

		$.ajax({
			url: '/carrinho/alterar/id/'+idProduto+'/qtde/'+qtdeTotal,
			type: 'GET',
			success: function(data){
				if(data =='atualizou'){
					location.reload();
				}
			}
		});
		event.preventDefault();
	});

});