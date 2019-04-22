<?php
session_start();

$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';

define('URL', $protocol . $_SERVER['HTTP_HOST'] . '/novo/');
define('LOC', $_SERVER['DOCUMENT_ROOT'].'/novo/');

define('TEMPLATE_DIR', LOC . 'templates/');
define('CONTROLLER_DIR', LOC . 'controller/');
define('CLASSES_DIR', LOC . 'resources/');
define('LIB_DIR', URL . 'lib/');
define('IMG_DIR', URL . 'imagens/');


if(isset($_SESSION['id'])){
 echo "tem sessao";
}
else{
    echo "nao tem sessao";
}