<?php
require_once CLASSES_DIR . 'Produtos.class.php';

$dia_semana = filter_input(INPUT_POST, 'dia_semana', FILTER_SANITIZE_NUMBER_INT);
$id_produto = filter_input(INPUT_POST, 'id_produto', FILTER_SANITIZE_NUMBER_INT);

$smarty->assign("id_produto_cardapio", $id_produto);

$dias = 0;
$error = 0;
$response = array();

$produtos = new Produtos();
$produtos->delCampo('id_categoria');
$produtos->delCampo('nome_produto');
$produtos->delCampo('descricao_produto');
$produtos->delCampo('valor');
$produtos->delCampo('promocao');
$produtos->delCampo('imagem');
$produtos->selecionaCampos($produtos);
while ($res = $produtos->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00' || $res->dt_delete == '') 
    {
        if($res->dia_semana != '' && $res->dia_semana != 9){
            $dias++;
        }

        if($dia_semana != 9 && $res->dia_semana == $dia_semana){
            $response['mensagem'] = "Dia da semana já possui um produto.";
            $response['erro'] = 1;
          
            $error++;
            break;
        }
    }
}


if($error == 0){
    $produtos->delCampo('id');
    $produtos->delCampo('dt_criacao');
    $produtos->delCampo('criado_por');
    $produtos->delCampo('dt_delete');
    $produtos->delCampo('deletado_por');

    $produtos->setValor('dia_semana', $dia_semana);
    $produtos->valorPk = $id_produto;
    $produtos->atualizar($produtos);

    if ($produtos->linhasAfetadas != -1) {
        $response['mensagem'] = "Sucesso.";
        $response['erro'] = 0;
    } else {
        $response['mensagem'] = "Erro ao salvar cardápio.";
        $response['erro'] = 3;
    }
}

echo json_encode($response);