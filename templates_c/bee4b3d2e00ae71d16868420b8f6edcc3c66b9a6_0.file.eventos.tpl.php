<?php
/* Smarty version 3.1.33, created on 2019-06-22 04:45:26
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\eventos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0d9646dd1845_90699841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee4b3d2e00ae71d16868420b8f6edcc3c66b9a6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\eventos.tpl',
      1 => 1561171494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0d9646dd1845_90699841 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
    <div class="panel-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
pedidos">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
eventos/incluir" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>

        <table id="table-<?php echo $_smarty_tpl->tpl_vars['menu_ativo']->value;?>
" class="table table-striped table-sm clean-table">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th class="no-sort s20">Nome</th>
                    <th>Link</th>
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_eventos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                <tr id="tr<?php echo $_smarty_tpl->tpl_vars['lista_eventos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_eventos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_eventos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nome_evento'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['lista_eventos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['link_evento'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lista_eventos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['link_evento'];?>
</a></td>
                    <td>
                            <a class="text-primary" id="editar"
                                href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=eventos&acao=alterar&id=<?php echo $_smarty_tpl->tpl_vars['lista_eventos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
">
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="text-danger"
                                href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=eventos&acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['lista_eventos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
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
