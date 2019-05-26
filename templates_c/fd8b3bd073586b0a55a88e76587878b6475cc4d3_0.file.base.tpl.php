<?php
/* Smarty version 3.1.33, created on 2019-05-25 23:22:17
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce9b209026ae1_58933511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd8b3bd073586b0a55a88e76587878b6475cc4d3' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\base.tpl',
      1 => 1558819170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce9b209026ae1_58933511 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Anhangá Vegan Food</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/chartist/css/chartist-custom.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/datatable/css/datatables.css" />

    <?php if (isset($_smarty_tpl->tpl_vars['upload_arquivo']->value)) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/jquery.fileupload.css">
    <?php }?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/main.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">-->
    
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/icons/logo-cachorro.png">
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/klorofil-common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/datatable/js/datatables.js"><?php echo '</script'; ?>
>
</head>


<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=pedidos"><img src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/logo-escrito.png" alt="Anhangá Logo" class="img-responsive logo-in"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="far fa-arrow-alt-circle-left"></i></button>
                </div>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System
                                        space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9
                                        unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly
                                        report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly
                                        meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your
                                        request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['nome_usuario']->value;?>
 <i class="icon-submenu fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>Meu perfil</span></a></li>
                                                                <li><a href="#"><i class="lnr lnr-exit"></i> <span>Sair</span></a></li>
                            </ul>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li>
                            <a href="#menu_pedidos" data-toggle="collapse" class="collapsed <?php if ($_smarty_tpl->tpl_vars['menu_ativo']->value == "pedidos") {?>active<?php }?>"> <i class="fa fa-shopping-cart"></i> <span>Pedidos</span>
                                <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_pedidos" class="collapse">
                                <ul class="nav">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=pedidos">Pedidos</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=historico_pedidos">Histórico de Pedidos</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=tipo_pagamento">Tipo de pagamento</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=status_pedido">Status do pedido</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#menu_produtos" data-toggle="collapse" class="collapsed <?php if ($_smarty_tpl->tpl_vars['menu_ativo']->value == "produtos") {?>active<?php }?>"> <i class="fa fa-box-open"></i> <span>Produtos</span>
                                <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_produtos" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=produtos">Novo produto</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=categorias">Categorias</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="elements.html" class=""><i class="fa fa-calendar"></i><span>Eventos</span></a></li>
                        <li><a href="charts.html" class=""><i class="fa fa-chart-line"></i><span>Relatórios</span></a>
                        </li>

                        <li>
                            <a href="#menu_usuarios" data-toggle="collapse" class="collapsed <?php if ($_smarty_tpl->tpl_vars['menu_ativo']->value == "usuarios") {?>active<?php }?>"><i
                                    class="fa fa-users"></i> <span>Usuários</span> <i
                                    class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_usuarios" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=usr_app">Aplicativo</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=usr_adm">Administrativo</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['conteudo_pagina']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; <?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
 Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->

    <?php if (isset($_smarty_tpl->tpl_vars['upload_arquivo']->value)) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/upload_arquivo.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/app.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/valida_form.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
