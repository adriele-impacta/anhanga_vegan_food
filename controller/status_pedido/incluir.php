<?php
require_once CLASSES_DIR . 'StatusPedido.class.php';

$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "incluir");
$smarty->assign("acao_pagina", "Cadastro status");

$status_pedido = new StatusPedido();
if (isset($send)) {
    if (count($_POST) > 0) {
      
        $nome_status = filter_input(INPUT_POST, 'nome_status', FILTER_SANITIZE_SPECIAL_CHARS);
   
        $status_pedido->delCampo('id');
        $status_pedido->setValor('nome_status', $nome_status);
       
        $status_pedido->setValor('dt_criacao', date('Y-m-d H:i:s'));
        $status_pedido->setValor('criado_por', $login_usuario);
        $status_pedido->inserir($status_pedido);

        $status_pedido->addCampo('id');
        $status_pedido->extrasSelect = 'ORDER BY id DESC LIMIT 1;';
        $status_pedido->selecionaCampos($status_pedido);
        $ultimo_id = $status_pedido->retornaDados();
        $id = $ultimo_id->id;

        if ($status_pedido->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Inserido com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao inserir');
        }
    }
}