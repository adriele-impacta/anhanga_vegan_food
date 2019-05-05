<?php
require_once CLASSES_DIR . 'TipoPagamento.class.php';

$produtos = new TipoPagamento();
$lista_tipo_pagamento = array();
$produtos->selecionaCampos($produtos);
while ($res = $produtos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00') 
    {    
     array_push($lista_tipo_pagamento, get_object_vars($res)); //stdObject para array
    }
}
$smarty->assign("lista_tipo_pagamento", $lista_tipo_pagamento);