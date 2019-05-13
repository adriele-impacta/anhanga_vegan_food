<?php
/* Smarty version 3.1.33, created on 2019-05-12 16:22:21
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\usr_adm_lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd82c1da27fb9_29596852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '345dc246261433b08a47b2737efc0b796f2bfd7c' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\usr_adm_lista.tpl',
      1 => 1557670936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd82c1da27fb9_29596852 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
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
                <a href="index.php?pagina=usr_adm&acao=incluir" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>

        <table id="table-<?php echo $_smarty_tpl->tpl_vars['menu_ativo']->value;?>
" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th class="no-sort s20" >Nome</th>
                    <th class="sort_by">CPF</th>
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_usr_adm']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                <tr id="tr<?php echo $_smarty_tpl->tpl_vars['lista_usr_adm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
" class="tr_bg <?php if (isset($_smarty_tpl->tpl_vars['id_atualiza']->value)) {
if ($_smarty_tpl->tpl_vars['lista_usr_adm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['id_atualiza']->value) {?>= bg-success <?php }
}?>">
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_usr_adm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_usr_adm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nome_completo'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_usr_adm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['cpf'];?>
</td>
                    <td>
                        <a class="text-primary" id="editar"
                            href="index.php?pagina=usr_adm&acao=alterar&id=<?php echo $_smarty_tpl->tpl_vars['lista_usr_adm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
">
                            <i class="far fa-edit"></i>
                        </a>
                        <a class="text-danger"
                            href="index.php?pagina=usr_adm&acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['lista_usr_adm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
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
