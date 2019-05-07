<?php
require_once CLASSES_DIR . 'StatusPedido.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "alterar");
$smarty->assign("acao_pagina", "Alterar status");
$smarty->assign("id_atualiza", $id);

$status_pedido = new StatusPedido();

$status_pedido->extrasSelect = 'WHERE id = ' . $id;
$status_pedido->selecionaCampos($status_pedido);
$dado = $status_pedido->retornaDados();

$smarty->assign("nome_status", $dado->nome_status);
if (isset($_GET['send'])) {
    if (count($_POST) > 0) {
        $nome_status = filter_input(INPUT_POST, 'nome_status', FILTER_SANITIZE_SPECIAL_CHARS);
     
        $status_pedido->delCampo('id');      
        $status_pedido->delCampo('dt_criacao');
        $status_pedido->delCampo('criado_por');

        $status_pedido->setValor('nome_status', $nome_status);
       
        $status_pedido->valorPk = $id;
        $status_pedido->atualizar($status_pedido);

        if ($status_pedido->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Alterado com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao alterar');
        }
        
    }
}