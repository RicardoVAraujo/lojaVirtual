<?php

$app->get('/detalhes/:slug', function($slug) use($app){

	$menu = new \app\models\menu();
	$menuLateral = $menu->exibirMenuLateral();

	$produto = \app\models\produto::where('tb_produtos_slug',$slug);

	$dados = array(
		'menu' => $menuLateral,
		'produto' => $produto,
		'pagina' => 'detalhes'
	);

	 $app->render('layout.php', $dados);

});