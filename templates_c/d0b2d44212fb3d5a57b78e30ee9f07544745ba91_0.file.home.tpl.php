<?php
/* Smarty version 3.1.33, created on 2019-04-29 00:49:11
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc62de7b50db3_87118202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b2d44212fb3d5a57b78e30ee9f07544745ba91' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\home.tpl',
      1 => 1556491749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc62de7b50db3_87118202 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br" class="fullscreen-bg">

<head>
    <title>Anhangá Vegan Food</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/font-awesome/css/font-awesome.min.css">-->
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/main.css">
    <!-- GOOGLE FONTS 
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">-->
    <!-- ICONS -->
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
img/logo.gif" alt="Anhangá Logo" height="100">
                                </div>
                                <p class="lead">Bem vindo!</p>
                            </div>

                            <form class="form-auth-small" method="POST" id="frmLogin" action="index.php?pagina=home&send=1">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Usuário</label>
                                    <input type="text" class="form-control" name="usuario" placeholder="Usuário"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Senha</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Senha"
                                        required>
                                </div>
                                                                <button type="submit" class="btn btn-orange btn-lg btn-block">Entrar</button>
                                                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->



</body>

</html><?php }
}