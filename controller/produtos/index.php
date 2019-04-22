<?php
require_once CLASSES_DIR . 'Produtos.class.php';

$produtos = new Produtos();
$lista_produtos = array();
$produtos->selecionaTudo($produtos);
while ($res = $produtos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00') {
        array_push($lista_produtos, get_object_vars($res)); //stdObject para array
    }
}
$smarty->assign("lista_produtos", $lista_produtos);