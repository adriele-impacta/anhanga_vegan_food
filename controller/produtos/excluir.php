<?php
require_once CLASSES_DIR . 'Produtos.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$produtos = new Produtos();

$produtos->delCampo('id');
$produtos->delCampo('id_categoria');
$produtos->delCampo('nome_produto');
$produtos->delCampo('descricao_produto');
$produtos->delCampo('valor');
$produtos->delCampo('promocao');
$produtos->delCampo('imagem');
$produtos->delCampo('dt_criacao');
$produtos->delCampo('criado_por');

$produtos->setValor('dt_delete', date('Y-m-d H:i:s'));
$produtos->setValor('deletado_por', '1');
$produtos->valorPk = $id;
$produtos->atualizar($produtos);
if ($produtos->linhasAfetadas != -1) {
    $smarty->assign("class_retorno", 'success');
    $smarty->assign("msg_retorno", 'Deletado com sucesso');
} else {
    $smarty->assign("class_retorno", 'danger');
    $smarty->assign("msg_retorno", 'Erro ao deletar');
}