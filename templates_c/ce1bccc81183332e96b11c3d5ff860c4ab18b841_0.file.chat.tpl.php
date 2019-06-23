<?php
/* Smarty version 3.1.33, created on 2019-06-23 23:55:48
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\chat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0ff5649ad635_29484823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce1bccc81183332e96b11c3d5ff860c4ab18b841' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\chat.tpl',
      1 => 1561326938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0ff5649ad635_29484823 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_pedidos']->value, 'modal', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['modal']->value) {
?>
<div class="modal fade" id="modal<?php echo $_smarty_tpl->tpl_vars['modal']->value['id_pedido'];?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mensagem de Cris Telis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_mensagens_chat']->value, 'msg', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['msg']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value['id_pedido'] == $_smarty_tpl->tpl_vars['modal']->value['id_pedido']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['msg']->value['usuario'] == $_smarty_tpl->tpl_vars['login_usuario']->value) {?>
                        <div align="right"><?php echo $_smarty_tpl->tpl_vars['msg']->value['mensagem'];?>
<br></div>
                        <?php } else { ?><div align="left"><?php echo $_smarty_tpl->tpl_vars['msg']->value['mensagem'];?>
<br></div>
                        <?php }?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div align="right" class="resposta-txt" id="res<?php echo $_smarty_tpl->tpl_vars['modal']->value['id_pedido'];?>
"></div>
                <div class="form-group">
                    <hr>
                    <textarea class="form-control" name="text-msg-resposta" id="txt<?php echo $_smarty_tpl->tpl_vars['modal']->value['id_pedido'];?>
"
                        rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="<?php echo $_smarty_tpl->tpl_vars['modal']->value['id_pedido'];?>
" class="btn btn-primary enviar-msg">
                    <span data-feather="send"></span> Enviar
                </button>
            </div>
        </div>
    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '<script'; ?>
>
    $('.enviar-msg').click(function () {
        var id_p = $(this).attr('id');
        var txt = $('#txt' + id_p);
        var getMensagem = $(txt).val();

        $('#res' + id_p).append(getMensagem + '<br>');
        $(txt).val('');

        $.ajax({
            url: url + 'index.php?pagina=pedidos&acao=chat',
            type: 'POST',
            data: { id_p: id_p, getMensagem: getMensagem },
            dataType: 'JSON'
        }).done(function (response) {
            if (response.sts == 1) {

            }
            else {

            }
        });
    });
<?php echo '</script'; ?>
><?php }
}
