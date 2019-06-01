<?php
require_once LOC . 'lib/smarty/Smarty.class.php';
 
$smarty = new Smarty;
$smarty->template_dir = TEMPLATE_DIR;
$smarty->config_dir = LOC . "configs/";
$smarty->force_compile = false;
$smarty->debugging = false;
//$smarty->configLoad('general.conf');
$smarty->assign("URL", URL);
$smarty->assign("LOC", LOC);
$smarty->assign("LIB_DIR", LIB_DIR);
$smarty->assign("IMG_DIR", IMG_DIR);
if(isset($nome_usuario)){
    $smarty->assign("nome_usuario", $nome_usuario);
}
$smarty->assign("ano", date('Y'));
class Telas extends Smarty
{
    public function home()
    {
        global $smarty;
        $smarty->display("home.tpl");
    }

    // Menu Produtos
    public function produtos($acao = null)
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Produtos");
        $smarty->assign("menu_ativo", "produtos");

        if($acao !== "cardapio"){
        if (isset($acao)) {
            $smarty->assign("upload_arquivo", "true");
            $smarty->assign("conteudo_pagina", "produtos_form.tpl");
        } else {
            $smarty->assign("conteudo_pagina", "produtos_lista.tpl");
        }
        $smarty->display("base.tpl");
        }
    }
    public function categorias($acao = null)
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Categorias");
        $smarty->assign("menu_ativo", "produtos");

        if (isset($acao)) {
            $smarty->assign("upload_arquivo", "true");
            $smarty->assign("conteudo_pagina", "categorias_form.tpl");
        } else {
            $smarty->assign("conteudo_pagina", "categorias.tpl");
        }
        $smarty->display("base.tpl");
    }

    // Menu Pedidos
    public function pedidos($acao = null)
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Pedidos");
        $smarty->assign("menu_ativo", "pedidos");

        if($acao !== "muda_status"){
            $smarty->assign("conteudo_pagina", "pedidos.tpl");
            $smarty->display("base.tpl");
        }
    }
    public function historico()
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Histórico de pedidos");
        $smarty->assign("menu_ativo", "pedidos");

        $smarty->assign("conteudo_pagina", "historico.tpl");
        $smarty->display("base.tpl");
        
    }

    public function tipo_pagamento($acao = null)
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Tipo de Pagamento");
        $smarty->assign("menu_ativo", "pedidos");

        if (isset($acao)) {
            $smarty->assign("conteudo_pagina", "tipo_pagamento_form.tpl");
        } else {
            $smarty->assign("conteudo_pagina", "tipo_pagamento_lista.tpl");
        }
        $smarty->display("base.tpl");
    }

    public function status_pedido($acao = null)
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Status Pedido");
        $smarty->assign("menu_ativo", "pedidos");

        if (isset($acao)) {
            $smarty->assign("conteudo_pagina", "status_pedido_form.tpl");
        } else {
            $smarty->assign("conteudo_pagina", "status_pedido_lista.tpl");
        }
        $smarty->display("base.tpl");
    }

    // Menu Eventos
    public function eventos($acao = null)
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Eventos");
        $smarty->assign("menu_ativo", "eventos");

        if (isset($acao)) {
            $smarty->assign("conteudo_pagina", "eventos_form.tpl");
        } else {
            $smarty->assign("conteudo_pagina", "eventos.tpl");
        }
        $smarty->display("base.tpl");
    }

    public function relatorio()
    {
        global $smarty;
        $smarty->assign("chartits", "true");
        $smarty->assign("nome_pagina", "Relatórios");
        $smarty->assign("menu_ativo", "relatorio");
        $smarty->assign("conteudo_pagina", "relatorio.tpl");
        
        $smarty->display("base.tpl");
        
    }

    // Menu Usuários
    public function usr_app($acao = null)
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Usuários do Aplicativo");
        $smarty->assign("menu_ativo", "usuarios");

        if (isset($acao)) {
            $smarty->assign("conteudo_pagina", "usr_app_form.tpl");
        } else {
            $smarty->assign("conteudo_pagina", "usr_app_lista.tpl");
        }
        $smarty->display("base.tpl");
    }
    public function usr_adm($acao = null)
    {
        global $smarty;
        $smarty->assign("nome_pagina", "Usuários Administrativos");
        $smarty->assign("menu_ativo", "usuarios");

        if (isset($acao)) {
            $smarty->assign("conteudo_pagina", "usr_adm_form.tpl");
        } else {
            $smarty->assign("conteudo_pagina", "usr_adm_lista.tpl");
        }
        $smarty->display("base.tpl");
    }
}