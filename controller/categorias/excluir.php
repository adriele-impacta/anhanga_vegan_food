<?php
require_once CLASSES_DIR . 'TipoProduto.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$pagamento = new TipoProduto();

$pagamento->delCampo('id');
$pagamento->delCampo('tipo_pagamento');
$pagamento->delCampo('dt_criacao');
$pagamento->delCampo('criado_por');

$pagamento->setValor('dt_delete', date('Y-m-d H:i:s'));
$pagamento->setValor('deletado_por', $login_usuario);
$pagamento->valorPk = $id;
$pagamento->atualizar($pagamento);
if ($pagamento->linhasAfetadas != -1) {
    $smarty->assign("class_retorno", 'success');
    $smarty->assign("msg_retorno", 'Deletado com sucesso');
} else {
    $smarty->assign("class_retorno", 'danger');
    $smarty->assign("msg_retorno", 'Erro ao deletar');
}