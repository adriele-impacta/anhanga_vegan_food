<?php
require_once CLASSES_DIR . 'Chat.class.php';

$id_p = filter_input(INPUT_POST, 'id_p', FILTER_SANITIZE_NUMBER_INT);
$getMensagem = filter_input(INPUT_POST, 'getMensagem', FILTER_SANITIZE_STRING);

$hoje = date('Y-m-d H:i:s'); 
$chat = new Chat();
if($getMensagem){
        $chat->setValor('id_pedido', $id_p);
        $chat->setValor('mensagem', $getMensagem);
        $chat->setValor('dt_mensagem', $hoje);
        $chat->setValor('dt_visualizacao', NULL);
        $chat->setValor('usuario', $login_usuario);
        $chat->inserir($chat);
}

$chat->update_view($id_p);
if ($chat->linhasAfetadas > 0) {
    $response['sts'] = 1;
} else {
    $response['sts'] = 0;
}
echo json_encode($response);