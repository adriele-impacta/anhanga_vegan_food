<?php
require_once CLASSES_DIR . 'Login.class.php';
require_once CLASSES_DIR . 'Adm.class.php';

$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($_GET['send'])) {
    $login = new Login();
    $login->login($usuario, $senha);
    if ($login->linhasAfetadas == 1) {

        $dados_session = new Adm();
        $dados_session->logado($login->id_adm);

        $_SESSION['id'] = $login->id_adm;
        $_SESSION['login'] = $login->login;
        $_SESSION['nome_logado'] = $dados_session->nome_completo;
        
        header('Location: ' . URL . 'index.php?pagina=pedidos');
    } else {
        $smarty->assign("class_erro", "is-invalid");
    }
}
