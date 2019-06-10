<?php
require_once CLASSES_DIR . 'PedidosView.class.php';
require_once CLASSES_DIR . 'ListaPedidoView.class.php';

$mesPost = filter_input(INPUT_POST, 'mesGrafico', FILTER_SANITIZE_NUMBER_INT);
$anoPost = filter_input(INPUT_POST, 'anoGrafico', FILTER_SANITIZE_NUMBER_INT);

$mes_atual = date("m");
$ano_atual = date('Y');

if(!$mesPost){
    $mesPost = $mes_atual;
}

if(!$anoPost){
    $anoPost = $ano_atual;
}


function num_to_mes($m){
    switch($m){
        case 1:
            $nomeMes = 'Janeiro';
            break;
        case 2:
            $nomeMes = 'Fevereiro';
            break;
        case 3:
            $nomeMes = 'Março';
            break;
        case 4:
            $nomeMes = 'Abril';
            break;
        case 5:
            $nomeMes = 'Maio';
            break;
        case 6:
            $nomeMes = 'Junho';
            break;
        case 7:
            $nomeMes = 'Julho';
            break;
        case 8:
            $nomeMes = 'Agosto';
            break;
        case 9:
            $nomeMes = 'Setembro';
            break;
        case 10:
            $nomeMes = 'Outubro';
            break;
        case 11:
            $nomeMes = 'Novembro';
            break;
        case 12:
            $nomeMes = 'Dezembro';
            break;
    }
    return $nomeMes;
}

$pedidos = new PedidosView();
$pedidos->delCampo('id_pedido');
$pedidos->delCampo('dt_pedido');
$pedidos->delCampo('id_cliente');
$pedidos->delCampo('nome_completo');
$pedidos->delCampo('tipo_pagamento');
$pedidos->delCampo('status_pedido');
$pedidos->delCampo('endereco');
$response = $pedidos->select_meses_anos();

$mes_values = array();
$mes_output = array();

$ano_values = array();
$ano_output = array();
foreach ($response as $p){
    array_push($mes_values, date("m", strtotime($p['dt_entrega'])));
    array_push($mes_output, num_to_mes(date("m", strtotime($p['dt_entrega']))));

    array_push($ano_values, date("Y", strtotime($p['dt_entrega'])));
}

$smarty->assign("mes_values", $mes_values);
$smarty->assign("mes_output", $mes_output);
$smarty->assign("mes_selected", $mes_atual);

$smarty->assign("ano_values", array_unique($ano_values));
$smarty->assign("ano_output", array_unique($ano_values));
$smarty->assign("ano_selected", $ano_atual);

// date("YW", strtotime("2011-01-07"));

$chartPagamento = array();

$rel_pagemento = new PedidosView();
$response_pagamento = $rel_pagemento->relatorio_tipo_pagamento($mesPost, $anoPost);
$smarty->assign("dados_pagamento", $response_pagamento);


$rel_produtos = new ListaPedidoView();
$response_produtos = $rel_produtos->relatorio_produtos($mesPost, $anoPost);
$smarty->assign("dados_produtos", $response_produtos);