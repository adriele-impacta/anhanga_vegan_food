<?php
/* Smarty version 3.1.33, created on 2019-04-22 02:02:00
  from 'F:\xampp\htdocs\novo\templates\tipo_produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbd0478180748_40925723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5017224875d7b73d0c85f15d476cc66125a395c' => 
    array (
      0 => 'F:\\xampp\\htdocs\\novo\\templates\\tipo_produto.tpl',
      1 => 1555885983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbd0478180748_40925723 (Smarty_Internal_Template $_smarty_tpl) {
?><main role="main" class="col-md-10 ml-sm-auto mr-sm-auto col-lg-10 px-4">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>app/Pedidos/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h1 class="h3"> <?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button id="add-TipoProduto" type="button" data-page="<?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
" class="btn btn-sm btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>Adicionar
        </button>
    </div>
</div>
<div class="table-responsive">
    <table id="table-TipoProduto" class="table table-striped table-sm clean-table">
        <thead>
            <tr>
                <th class="no-sort">#</th>
                <th>Nome</th>
                <th class="no-sort s10">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista_tipos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_tipos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
</td>
                <td contenteditable="true" data-cod="<?php echo $_smarty_tpl->tpl_vars['lista_tipos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lista_tipos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nome_categoria'];?>
</td>
                <td>
                    <a class="text-primary" id="editar-row" data-page="<?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
" data-cod="1" data-action="update-row" href="javascript:">
                        <span data-feather="edit"></span>
                    </a>
                    <a class="text-danger" href="index.php?pagina=tipo_produto&acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['lista_produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
">
                            <span data-feather="trash-2"></span>
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
</main><?php }
}
