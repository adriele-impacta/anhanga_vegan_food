<?php
require_once CLASSES_DIR . 'Adm.class.php';

$id_atualiza = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (isset($id_atualiza)) {
    $smarty->assign("id_atualiza", $id_atualiza);
}

$lista_usr_adm = array();

$usr_adm = new Adm();
$usr_adm->selecionaTudo($usr_adm);
while ($res = $usr_adm->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00' || $res->dt_delete == '') 
    {    
     array_push($lista_usr_adm, get_object_vars($res)); //stdObject para array
    }
}
$smarty->assign("lista_usr_adm", $lista_usr_adm);