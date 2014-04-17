<?php

$app->get('/subcategoria/:slug', function($slug) use($app){

	$menu = new \app\models\menu();
	$menuLateral = $menu->exibirMenuLateral();

	$subcategoria = \app\models\subcategoria::where('tb_subcategorias_slug',$slug);
	$produtos = \app\models\produto::where('tb_produtos_subcategoria',$subcategoria->id, 'all');

	$dados = array(
		'menu' => $menuLateral,
		'produtos' => $produtos,
		'subcategoria' => $subcategoria,
		'pagina' => 'subcategoria'
	);

	 $app->render('layout.php', $dados);
});