<?php
/* Smarty version 3.1.33, created on 2019-04-28 01:47:32
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\produtos_lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc4ea14e066f3_66422413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce5a02297ce06fd144b2e2817fcd835176a4101' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\produtos_lista.tpl',
      1 => 1556408528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc4ea14e066f3_66422413 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
    <div class="panel-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'URL_DIR');?>
index.php?pagina=produtos">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="index.php?pagina=produtos&acao=incluir" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>
        <table id="table-<?php echo $_smarty_tpl->tpl_vars['menu_ativo']->value;?>
" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th>Tipo de produto</th>
                    <th>Nome</th>
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
                <tr <?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {
if ($_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['id_atualiza']->value) {?>class='bg-success' <?php }
}?>>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_categoria'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nome_produto'];?>
</td>
                    <td>
                        <a class="text-primary" id="editar"
                            href="index.php?pagina=produtos&acao=alterar&id=<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
">
                            <i class="far fa-edit"></i>
                        </a>
                        <a class="text-danger"
                            href="index.php?pagina=produtos&acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
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
