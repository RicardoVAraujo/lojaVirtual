<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Curso Loja Virtual</title>
        <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo site_url(); ?>/vendor/twitter/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo site_url() ?>/public/css/styles.css">

    </head>
    <body>
        <div id="container">
        <div id="menu"><?php echo $menu; ?></div>
        <div id="conteudo"><?php require $pagina.'.php'; ?></div>
        </div>
    </body>
</html>