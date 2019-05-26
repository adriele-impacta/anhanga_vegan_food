<?php
require_once CLASSES_DIR . 'Eventos.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$eventos = new Eventos();

$eventos->delCampo('id');
$eventos->delCampo('nome_evento');
$eventos->delCampo('descricao_evento');
$eventos->delCampo('dt_criacao');
$eventos->delCampo('criado_por');

$eventos->setValor('dt_delete', date('Y-m-d H:i:s'));
$eventos->setValor('deletado_por', $login_usuario);
$eventos->valorPk = $id;
$eventos->atualizar($eventos);
if ($eventos->linhasAfetadas != -1) {
    $smarty->assign("class_retorno", 'success');
    $smarty->assign("msg_retorno", 'Deletado com sucesso');
} else {
    $smarty->assign("class_retorno", 'danger');
    $smarty->assign("msg_retorno", 'Erro ao deletar');
}