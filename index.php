<?php
require_once './resources/Base.class.php';
require_once './configs/config.php';
require_once CLASSES_DIR . "Telas.class.php";

$tela = new Telas();
switch ($pagina) {  
    case 'produtos':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->produtos($acao);
        break;

    case 'tipo_pagamento':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->tipo_pagamento($acao);
        break;  
        
    case 'status_pedido':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->status_pedido($acao);
        break; 

    case 'tipo_produto':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->tipo_produto();
        break;

    case 'home':
        require_once CONTROLLER_DIR . "$pagina.php";
        $tela->home();
        break;

    case 'pedidos':
        require_once CONTROLLER_DIR . "$pagina/index.php";
        $tela->pedidos();
        break;
        
    case 'notsession':
    header('Location: ' . URL . 'index.php?pagina=home');
}