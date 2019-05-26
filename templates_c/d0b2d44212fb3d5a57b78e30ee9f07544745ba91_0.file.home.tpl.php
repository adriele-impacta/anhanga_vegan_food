<?php
/* Smarty version 3.1.33, created on 2019-05-26 23:12:56
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceb0158bf1f41_13624443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b2d44212fb3d5a57b78e30ee9f07544745ba91' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\home.tpl',
      1 => 1558905152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceb0158bf1f41_13624443 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br" class="fullscreen-bg">

<head>
    <title>Anhangá Vegan Food</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/font-awesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/main.css">

    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>

    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/icons/logo-cachorro.png">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div>
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/logo.gif" alt="Anhangá Logo"
                                        height="100">
                                </div>
                                <p class="lead">Bem vindo!</p>
                            </div>

                            <form class="form-auth-small" method="POST" id="frmSave" action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=home">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Usuário</label>
                                    <input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Senha</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                                    <div class="invalid-feedback"><?php if (isset($_smarty_tpl->tpl_vars['feedback']->value)) {
echo $_smarty_tpl->tpl_vars['feedback']->value;
}?></div>
                                </div>
                                                                <button type="submit" class="btn btn-orange btn-lg btn-block">Entrar</button>
                                                                <input type="hidden" value="enviado" name="enviado">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/valida_form.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
