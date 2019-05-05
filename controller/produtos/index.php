<?php
require_once CLASSES_DIR . 'ProdutosView.class.php';

$id_atualiza = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (isset($id_atualiza)) {
    $smarty->assign("id_atualiza", $id_atualiza);
}

$produtos = new ProdutosView();
$lista_produtos = array();

$produtos->extrasSelect = 'ORDER BY -dia_semana DESC;';
$produtos->selecionaCampos($produtos);
while ($res = $produtos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00') 
    {    
     array_push($lista_produtos, get_object_vars($res)); //stdObject para array
    }
}

$smarty->assign("tipos_values", array(9, 1, 2, 3, 4, 5));
$smarty->assign("tipos_output", array("Dia da semana", "Segunda", "Terça", "Quarta", "Quinta", "Sexta"));

$smarty->assign("lista_produtos", $lista_produtos);