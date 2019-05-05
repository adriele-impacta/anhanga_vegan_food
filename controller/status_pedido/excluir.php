<?php
require_once CLASSES_DIR . 'StatusPedido.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$produtos = new StatusPedido();

$produtos->delCampo('id');
$produtos->delCampo('nome_status');
//$produtos->delCampo('dt_criacao');
//$produtos->delCampo('criado_por');

//$produtos->setValor('dt_delete', date('Y-m-d H:i:s'));
//$produtos->setValor('deletado_por', $login_usuario);
$produtos->valorPk = $id;
$produtos->atualizar($produtos);
if ($produtos->linhasAfetadas != -1) {
    $smarty->assign("class_retorno", 'success');
    $smarty->assign("msg_retorno", 'Deletado com sucesso');
} else {
    $smarty->assign("class_retorno", 'danger');
    $smarty->assign("msg_retorno", 'Erro ao deletar');
}