<?php
require_once CLASSES_DIR . 'TipoProduto.class.php';

$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "incluir");
$smarty->assign("acao_pagina", "Cadastro categoria");

$categoria = new TipoProduto();
if (isset($send)) {
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
                    $produtos->setValor('imagem', $new_name);

                } else {
                    echo "Erro upload de imagem";
                }
            } else {
                print_r($errors);
            }
        } else {
            $produtos->delCampo('imagem');
        }

        $categoria->delCampo('id');
        $categoria->setValor('nome_categoria', $nome_categoria);
        $categoria->setValor('imagem', $new_name);
       
        $categoria->setValor('dt_criacao', date('Y-m-d H:i:s'));
        $categoria->setValor('criado_por', $login_usuario);
        $categoria->inserir($categoria);

        $categoria->addCampo('id');
        $categoria->extrasSelect = 'ORDER BY id DESC LIMIT 1;';
        $categoria->selecionaCampos($categoria);
        $ultimo_id = $categoria->retornaDados();
        $id = $ultimo_id->id;

        if ($categoria->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Inserido com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao inserir');
        }
    }
}