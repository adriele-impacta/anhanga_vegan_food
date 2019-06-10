<?php
require_once CLASSES_DIR . 'PedidosView.class.php';
require_once CLASSES_DIR . 'ListaPedidoView.class.php';

$mesPost = filter_input(INPUT_POST, 'mesGrafico', FILTER_SANITIZE_NUMBER_INT);
$anoPost = filter_input(INPUT_POST, 'anoGrafico', FILTER_SANITIZE_NUMBER_INT);


$rel_pagemento = new PedidosView();
$response_pagamento = $rel_pagemento->relatorio_tipo_pagamento($mesPost, $anoPost);
$smarty->assign("dados_pagamento", $response_pagamento);


$rel_produtos = new ListaPedidoView();
$response_produtos = $rel_produtos->relatorio_produtos($mesPost, $anoPost);
$smarty->assign("dados_produtos", $response_produtos);