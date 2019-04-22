<?php
/* Smarty version 3.1.33, created on 2019-04-19 23:09:02
  from '/opt/lampp/htdocs/smarty/templates/base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cba38ee83a069_48010950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c75990f7c6adbb0dd9303a74d243c0ad020b85' => 
    array (
      0 => '/opt/lampp/htdocs/smarty/templates/base.tpl',
      1 => 1555708134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cba38ee83a069_48010950 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
    <head>      
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="vegano, comida, vegana, anhanga, vegan, food, sp, são paulo">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
<?php if ($_smarty_tpl->tpl_vars['upload_arquivo']->value == "true") {?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/jquery.fileupload.css">
<style type="text/css">

    /* Apply these styles only when #preview-pane has

       been placed within the Jcrop widget */

    .jcrop-holder #preview-pane {

        display: block;

        position: absolute;

        z-index: 2000;

        top: 10px;

        right: -180px;

        padding: 6px;

        border: 1px rgba(0,0,0,.4) solid;

        background-color: white;

        -webkit-border-radius: 6px;

        -moz-border-radius: 6px;

        border-radius: 6px;

        -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);

        -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);

        box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);

    }

    /* The Javascript code will set the aspect ratio of the crop

       area based on the size of the thumbnail preview,

       specified here */

    #preview-pane .preview-container {

        width: 150px;

        height: 150px;

        overflow: hidden;

    }

</style>
<?php }?>

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/dashboard.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/estilo.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/sticky.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/dataTables.bootstrap4.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/navbar.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" />

        <!-- JAVASCRIPT -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/popper.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/bootstrap.js"><?php echo '</script'; ?>
>
       
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/datatables.min.js"><?php echo '</script'; ?>
>


<!--<?php echo '<script'; ?>
 src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
>-->

        <!-- Icons -->
        <?php echo '<script'; ?>
 src="https://unpkg.com/feather-icons/dist/feather.min.js"><?php echo '</script'; ?>
>

        <title>Administrativo Anhangá Vegan Food</title>
    </head>

    <body> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Anhangá Vegan Food</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="shopping-cart"></span> Pedidos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>app/Pedidos/"><span data-feather="shopping-cart"></span> Pedidos</a>
                            <a class="dropdown-item" href="<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>app/HistoricoPedidos/"><span data-feather="file-text"></span>Histórico de Pedidos</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>app/Cardapio/"><span data-feather="list"></span> Cardápio</a>
                    </li>       
                    <li class="nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['menu_ativo']->value == "produtos") {?>active<?php }?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="shopping-bag"></span> Produtos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>app/Produtos/">Novo produto</a>
                            <a class="dropdown-item" href="<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>app/TipoProduto/">Tipo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span data-feather="pie-chart"></span> Relatórios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span data-feather="calendar"></span> Eventos </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="users"></span> Usuários
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>app/UsuarioApp/">Aplicativo</a>
                            <a class="dropdown-item" href="<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>app/UsuarioAdm/">Administrativo</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['conteudo_pagina']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</main>
</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/app.js"><?php echo '</script'; ?>
>
</body>
<!--<footer class="footer mt-auto py-3 h-auto">
  <div class="container">
    <span class="text-muted">&copy; Anhangá Vegan Food <?php echo '<?=';?> date('Y'); <?php echo '?>';?></span>
  </div>
</footer>-->
</html><?php }
}
