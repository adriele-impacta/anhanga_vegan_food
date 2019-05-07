<?php
require_once CLASSES_DIR . 'StatusPedido.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$status_pedido = new StatusPedido();

$status_pedido->delCampo('id');
$status_pedido->delCampo('nome_status');
$status_pedido->delCampo('dt_criacao');
$status_pedido->delCampo('criado_por');

$status_pedido->setValor('dt_delete', date('Y-m-d H:i:s'));
$status_pedido->setValor('deletado_por', $login_usuario);
$status_pedido->valorPk = $id;
$status_pedido->atualizar($status_pedido);
if ($status_pedido->linhasAfetadas != -1) {
    $smarty->assign("class_retorno", 'success');
    $smarty->assign("msg_retorno", 'Deletado com sucesso');
} else {
    $smarty->assign("class_retorno", 'danger');
    $smarty->assign("msg_retorno", 'Erro ao deletar');
}