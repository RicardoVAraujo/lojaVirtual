<?php
require 'config.php';
require ROOT.'app/routes/home.php';
require ROOT.'app/routes/detalhes.php';
require ROOT.'app/routes/subcategoria.php';
require ROOT.'app/routes/carrinho.php';

$app->run();