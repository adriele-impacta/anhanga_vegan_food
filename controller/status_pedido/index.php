<?php
require_once CLASSES_DIR . 'StatusPedido.class.php';

$produtos = new StatusPedido();
$lista_status_pedido = array();
$produtos->selecionaCampos($produtos);
while ($res = $produtos->retornaDados()) {
    //if ($res->dt_delete == '0000-00-00 00:00:00') 
    {    
     array_push($lista_status_pedido, get_object_vars($res)); //stdObject para array
    }
}
$smarty->assign("lista_status_pedido", $lista_status_pedido);