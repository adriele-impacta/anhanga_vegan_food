<?php
require_once CLASSES_DIR . 'Pedidos.class.php';

$status_p = filter_input(INPUT_POST, 'status_p', FILTER_SANITIZE_NUMBER_INT);
$id_pedido = filter_input(INPUT_POST, 'id_pedido', FILTER_SANITIZE_NUMBER_INT);

$error = 0;

$pedido = new Pedidos();
$pedido->selecionaCampos($pedido);
while ($res = $pedido->retornaDados()) {
    if ($res->dt_delete == '0000-00-00 00:00:00' || $res->dt_delete == '') 
    {
//         if($res->dia_semana != '' && $res->dia_semana != 9){
//             $dias++;
//         }

//         if($dia_semana != 9 && $res->dia_semana == $dia_semana){
//             $response['mensagem'] = "Dia da semana já possui um produto.";
//             $response['erro'] = 1;
          
//             $error++;
//             break;
//         }
    }
}


if($error == 0){
     $pedido->delCampo('id');
//     $pedido->delCampo('dt_criacao');
//     $pedido->delCampo('criado_por');
    $pedido->delCampo('dt_delete');
//     $pedido->delCampo('deletado_por');

    $pedido->setValor('id_status_pedido', $status_p);
    $pedido->valorPk = $id_pedido;
    $pedido->atualizar($pedido);

    if ($pedido->linhasAfetadas != -1) {
        $response['mensagem'] = "Sucesso.";
        $response['erro'] = 0;
    } else {
        $response['mensagem'] = "Erro ao salvar cardápio.";
        $response['erro'] = 3;
    }
}
echo json_encode($response);