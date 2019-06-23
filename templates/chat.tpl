{foreach from=$lista_pedidos key=i item=modal}
<div class="modal fade" id="modal{$modal.id_pedido}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                {foreach from=$lista_mensagens_chat key=i item=msg}
                    {if $msg.id_pedido == $modal.id_pedido}
                        {if $msg.usuario == $login_usuario}
                        <div align="right">{$msg.mensagem}<br></div>
                        {else}<div align="left">{$msg.mensagem}<br></div>
                        {/if}
                    {/if}
                {/foreach}
                <div align="right" class="resposta-txt" id="res{$modal.id_pedido}"></div>
                <div class="form-group">
                    <hr>
                    <textarea class="form-control" name="text-msg-resposta" id="txt{$modal.id_pedido}"
                        rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="{$modal.id_pedido}" class="btn btn-primary enviar-msg">
                    <span data-feather="send"></span> Enviar
                </button>
            </div>
        </div>
    </div>
</div>
{/foreach}
<script>
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
</script>