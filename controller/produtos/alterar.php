<?php
require_once CLASSES_DIR . 'Produtos.class.php';
require_once CLASSES_DIR . 'TipoProduto.class.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "alterar");
$smarty->assign("acao_pagina", "Alterar produto");
$smarty->assign("id_atualiza", $id);

$produtos = new Produtos();

$produtos->extrasSelect = 'WHERE id = ' . $id;
$produtos->selecionaCampos($produtos);
$dado = $produtos->retornaDados();

$smarty->assign("tipo_selected", $dado->id_categoria);
$smarty->assign("nome_produto", $dado->nome_produto);
$smarty->assign("descricao_produto", $dado->descricao_produto);
$smarty->assign("valor", $dado->valor);
$smarty->assign("imagem", $dado->imagem);

$tipos_output = array("Escolha uma categoria");
$tipos_values = array("");

$tipoProduto = new TipoProduto();
$tipoProduto->selecionaTudo();
while ($tipoP = $tipoProduto->retornaDados()) {
    array_push($tipos_output, $tipoP->nome_categoria);
    array_push($tipos_values, $tipoP->id);
}
$smarty->assign("tipos_values", $tipos_values);
$smarty->assign("tipos_output", $tipos_output);

if (isset($_GET['send'])) {

    if (count($_POST) > 0) {

        $id_categoria = filter_input(INPUT_POST, 'id_categoria', FILTER_VALIDATE_INT);
        $nome_produto = filter_input(INPUT_POST, 'nome_produto', FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao_produto = filter_input(INPUT_POST, 'descricao_produto', FILTER_SANITIZE_SPECIAL_CHARS);
        $valor = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_FLOAT);

        if (isset($_FILES['files'])) {

            $errors = array();
            $file_name = $_FILES['files']['name'];
            $file_size = $_FILES['files']['size'];
            $file_tmp = $_FILES['files']['tmp_name'];
            $file_type = $_FILES['files']['type'];
            $file_ext = explode('.', $file_name);

            $extensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext[1], $extensions) === false) {
                $errors[] = "Extensão não permitida.";
            }

            $new_name = md5($file_name . "&$") . '.' . $file_ext[1];
            $new_dir = LOC . 'imagens/' . $new_name;
            if (empty($errors) == true) {
                if (move_uploaded_file($file_tmp, $new_dir)) {
                } else {
                    echo "Erro upload de imagem";
                }
            } else {
                print_r($errors);
            }
        } else {
            $produtos->delCampo('imagem');
        }
        $produtos->delCampo('id');
        $produtos->delCampo('promocao');
        $produtos->delCampo('dt_criacao');
        $produtos->delCampo('criado_por');

        $produtos->setValor('id_categoria', $id_categoria);
        $produtos->setValor('nome_produto', $nome_produto);
        $produtos->setValor('descricao_produto', $descricao_produto);
        $produtos->setValor('valor', $valor);
        $produtos->setValor('imagem', $new_name);
     
        $produtos->valorPk = $id;
        $produtos->atualizar($produtos);

        if ($produtos->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Alterado com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao alterar');
        }
        
    }
}