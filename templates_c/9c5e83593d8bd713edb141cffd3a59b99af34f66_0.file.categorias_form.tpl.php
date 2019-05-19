<?php
/* Smarty version 3.1.33, created on 2019-05-20 01:50:36
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\categorias_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce1ebcc23fea0_65181045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c5e83593d8bd713edb141cffd3a59b99af34f66' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\categorias_form.tpl',
      1 => 1558309830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce1ebcc23fea0_65181045 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['msg_retorno']->value)) {?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['class_retorno']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_retorno']->value;?>
</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=categorias<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
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
index.php?pagina=categorias"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</li>
      </ol>
    </nav>
    <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</h3>

    <div class="col-lg-6 col-md-8 col-sm-10">
      <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave"
        action="index.php?pagina=categorias<?php if (isset($_smarty_tpl->tpl_vars['acao']->value)) {?>&acao=<?php echo $_smarty_tpl->tpl_vars['acao']->value;
}?>&send=1<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
}?>">

        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['nome_categoria']->value)) {
echo $_smarty_tpl->tpl_vars['nome_categoria']->value;
}?>" placeholder="Ex: Lanches"
            class="form-control" id="nome_categoria" name="nome_categoria" required>
        </div>

        <div class="form-group">
          <label for="files">Imagem</label><br>
          <span class="btn btn-success btn-sm fileinput-button">
            <i class="fa fa-plus"></i> Adicionar
            <input class="form-control" id="fileupload" type="file" name="files">
          </span>
          <div id="files" class="files">
            <?php if (isset($_smarty_tpl->tpl_vars['imagem']->value)) {?>
            <img id="img_e" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
categorias/<?php echo $_smarty_tpl->tpl_vars['imagem']->value;?>
" width="250" />
            <?php }?>
          </div>
          <br>
        </div>

        <div class="form-group">
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=categorias" class="btn btn-primary">Voltar</a>
          <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php }
}
}
