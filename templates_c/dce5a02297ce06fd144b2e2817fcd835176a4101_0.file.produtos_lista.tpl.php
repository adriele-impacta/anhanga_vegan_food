<?php
/* Smarty version 3.1.33, created on 2019-05-26 23:42:31
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\produtos_lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceb0847835c70_50249168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce5a02297ce06fd144b2e2817fcd835176a4101' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\produtos_lista.tpl',
      1 => 1558906531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceb0847835c70_50249168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\anhanga_vegan_food\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="panel">
    <div class="panel-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=pedidos">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=produtos&acao=incluir" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>

        <table id="table-<?php echo $_smarty_tpl->tpl_vars['menu_ativo']->value;?>
" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th>Nome</th>
                    <th class="sort_by">Disponibilidade</th>
                    <th>Tipo de produto</th>
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_produtos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                <tr id="tr<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" class="tr_bg <?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {
if ($_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['id_atualiza']->value) {?>= bg-success <?php }
}?>">
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nome_produto'];?>
</td>
                    <td><select name="cardapio" data-cod="<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" id="produto<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" class="form-control input-sm cardapio"><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['tipos_values']->value,'selected'=>$_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['dia_semana'],'output'=>$_smarty_tpl->tpl_vars['tipos_output']->value),$_smarty_tpl);?>
</select>
                        <small class="retorno" id="retorno<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
"></small>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nome_categoria'];?>
</td>
                    <td>
                        <a class="text-primary" id="editar"
                            href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=produtos&acao=alterar&id=<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
">
                            <i class="far fa-edit"></i>
                        </a>
                        <a class="text-danger"
                            href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=produtos&acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php
}
}
?>
            </tbody>
        </table>
    </div>
</div><?php }
}
