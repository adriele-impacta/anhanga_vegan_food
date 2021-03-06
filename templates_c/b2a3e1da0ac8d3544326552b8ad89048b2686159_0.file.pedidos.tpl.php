<?php
/* Smarty version 3.1.33, created on 2019-06-23 22:31:16
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0fe194bdb648_29219198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2a3e1da0ac8d3544326552b8ad89048b2686159' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\pedidos.tpl',
      1 => 1561321868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:chat.tpl' => 1,
  ),
),false)) {
function content_5d0fe194bdb648_29219198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\anhanga_vegan_food\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:chat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Pedidos</h3>
        <p class="panel-subtitle">Listagem de pedidos de hoje e dos próximos dias</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                    <p>
                        <span class="number"><?php echo $_smarty_tpl->tpl_vars['total_pedidos_hoje']->value;?>
</span>
                        <span class="title">Recebidos</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-hourglass-start"></i></span>
                    <p>
                        <span class="number"><?php echo $_smarty_tpl->tpl_vars['pendente']->value;?>
</span>
                        <span class="title">Pendentes</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-coins"></i></span>
                    <p>
                        <span class="number">R$ <?php echo number_format($_smarty_tpl->tpl_vars['total_vendido']->value,2,',','.');?>
</span>
                        <span class="title">Total vendido</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_dias_pedido']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>active<?php }?>">
            <a class="nav-link" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
tab" data-toggle="tab" href="#tab<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" role="tab" aria-controls="hoje"
                aria-selected="true"><?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['dt_entrega'],"%Y-%m-%d") == $_smarty_tpl->tpl_vars['dt_hoje']->value) {?> Hoje <?php } elseif (smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['dt_entrega'],"%Y-%m-%d") == smarty_modifier_date_format($_smarty_tpl->tpl_vars['dt_amanha']->value,"%Y-%m-%d")) {?> Amanhã
                <?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['dt_entrega'],"%d/%m");
}?>
            </a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <div class="tab-content border-left border-right border-bottom" id="myTabContent">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_dias_pedido']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>active in<?php }?>" id="tab<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" role="tabpanel" aria-labelledby="tab<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
            <table id="table-<?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="table table-striped table-sm clean-table">
                <thead>
                    <tr class="border-top-remove">
                        <th class="no-sort">#</th>
                        <th>Cliente</th>
                        <th>Produto</th>
                        <th class="no-sort">Local</th>
                        <th>Hora entrega</th>
                        <th>Pagamento</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th class="no-sort text-center">Chat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_pedidos']->value, 'dados', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['dados']->value) {
?>
                    <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dados']->value['dt_entrega'],"%Y-%m-%d") == smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['dt_entrega'],"%Y-%m-%d")) {?>
                    <tr>
                        <td>000<?php echo $_smarty_tpl->tpl_vars['dados']->value['id_pedido'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value['nome_completo'];?>
</td>
                        <td>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_produtos']->value, 'produto', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['produto']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['dados']->value['id_pedido'] == $_smarty_tpl->tpl_vars['produto']->value['id_pedido']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['produto']->value['nome_produto'];?>

                            <?php if ($_smarty_tpl->tpl_vars['produto']->value['obs']) {?>
                            <button type="button" class="badge badge-warning btn btn-warning btn-sm"
                                data-container="body" data-toggle="popover" data-placement="right"
                                data-content="<?php echo $_smarty_tpl->tpl_vars['produto']->value['obs'];?>
">Obs</button>
                            <?php }?><br>

                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value['endereco'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['dados']->value['dt_entrega'],'%Hh%M');?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value['tipo_pagamento'];?>
</td>
                        <td>R$
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['total_pedido']->value, 'total_valor', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['total_valor']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['dados']->value['id_pedido'] == $_smarty_tpl->tpl_vars['total_valor']->value['id_pedido']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['total_valor']->value['valor'];?>

                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </td>
                        <td>
                            <div class="form-group mb-0">
                                <select class="col-lg-9 form-control input-sm sts_pedido" data-cod="<?php echo $_smarty_tpl->tpl_vars['dados']->value['id_pedido'];?>
"
                                    id="muda_status<?php echo $_smarty_tpl->tpl_vars['dados']->value['id_pedido'];?>
">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_status_pedidos']->value, 'status', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['status']->value) {
?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['status']->value['nome_status'] == $_smarty_tpl->tpl_vars['dados']->value['status_pedido']) {?>selected<?php }?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['status']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['nome_status'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </td>
                        <td class="text-center" style="padding: 1.8% 0%;">
                            <a href="#" data-toggle="modal" class="ver_chat" data-target="#modal<?php echo $_smarty_tpl->tpl_vars['dados']->value['id_pedido'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['dados']->value['id_pedido'];?>
">
                                <i class="fa fa-comment-alt icon-msg-pedidos"></i>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_chat']->value, 'chat', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['chat']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['dados']->value['id_pedido'] == $_smarty_tpl->tpl_vars['chat']->value['id_pedido']) {?>
                                        <span class="badge bg-danger tem-msg"><?php echo $_smarty_tpl->tpl_vars['chat']->value['total'];?>
</span>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php echo '<script'; ?>
>
$('.ver_chat').on('click', function(){
    var id_p = $(this).attr('id');
    $.ajax({
        url: url + 'index.php?pagina=pedidos&acao=chat',
        type: 'POST',
        data: { id_p: id_p },
        dataType: 'JSON'
    }).done(function (response) {     
        if (response.sts == 1) {
            $('.tem-msg').remove();
        }
        else {
          
        }
    });
});
<?php echo '</script'; ?>
><?php }
}
