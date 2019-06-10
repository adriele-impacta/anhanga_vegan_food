<?php
require_once CLASSES_DIR . 'TipoProduto.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "alterar");
$smarty->assign("acao_pagina", "Alterar categoria");
$smarty->assign("id_atualiza", $id);

$categoria = new TipoProduto();

$categoria->extrasSelect = 'WHERE id = ' . $id;
$categoria->selecionaCampos($categoria);
$dado = $categoria->retornaDados();

$smarty->assign("nome_categoria", $dado->nome_categoria);
$smarty->assign("imagem", $dado->imagem);
if (isset($_GET['send'])) {
    if (count($_POST) > 0) {
        $nome_categoria = filter_input(INPUT_POST, 'nome_categoria', FILTER_SANITIZE_SPECIAL_CHARS);
     

        if ($_FILES['files']['name'] != "") {

            $errors = array();
            $file_name = $_FILES['files']['name'];
            $file_size = $_FILES['files']['size'];
            $file_tmp = $_FILES['files']['tmp_name'];
            $file_type = $_FILES['files']['type'];
            $file_ext = explode('.', $file_name);

            $extensions = array("jpeg", "jpg", "png","svg");
            if (in_array($file_ext[1], $extensions) === false) {
                $errors[] = "Extensão não permitida.";
            }

            $new_name = md5($file_name . "&$") . '.' . $file_ext[1];
            $new_dir = LOC . 'imagens/categorias/' . $new_name;
            if (empty($errors) == true) {
                if (move_uploaded_file($file_tmp, $new_dir)) {
                } else {
                    echo "Erro upload de imagem";
                }
            } else {
                print_r($errors);
            }
        } else {
            $categoria->delCampo('imagem');
        }

        $categoria->delCampo('id');      
        $categoria->delCampo('dt_criacao');
        $categoria->delCampo('criado_por');

        $categoria->setValor('nome_categoria', $nome_categoria);
        $categoria->setValor('imagem', $new_name);
       
        $categoria->valorPk = $id;
        $categoria->atualizar($categoria);

        if ($categoria->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Alterado com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao alterar');
        }
        
    }
}