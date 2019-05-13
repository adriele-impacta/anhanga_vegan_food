<?php
/* Smarty version 3.1.33, created on 2019-05-11 21:15:04
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\usr_app_lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd71f382f8bb9_75015003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d475fe8b941fbebe0e8688aea9dd3e2eec78ba7' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\usr_app_lista.tpl',
      1 => 1557602041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd71f382f8bb9_75015003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\anhanga_vegan_food\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="panel">
    <div class="panel-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'URL_DIR');?>
index.php?pagina=pedidos">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="index.php?pagina=usr_app&acao=incluir" class="btn btn-success btn-sm">
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
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_usr_app']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                <tr id="tr<?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" class="tr_bg <?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {
if ($_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['id_atualiza']->value) {?>= bg-success <?php }
}?>">
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nome_produto'];?>
</td>
                    <td><select name="cardapio" data-cod="<?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" id="produto<?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" class="form-control input-sm cardapio"><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['tipos_values']->value,'selected'=>$_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['dia_semana'],'output'=>$_smarty_tpl->tpl_vars['tipos_output']->value),$_smarty_tpl);?>
</select>
                        <small class="retorno" id="retorno<?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
"></small>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nome_categoria'];?>
</td>
                    <td>
                        <a class="text-primary" id="editar"
                            href="index.php?pagina=usr_app&acao=alterar&id=<?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
">
                            <i class="far fa-edit"></i>
                        </a>
                        <a class="text-danger"
                            href="index.php?pagina=usr_app&acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['lista_usr_app']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
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
