<?php
/* Smarty version 3.1.33, created on 2019-05-12 17:03:21
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\usr_adm_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd835b9b8ead6_76939236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955bc8ac055eba4c7e60d799c5efeda53b3cf7b9' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\usr_adm_form.tpl',
      1 => 1557673397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd835b9b8ead6_76939236 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['msg_retorno']->value)) {?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['class_retorno']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_retorno']->value;?>
</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=usr_adm<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
}?>" class="btn btn-primary">OK</a>
</div>
<?php } else {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/jquery.mask/jquery.mask.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/jquery.validation/jquery.validation.js"><?php echo '</script'; ?>
>
<div class="panel">
  <div class="panel-body">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=pedidos">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=usr_adm"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</li>
      </ol>
    </nav>
    <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</h3>

    <div class="col-lg-6 col-md-8 col-sm-10">
      <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave"
        action="index.php?pagina=usr_adm<?php if (isset($_smarty_tpl->tpl_vars['acao']->value)) {?>&acao=<?php echo $_smarty_tpl->tpl_vars['acao']->value;
}?>&send=1<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
}?>">

        <div class="form-group">
          <label for="exampleInputEmail1">Nome Completo</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['nome_completo']->value)) {
echo $_smarty_tpl->tpl_vars['nome_completo']->value;
}?>" class="form-control"
            id="nome_completo" name="nome_completo" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">CPF</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['cpf']->value)) {
echo $_smarty_tpl->tpl_vars['cpf']->value;
}?>" class="form-control cpf" placeholder="xxx.xxx.xxx-xx"
            id="cpf" name="cpf" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Data de nascimento</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['dt_nascimento']->value)) {
echo $_smarty_tpl->tpl_vars['dt_nascimento']->value;
}?>" placeholder="__/__/____"
            class="form-control date" id="dt_nascimento" name="dt_nascimento" required>
        </div>

        <hr>

        <div class="form-group">
          <label for="exampleInputEmail1">Login</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['login']->value)) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?>" class="form-control" id="login" name="login"
            required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Senha</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['senha']->value)) {
echo $_smarty_tpl->tpl_vars['senha']->value;
}?>" class="form-control" id="senha" name="senha"
            required>
        </div>
        <div class="form-group">
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=usr_adm" class="btn btn-primary">Voltar</a>
          <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
        </div>
      </form>

      <?php echo '<script'; ?>
>
        $(document).ready(function () {
          jQuery.validator.addMethod("verificaCPF", function (value, element) {
            value = value.replace('.', '');
            value = value.replace('.', '');
            cpf = value.replace('-', '');
            while (cpf.length < 11) cpf = "0" + cpf;
            var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
            var a = [];
            var b = new Number;
            var c = 11;
            for (i = 0; i < 11; i++) {
              a[i] = cpf.charAt(i);
              if (i < 9) b += (a[i] * --c);
            }
            if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11 - x }
            b = 0;
            c = 11;
            for (y = 0; y < 10; y++) b += (a[y] * c--);
            if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11 - x; }
            if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) return false;
            return true;
          }, "Informe um CPF válido.");


          var validator = $("#frmSave").validate({
            rules:
            {
              cpf: { verificaCPF: true }
            }
          });
          validator.element("#cpf");







          $('.date').mask('00/00/0000');
          $('.cpf').mask('000.000.000-00', { reverse: true });
        });
      <?php echo '</script'; ?>
>
    </div>
  </div>
</div>
<?php }
}
}
