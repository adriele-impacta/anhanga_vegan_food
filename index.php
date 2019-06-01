<?php
require_once './resources/Base.class.php';
require_once './configs/config.php';
require_once CLASSES_DIR . 'Telas.class.php';

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

    case 'categorias':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->categorias($acao);
        break; 

    case 'home':
        require_once CONTROLLER_DIR . "$pagina.php";
        $tela->home();
        break;

    case 'pedidos':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->pedidos($acao);
        break;

    case 'historico':
        require_once CONTROLLER_DIR . "pedidos/historico.php";
        $tela->historico();
        break;

    case 'eventos':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->eventos($acao);
        break;  

    case 'relatorio':
        require_once CONTROLLER_DIR . "$pagina/index.php";
        $tela->relatorio();
        break;

    case 'usr_app':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->usr_app($acao);
        break; 
        
    case 'usr_adm':
        if (isset($acao)) {
            require_once CONTROLLER_DIR . "$pagina/$acao.php";
        } else {
            require_once CONTROLLER_DIR . "$pagina/index.php";
        }
        $tela->usr_adm($acao);
        break; 

    case 'logout':
        session_destroy();
        header('Location: ' . URL . 'index.php?pagina=home');
        
    case 'notsession':
        header('Location: ' . URL . 'index.php?pagina=home');
}