<?php
require_once './configs/config.php';

$pagina = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_STRING);
$acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_STRING);

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

    //funcoes
    case 'mudar_lingua':
        require_once CONTROLLER_DIR . "$acao.php";
        exit;
        break;
}