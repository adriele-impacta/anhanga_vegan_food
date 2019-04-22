<?php
require_once CLASSES_DIR . 'Produtos.class.php';
require_once CLASSES_DIR . 'TipoProduto.class.php';

$send = filter_input(INPUT_GET, 'send', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("acao", "incluir");
$smarty->assign("acao_pagina", "Cadastro de produto");
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
$smarty->assign("tipo_selected", "");

$produtos = new Produtos();
if (isset($send)) {
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

        $produtos->delCampo('promocao');
        $produtos->delCampo('id');

        $produtos->setValor('id_categoria', $id_categoria);
        $produtos->setValor('nome_produto', $nome_produto);
        $produtos->setValor('descricao_produto', $descricao_produto);
        $produtos->setValor('valor', $valor);
        $produtos->setValor('imagem', $new_name);
        $produtos->setValor('dt_criacao', date('Y-m-d H:i:s'));
        $produtos->setValor('criado_por', '1');
        $produtos->inserir($produtos);

        $produtos->addCampo('id');
        $produtos->extrasSelect = 'ORDER BY id DESC LIMIT 1;';
        $produtos->selecionaCampos($produtos);
        $ultimo_id = $produtos->retornaDados();
        $id = $ultimo_id->id;

        $smarty->assign("id_atualiza", $id);

        if ($produtos->linhasAfetadas != -1) {
            $smarty->assign("class_retorno", 'success');
            $smarty->assign("msg_retorno", 'Inserido com sucesso');
        } else {
            $smarty->assign("class_retorno", 'danger');
            $smarty->assign("msg_retorno", 'Erro ao inserir');
        }
    }
}