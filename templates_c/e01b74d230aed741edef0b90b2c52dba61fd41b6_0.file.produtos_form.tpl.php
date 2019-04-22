<?php
/* Smarty version 3.1.33, created on 2019-04-21 02:26:56
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\produtos_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbbb8d0a19c46_21335243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e01b74d230aed741edef0b90b2c52dba61fd41b6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\produtos_form.tpl',
      1 => 1555806412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbbb8d0a19c46_21335243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\anhanga_vegan_food\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


<main role="main" class="col-md-10 ml-sm-auto mr-sm-auto col-lg-10 px-4">
<?php if (isset($_smarty_tpl->tpl_vars['msg_retorno']->value)) {?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['class_retorno']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_retorno']->value;?>
</div>

<div class="form-group col-lg-6 col-md-8 col-sm-10">
    <a href="index.php?pagina=produtos<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
}?>" class="btn btn-primary">OK</a>
  </div>
<?php } else { ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=home">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=produtos"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3"><?php echo $_smarty_tpl->tpl_vars['acao_pagina']->value;?>
</h1>
</div>

<form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave" action="index.php?pagina=produtos<?php if (isset($_smarty_tpl->tpl_vars['acao']->value)) {?>&acao=<?php echo $_smarty_tpl->tpl_vars['acao']->value;
}?>&send=1<?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id_atualiza']->value;
}?>">
  <div class="form-group col-lg-6 col-md-8 col-sm-10">
    <label for="exampleInputEmail1">Nome</label>
      <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['nome_produto']->value)) {
echo $_smarty_tpl->tpl_vars['nome_produto']->value;
}?>" placeholder="Ex: Feijoada" class="form-control" id="nome_produto" name="nome_produto" required>
      <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>

  <div class="form-group col-lg-6 col-md-8 col-sm-10">
    <label for="exampleInputPassword1">Preço</label>
    <div class="col-8 input-group mb-2 mr-sm-2 row">
        <div class="input-group-prepend">
          <div class="input-group-text">R$</div>
        </div>
        <input value="<?php if (isset($_smarty_tpl->tpl_vars['valor']->value)) {
echo $_smarty_tpl->tpl_vars['valor']->value;
}?>" type="number" min="0.00" max="10000.00" step="0.01" id="valor" class="form-control" name="valor" required>
      </div>
  </div>

  <div class="form-group col-lg-6 col-md-8 col-sm-10">
  <label for="exampleInputPassword1">Tipo de produto</label>

    <select name="id_categoria" id="id_categoria" class="form-control" required>
        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['tipos_values']->value,'selected'=>$_smarty_tpl->tpl_vars['tipo_selected']->value,'output'=>$_smarty_tpl->tpl_vars['tipos_output']->value),$_smarty_tpl);?>

    </select>

    </div>


    <div class="form-group col-lg-6 col-md-8 col-sm-10">
            <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Adicionar arquivo...</span>
            <!-- The file input field used as target for the file upload widget -->
            <input id="fileupload" type="file" name="files">
        </span>
        <br>
        <br>
        <!-- The global progress bar
        <div id="progress" class="progress">
            <div class="progress-bar progress-bar-success"></div>
        </div> -->
        <!-- The container for the uploaded files-->
        <div id="files" class="files">
        <?php if (isset($_smarty_tpl->tpl_vars['imagem']->value)) {?>
        <img id="img_e" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;
echo $_smarty_tpl->tpl_vars['imagem']->value;?>
" width="450" />
        <?php }?>
        </div> 
        </div>


  <div class="form-group col-lg-6 col-md-8 col-sm-10">
    <label for="exampleInputPassword1">Descrição</label>
        <textarea name="descricao_produto" id="descricao_produto" class="form-control"><?php if (isset($_smarty_tpl->tpl_vars['descricao_produto']->value)) {
echo $_smarty_tpl->tpl_vars['descricao_produto']->value;
}?></textarea>
  </div>
  <div class="form-group col-lg-6 col-md-8 col-sm-10">
   
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=produtos" class="btn btn-primary">Voltar</a>
    <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
  </div>
</form>
</main>
<?php }
}
}
