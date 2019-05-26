<?php
require_once CLASSES_DIR . 'Eventos.class.php';

$produtos = new Eventos();
$lista_eventos = array();
$produtos->selecionaCampos($produtos);
while ($res = $produtos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00' || $res->dt_delete == '') 
    {    
     array_push($lista_eventos, get_object_vars($res)); //stdObject para array
    }
}
$smarty->assign("lista_eventos", $lista_eventos);