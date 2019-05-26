<?php
require_once CLASSES_DIR . 'PedidosView.class.php';
require_once CLASSES_DIR . 'StatusPedido.class.php';
require_once CLASSES_DIR . 'ListaPedidoView.class.php';

define('HOJE', date('Y-m-d'));
$lista_dias_pedido = array();

$total_pedidos_hoje = 0;
$dias_pedido = new PedidosView();
$dias_pedido->extrasSelect = 'WHERE DATE(dt_entrega) >= DATE(NOW()) GROUP BY DATE(dt_entrega);';
$dias_pedido->selecionaCampos($dias_pedido);
while ($res = $dias_pedido->retornaDados()) {
        array_push($lista_dias_pedido, get_object_vars($res)); //stdObject para array
}

$lista_pedidos = array();
$pedidos = new PedidosView();
$pedidos->selecionaTudo($pedidos);
while ($res = $pedidos->retornaDados()) {
        $total_pedidos_hoje++;
        array_push($lista_pedidos, get_object_vars($res)); //stdObject para array
}


$lista_status_pedidos = array();
$status_pedidos = new StatusPedido();
$status_pedidos->selecionaTudo($status_pedidos);
while ($res = $status_pedidos->retornaDados()) {
        if ($res->dt_delete == '0000-00-00 00:00:00' || $res->dt_delete == '') {
                array_push($lista_status_pedidos, get_object_vars($res)); //stdObject para array
        }
}

$total_vendido = 0;
$lista_produtos = array();
$produtos = new ListaPedidoView();
$produtos->selecionaCampos($produtos);
while ($res = $produtos->retornaDados()) {
        array_push($lista_produtos, get_object_vars($res)); //stdObject para array
}


$total_pedido = array();
foreach ($lista_pedidos as $i => $ped) {
        $val = 0;
        foreach ($lista_produtos as $j => $pro) {
                if ($lista_pedidos[$i]['id_pedido'] === $lista_produtos[$j]['id_pedido']) {
                        $total_vendido += $lista_produtos[$j]['valor'];
                        $val =  $val + $lista_produtos[$j]['valor'];
                }
        }
        $total_pedido[$i]['id_pedido'] = $lista_pedidos[$i]['id_pedido'];
        $total_pedido[$i]['valor'] =  $val;
}

$smarty->assign('dt_hoje', HOJE);
$smarty->assign('dt_amanha', strtotime('+1 day'));

$smarty->assign('lista_status_pedidos', $lista_status_pedidos);
$smarty->assign('lista_dias_pedido', $lista_dias_pedido);
$smarty->assign('lista_pedidos', $lista_pedidos);
$smarty->assign('lista_produtos', $lista_produtos);

$smarty->assign('total_pedidos_hoje', $total_pedidos_hoje);
$smarty->assign('total_pedido', $total_pedido);
$smarty->assign('total_vendido', $total_vendido);