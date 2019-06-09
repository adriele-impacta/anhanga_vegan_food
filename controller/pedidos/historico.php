<?php
require_once CLASSES_DIR . 'PedidosView.class.php';
require_once CLASSES_DIR . 'ListaPedidoView.class.php';

$lista_todos = new PedidosView();
$lista_produtos = $lista_todos->lista_todos();
$smarty->assign("lista_produtos", $lista_produtos);