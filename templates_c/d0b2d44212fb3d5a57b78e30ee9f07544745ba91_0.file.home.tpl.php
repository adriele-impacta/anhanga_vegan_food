<?php
/* Smarty version 3.1.33, created on 2019-04-22 00:07:03
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbce98750a345_66379349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b2d44212fb3d5a57b78e30ee9f07544745ba91' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\home.tpl',
      1 => 1555884420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbce98750a345_66379349 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-br">

<head>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/signin.css">
    <title>Anhangá Vegan Food - Área administrativa</title>
</head>

<body class="text-center">
    <form class="form-signin" method="POST" id="frmLogin" action="index.php?pagina=home&send=1">
        <img class="mb-2" src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/logo.jpg" alt="Anhangá Vegan Food" height="78">
        <h1 class="h3 mb-3 font-weight-normal">Bem vindo!</h1>

  
        <label for="inputLogin" class="sr-only">Nome de usuário</label>
        <input type="text" name="usuario" id="inputLogin" class="form-control <?php echo $_smarty_tpl->tpl_vars['class_erro']->value;?>
" placeholder="Nome de usuário" required autofocus>
        <label for="inputSenha" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputSenha" class="form-control <?php echo $_smarty_tpl->tpl_vars['class_erro']->value;?>
" placeholder="Senha" required>
        <div class="invalid-feedback text-danger font-weight-bold" id="msg-erro">Usuário e/ou senha errados</div>
                <button class="btn btn-lg btn-primary-orange btn-block" id="buttonLogin" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Anhangá Vegan Food <?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
</p>
    </form>
</body>
</html>
<?php }
}
