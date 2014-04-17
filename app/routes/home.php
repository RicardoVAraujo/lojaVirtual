<?php

$app->get('/', function() use($app) {

	$menu = new \app\models\menu();
	$menuLateral = $menu->exibirMenuLateral();

	$produtos = \app\models\produto::where('tb_produtos_destaque', 'sim', 'all');

    $dados = array(
        'pagina' => 'home',
        'produtos' => $produtos,
        'menu' => $menuLateral
    );
    $app->render('layout.php', $dados);
});

