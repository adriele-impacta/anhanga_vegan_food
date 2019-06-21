<?php
/* Smarty version 3.1.33, created on 2019-06-18 05:37:42
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\historico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d085c86c59795_14831793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cb806aa880ee55c3687c0c6283c4f6bf051061a' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\historico.tpl',
      1 => 1560826335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d085c86c59795_14831793 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
    <div class="panel panel-headline">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h3>                
                        </div>
                        <div class="panel-body no-padding">
                            <table class="table table-striped">

                                <thead>
                                    <tr>
                                        <th>Cód.</th>
                                        <th>Cliente</th>
                                        <th>Produtos</th>
                                        <th>Local</th>
                                        <th>Tipo pagemento</th>
                                        <th>Data & Hora</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_produtos']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                    <tr>
                                        <td><a href="#">000<?php echo $_smarty_tpl->tpl_vars['v']->value['id_pedido'];?>
</a></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['nome_completo'];?>
</td>
                                        <td>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_pedido']->value, 'produto', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['produto']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['produto']->value['id_pedido'] == $_smarty_tpl->tpl_vars['v']->value['id_pedido']) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['produto']->value['nome_produto'];?>
<br>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['tipo_pagamento'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['endereco'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dt_entrega'];?>
</td>
                                        <td><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['v']->value['status_pedido'];?>
</span></td>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24
                                        hours</span></div>
                                <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All
                                        Purchases</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><?php }
}
