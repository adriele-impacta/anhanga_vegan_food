<?php
require_once CLASSES_DIR . 'StatusPedido.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "alterar");
$smarty->assign("acao_pagina", "Alterar status");
$smarty->assign("id_atualiza", $id);

$pagamento = new StatusPedido();

$pagamento->extrasSelect = 'WHERE id = ' . $id;
$pagamento->selecionaCampos($pagamento);
$dado = $pagamento->retornaDados();

$smarty->assign("nome_status", $dado->nome_status);
if (isset($_GET['send'])) {
    if (count($_POST) > 0) {
        $nome_status = filter_input(INPUT_POST, 'nome_status', FILTER_SANITIZE_SPECIAL_CHARS);
     
        $pagamento->delCampo('id');      
       // $pagamento->delCampo('dt_criacao');
        //$pagamento->delCampo('criado_por');

        $pagamento->setValor('nome_status', $nome_status);
       
        $pagamento->valorPk = $id;
        $pagamento->atualizar($pagamento);

        if ($pagamento->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Alterado com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao alterar');
        }
        
    }
}