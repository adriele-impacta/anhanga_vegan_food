<?php
/* Smarty version 3.1.33, created on 2019-04-21 02:47:58
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbbbdbeb455b3_82610306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd8b3bd073586b0a55a88e76587878b6475cc4d3' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\base.tpl',
      1 => 1555807496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbbbdbeb455b3_82610306 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php if (isset($_smarty_tpl->tpl_vars['upload_arquivo']->value)) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/jquery.fileupload.css">
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
                <li class="nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['menu_ativo']->value == "pedidos") {?>active<?php }?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span data-feather="shopping-cart"></span> Pedidos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=pedidos"><span
                                data-feather="shopping-cart"></span> Pedidos</a>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=historico_pedidos"><span
                                data-feather="file-text"></span>Histórico de Pedidos</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
app/Cardapio/"><span data-feather="list"></span>
                        Cardápio</a>
                </li>
                <li class="nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['menu_ativo']->value == "produtos") {?>active<?php }?>"> <a
                    class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span data-feather="shopping-bag"></span> Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=produtos">Novo produto</a>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=tipo_produto">Tipo</a>
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
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
app/UsuarioApp/">Aplicativo</a>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=usuario_adm">Administrativo</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['conteudo_pagina']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>        
        </div>
    </div>


<?php if (isset($_smarty_tpl->tpl_vars['upload_arquivo']->value)) {?>
     <?php echo '<script'; ?>
>
     function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#img_e").remove();
            $('#files + img').remove();
            $('#files').after('<img src="'+e.target.result+'" width="450"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }

  
}
  $("#fileupload").change(function () {
    filePreview(this);
});
<?php echo '</script'; ?>
>
<?php }?>


    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/app.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
