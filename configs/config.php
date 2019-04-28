<?php
session_start();

$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';

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
else{
    echo "nao tem sessao";
}