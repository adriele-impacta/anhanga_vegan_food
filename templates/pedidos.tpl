<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                Olá, estou chegando na estação.
                <div class="form-group">
                    <hr>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>-->
                <button type="button" class="btn btn-primary"><span data-feather="send"></span> Enviar</button>
            </div>
        </div>
    </div>
</div>

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
                        <span class="number">{$total_pedidos_hoje}</span>
                        <span class="title">Recebidos</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-hourglass-start"></i></span>
                    <p>
                        <span class="number">3</span>
                        <span class="title">Pendentes</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="icon"><i class="fa fa-coins"></i></span>
                    <p>
                        <span class="number">R$ 185,00</span>
                        <span class="title">Total vendido</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        {foreach from=$lista_dias_pedido key=k item=v}
        <li class="nav-item {if $k == 0}active{/if}">
            <a class="nav-link" id="{$k}tab" data-toggle="tab" href="#tab{$k}" role="tab" aria-controls="hoje"
                aria-selected="true">{if $v.dt_entrega|date_format:"%Y-%m-%d" == $dt_hoje} Hoje {elseif
                $v.dt_entrega|date_format:"%Y-%m-%d" == $dt_amanha|date_format:"%Y-%m-%d"} Amanhã
                {else}{$v.dt_entrega|date_format:"%d/%m"}{/if}</a>
        </li>
        {/foreach}
    </ul>


    <div class="tab-content border-left border-right border-bottom" id="myTabContent">
        {foreach from=$lista_dias_pedido key=k item=v}
        <div class="tab-pane fade {if $k == 0}active in{/if}" id="tab{$k}" role="tabpanel" aria-labelledby="tab{$k}">
            <table id="table-{$nome_pagina}" class="table table-striped table-sm no-datatable">
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
                    {foreach from=$lista_pedidos key=i item=dados}
                    {if $dados.dt_entrega|date_format:"%Y-%m-%d" == $v.dt_entrega|date_format:"%Y-%m-%d"}
                    <tr>
                        <td>000{$dados.id_pedido}</td>
                        <td>{$dados.nome_completo}</td>
                        <td>
                            {foreach from=$lista_produtos key=i item=produto}
                            {if $dados.id_pedido == $produto.id_pedido}
                                {$produto.nome_produto}<br>
                            {/if}
                            {/foreach}
                        </td>
                        <td>{$dados.endereco}</td>
                        <td>{$dados.dt_entrega|date_format:'%Hh%M'}</td>
                        <td>{$dados.tipo_pagamento}</td>
                        <td>R$ 
                            {foreach from=$total_pedidos_hoje key=i item=total_valor}
                                {if $dados.id_pedido == $total_valor.id_pedido}
                                    {$total_valor.valor}
                                {/if}
                            {/foreach}
                        </td>
                        <td>
                            <div class="form-group mb-0">
                                <select class="col-lg-9 form-control input-sm sts_pedido" data-cod="{$dados.id_pedido}" id="muda_status{$dados.id_pedido}">
                                    {foreach from=$lista_status_pedidos key=i item=status}
                                    <option {if $status.nome_status==$dados.status_pedido}selected{/if}
                                        value="{$status.id}">{$status.nome_status}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </td>
                        <td class="text-center" style="padding: 1.8% 0%;">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-comment-alt icon-msg-pedidos"></i>
                                <span class="badge bg-danger tem-msg">5</span>
                            </a>
                        </td>
                    </tr>
                    {/if}
                    {/foreach}
                    <tr>
                        <td>0007</td>
                        <td>Sr. Barriga</td>
                        <td>Feijoada<br>Refrigerante Hibisco<br>Salada de pote<button type="button"
                                class="badge badge-warning btn btn-warning btn-sm" data-container="body"
                                data-toggle="popover" data-placement="right"
                                data-content="Sem borda por favor">Obs</button></td>
                        <td>Anhangabaú</td>
                        <td>12h45</td>
                        <td>Na retirada</td>
                        <td>R$ 28,00</td>
                        <td>
                            <div class="form-group mb-0">
                                <select class="col-lg-9 form-control input-sm" id="exampleFormControlSelect1">

                                    <option selected>Recebido</option>
                                    <option>Saiu para entrega</option>
                                    <option>Chegou no local de entrega</option>
                                    <option>Cancelado</option>
                                </select>
                            </div>
                        </td>
                        <td class="text-center" style="padding: 1.8% 0%;">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-comment-alt icon-msg-pedidos"></i>
                                <span class="badge bg-danger tem-msg">5</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        {/foreach}
    </div>
</div>
