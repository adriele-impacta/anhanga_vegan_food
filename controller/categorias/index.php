<?php
require_once CLASSES_DIR . 'TipoProduto.class.php';

$tipoProdutos = new TipoProduto();

$lista_categorias = array();
$tipoProdutos->selecionaTudo($tipoProdutos);
while ($res = $tipoProdutos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00') {
        array_push($lista_categorias, get_object_vars($res)); //stdObject para array
    }
}
$smarty->assign("lista_categorias", $lista_categorias);