<?php

$app->get('/carrinho/adicionar(/:id)',function($id=null){

	if(isset($id) and $id != null):

		if(!empty($id)):
			try{
				$sessionId= session_id();
				$carrinho = new \app\classes\carrinho($sessionId);
				$carrinho->adicionarCarrinho($id);
			}catch(\ActiveRecord\ActiveRecord\ActiveRecordException $e){
				echo $e->getMessage();
			}
		endif;	
	endif;	
});

$app->get('/carrinho', function() use($app){

	$sessionId = session_id();
	$menu = new \app\models\menu();
	$menuLateral = $menu->exibirMenuLateral();

	$carrinho = new \app\classes\carrinho($sessionId);
	$produtosNoCarrinho = $carrinho->produtosCarrinho();

	$produtosEncontrados = \app\models\carrinho::pegarProdutosCarrinho($produtosNoCarrinho);

    $dados = array(
        'pagina' => 'carrinho',
        'produtos' => $produtosEncontrados,
        'menu' => $menuLateral
    );
    $app->render('layout.php', $dados);
});

$app->get('/carrinho/alterar/id/:id/qtde/:qtde', function($id,$qtde){
	$sessionId = session_id();
	$carrinho = new \app\classes\carrinho($sessionId);
	$carrinho->atualizarCarrinho($id,$qtde);
	echo 'atualizou';
});