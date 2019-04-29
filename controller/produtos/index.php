<?php
require_once CLASSES_DIR . 'Produtos.class.php';

$id_atualiza = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (isset($id_atualiza)) {
    $smarty->assign("id_atualiza", $id_atualiza);
}

$produtos = new Produtos();
$lista_produtos = array();
$produtos->selecionaTudo($produtos);
while ($res = $produtos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00') {
     array_push($lista_produtos, get_object_vars($res)); //stdObject para array
    }
}

$smarty->assign("tipos_values", array('', 1, 2, 3, 4, 5));
$smarty->assign("tipos_output", array("Dia da semana", "Segunda", "Terça", "Quarta", "Quinta", "Sexta"));
$smarty->assign("tipo_selected", "");



$smarty->assign("lista_produtos", $lista_produtos);