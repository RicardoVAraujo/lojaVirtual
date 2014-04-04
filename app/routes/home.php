<?php

$app->get('/', function() use($app) {

    $menus = new \app\models\menu();
    $menu = $menus->exibirMenuLateral();;

    $dados = array(
        'pagina' => 'home',
        'menu' => $menu
    );
    $app->render('layout.php', $dados);
});
