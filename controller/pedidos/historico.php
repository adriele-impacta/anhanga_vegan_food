<?php
require_once CLASSES_DIR . 'PedidosView.class.php';
require_once CLASSES_DIR . 'ListaPedidoView.class.php';

$lista_todos = new PedidosView();
$lista_produtos = $lista_todos->lista_todos();
$smarty->assign("lista_produtos", $lista_produtos);



$lista_todos_produtos = new ListaPedidoView();
$lista_todos_produtos = $lista_todos_produtos->lista_todos();
$smarty->assign("lista_pedido", $lista_todos_produtos);