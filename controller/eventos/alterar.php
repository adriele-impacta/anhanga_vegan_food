<?php
require_once CLASSES_DIR . 'Eventos.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "alterar");
$smarty->assign("acao_pagina", "Alterar evento");
$smarty->assign("id_atualiza", $id);

$eventos = new Eventos();

$eventos->extrasSelect = 'WHERE id = ' . $id;
$eventos->selecionaCampos($eventos);
$dado = $eventos->retornaDados();

$smarty->assign("nome_evento", $dado->nome_evento);
$smarty->assign("descricao_evento", $dado->descricao_evento);
$smarty->assign("link_evento", $dado->link_evento);

if (isset($_GET['send'])) {
    if (count($_POST) > 0) {
        $nome_evento = filter_input(INPUT_POST, 'nome_evento', FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao_evento = filter_input(INPUT_POST, 'descricao_evento', FILTER_SANITIZE_SPECIAL_CHARS);
        $link_evento = filter_input(INPUT_POST, 'link_evento', FILTER_SANITIZE_SPECIAL_CHARS);
   
     
        $eventos->delCampo('id');      
        $eventos->delCampo('dt_criacao');
        $eventos->delCampo('criado_por');

        $eventos->setValor('nome_evento', $nome_evento);
        $eventos->setValor('descricao_evento', $descricao_evento);
        $eventos->setValor('link_evento', $link_evento);
       
        $eventos->valorPk = $id;
        $eventos->atualizar($eventos);

        if ($eventos->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Alterado com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao alterar');
        }
        
    }
}