<?php
require_once CLASSES_DIR . 'Eventos.class.php';

$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "incluir");
$smarty->assign("acao_pagina", "Cadastro evento");

$eventos = new Eventos();
if (isset($send)) {
    if (count($_POST) > 0) {
      
        $nome_evento = filter_input(INPUT_POST, 'nome_evento', FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao_evento = filter_input(INPUT_POST, 'descricao_evento', FILTER_SANITIZE_SPECIAL_CHARS);
        $link_evento = filter_input(INPUT_POST, 'link_evento', FILTER_SANITIZE_SPECIAL_CHARS);
   
        $eventos->delCampo('id');
        $eventos->setValor('nome_evento', $nome_evento);
        $eventos->setValor('descricao_evento', $descricao_evento);
        $eventos->setValor('link_evento', $link_evento);
       
        $eventos->setValor('dt_criacao', date('Y-m-d H:i:s'));
        $eventos->setValor('criado_por', $login_usuario);
        $eventos->inserir($eventos);

        $eventos->addCampo('id');
        $eventos->extrasSelect = 'ORDER BY id DESC LIMIT 1;';
        $eventos->selecionaCampos($eventos);
        $ultimo_id = $eventos->retornaDados();
        $id = $ultimo_id->id;

        if ($eventos->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Inserido com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao inserir');
        }
    }
}