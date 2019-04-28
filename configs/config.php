<?php
session_start();

$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
$pagina = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_STRING);
$acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_STRING);

define('URL', $protocol . $_SERVER['HTTP_HOST'] . '/anhanga_vegan_food/');
define('LOC', $_SERVER['DOCUMENT_ROOT'].'/anhanga_vegan_food/');

define('TEMPLATE_DIR', LOC . 'templates/');
define('CONTROLLER_DIR', LOC . 'controller/');
define('CLASSES_DIR', LOC . 'resources/');
define('LIB_DIR', URL . 'lib/');
define('IMG_DIR', URL . 'imagens/');

if(isset($_SESSION['id'])){
    $nome_usuario = $_SESSION['nome_logado'];
    $login_usuario = $_SESSION['login'];
}

if(!isset($_SESSION['id']) && $pagina != "home"){
    header('Location: ' . URL . 'index.php?pagina=notsession');
}