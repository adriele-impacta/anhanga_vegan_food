<?php
/* Smarty version 3.1.33, created on 2019-05-26 23:38:51
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\eventos_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceb076b4658d8_66046327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cbe9a5ea7741ec34e82f8bd7c7803cbc0d18444' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\eventos_form.tpl',
      1 => 1558906727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceb076b4658d8_66046327 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['msg_retorno']->value)) {?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['class_retorno']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_retorno']->value;?>
</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=eventos<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
}?>" class="btn btn-primary">OK</a>
</div>
<?php } else { ?>

<div class="panel">
  <div class="panel-body">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=pedidos">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=eventos"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</li>
      </ol>
    </nav>
    <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</h3>

    <div class="col-lg-6 col-md-8 col-sm-10">
      <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave"
        action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=eventos<?php if (isset($_smarty_tpl->tpl_vars['acao']->value)) {?>&acao=<?php echo $_smarty_tpl->tpl_vars['acao']->value;
}?>&send=1<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
}?>">

        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['nome_evento']->value)) {
echo $_smarty_tpl->tpl_vars['nome_evento']->value;
}?>" class="form-control" id="nome_evento"
            name="nome_evento" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Descrição</label>
          <textarea name="descricao_evento" id="descricao_evento" required class="form-control"><?php if (isset($_smarty_tpl->tpl_vars['descricao_evento']->value)) {
echo $_smarty_tpl->tpl_vars['descricao_evento']->value;
}?></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Link</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['link_evento']->value)) {
echo $_smarty_tpl->tpl_vars['link_evento']->value;
}?>" class="form-control" id="link_evento"
            name="link_evento">
        </div>

        <div class="form-group">
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=eventos" class="btn btn-primary">Voltar</a>
          <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php }
}
}
