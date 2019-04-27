<?php
require_once CLASSES_DIR . 'TipoProduto.class.php';

$tipoProdutos = new TipoProduto();

$lista_tipos = array();
$tipoProdutos->selecionaTudo($tipoProdutos);
while ($res = $tipoProdutos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00') {
        array_push($lista_tipos, get_object_vars($res)); //stdObject para array
    }
}
$smarty->assign("lista_tipos", $lista_tipos);