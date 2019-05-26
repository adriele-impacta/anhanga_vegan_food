<?php
/* Smarty version 3.1.33, created on 2019-05-26 23:07:09
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\tipo_pagamento_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceafffd852260_16572510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e359650793aa22ba2552952f19e23227cb939589' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\tipo_pagamento_form.tpl',
      1 => 1558819170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceafffd852260_16572510 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['msg_retorno']->value)) {?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['class_retorno']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_retorno']->value;?>
</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=tipo_pagamento<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
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
index.php?pagina=tipo_pagamento"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</li>
      </ol>
    </nav>
    <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</h3>

    <div class="col-lg-6 col-md-8 col-sm-10">
      <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave" action="index.php?pagina=tipo_pagamento<?php if (isset($_smarty_tpl->tpl_vars['acao']->value)) {?>&acao=<?php echo $_smarty_tpl->tpl_vars['acao']->value;
}?>&send=1<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
}?>">

        <div class="form-group">
          <label for="exampleInputEmail1">Descrição</label>
          <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['tipo_pagamento']->value)) {
echo $_smarty_tpl->tpl_vars['tipo_pagamento']->value;
}?>" placeholder="Ex: Cartão de Débito" class="form-control" id="tipo_pagamento" name="tipo_pagamento" required>
        </div>

        <div class="form-group">
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=tipo_pagamento" class="btn btn-primary">Voltar</a>
          <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php }
}
}
