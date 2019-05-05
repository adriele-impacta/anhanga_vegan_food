<?php
require_once CLASSES_DIR . 'StatusPedido.class.php';

$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "incluir");
$smarty->assign("acao_pagina", "Cadastro status");

$pagamento = new StatusPedido();
if (isset($send)) {
    if (count($_POST) > 0) {
      
        $nome_status = filter_input(INPUT_POST, 'nome_status', FILTER_SANITIZE_SPECIAL_CHARS);
   
        $pagamento->delCampo('id');
        $pagamento->setValor('nome_status', $nome_status);
       
        //$pagamento->setValor('dt_criacao', date('Y-m-d H:i:s'));
       // $pagamento->setValor('criado_por', $login_usuario);
        $pagamento->inserir($pagamento);

        $pagamento->addCampo('id');
        $pagamento->extrasSelect = 'ORDER BY id DESC LIMIT 1;';
        $pagamento->selecionaCampos($pagamento);
        $ultimo_id = $pagamento->retornaDados();
        $id = $ultimo_id->id;

        if ($pagamento->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Inserido com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao inserir');
        }
    }
}