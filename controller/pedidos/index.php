<?php
require_once CLASSES_DIR . 'Pedidos.class.php';
require_once CLASSES_DIR . 'StatusPedido.class.php';

define('HOJE', date('Y-m-d'));
$lista_dias_pedido = array();


$dias_pedido = new Pedidos();
$dias_pedido->extrasSelect = 'GROUP BY DATE(dt_entrega);';
$dias_pedido->selecionaCampos($dias_pedido);

while ($res = $dias_pedido->retornaDados()) {
        array_push($lista_dias_pedido, get_object_vars($res)); //stdObject para array
}

$lista_pedidos = array();
$pedidos = new Pedidos();
$pedidos->selecionaTudo($pedidos);

$total_pedidos_hoje = 0;

while ($res = $pedidos->retornaDados()) {
        $total_pedidos_hoje++;
        array_push($lista_pedidos, get_object_vars($res)); //stdObject para array
}


$lista_status_pedidos = array();
$status_pedidos = new StatusPedido();
$status_pedidos->selecionaTudo($status_pedidos);
while ($res = $status_pedidos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00' || $res->dt_delete == '') 
    { 
    array_push($lista_status_pedidos, get_object_vars($res)); //stdObject para array
    }
}

$smarty->assign('dt_hoje', HOJE);
$smarty->assign('dt_amanha', strtotime('+1 day'));

$smarty->assign('lista_status_pedidos', $lista_status_pedidos);
$smarty->assign('lista_dias_pedido', $lista_dias_pedido);
$smarty->assign('lista_pedidos', $lista_pedidos);

$smarty->assign('total_pedidos_hoje', $total_pedidos_hoje);

// echo "<pre>";
// print_r($lista_dias);
// echo "</pre>";