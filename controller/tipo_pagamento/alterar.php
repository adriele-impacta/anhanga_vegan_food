<?php
require_once CLASSES_DIR . 'TipoPagamento.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "alterar");
$smarty->assign("acao_pagina", "Alterar pagamento");
$smarty->assign("id_atualiza", $id);

$pagamento = new TipoPagamento();

$pagamento->extrasSelect = 'WHERE id = ' . $id;
$pagamento->selecionaCampos($pagamento);
$dado = $pagamento->retornaDados();

$smarty->assign("tipo_pagamento", $dado->tipo_pagamento);
if (isset($_GET['send'])) {
    if (count($_POST) > 0) {
        $tipo_pagamento = filter_input(INPUT_POST, 'tipo_pagamento', FILTER_SANITIZE_SPECIAL_CHARS);
     
        $pagamento->delCampo('id');      
        $pagamento->delCampo('dt_criacao');
        $pagamento->delCampo('criado_por');

        $pagamento->setValor('tipo_pagamento', $tipo_pagamento);
       
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