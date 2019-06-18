<div class="panel">
    <div class="panel panel-headline">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">{$nome_pagina}</h3>                
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
                                    {foreach from=$lista_produtos key=k item=v}
                                    <tr>
                                        <td><a href="#">000{$v.id_pedido}</a></td>
                                        <td>{$v.nome_completo}</td>
                                        <td>
                                            {foreach from=$lista_pedido key=i item=produto}
                                                {if $produto.id_pedido == $v.id_pedido}
                                                    {$produto.nome_produto}<br>
                                                {/if}
                                            {/foreach}
                                        </td>
                                        <td>{$v.tipo_pagamento}</td>
                                        <td>{$v.endereco}</td>
                                        <td>{$v.dt_entrega}</td>
                                        <td><span class="label label-success">{$v.status_pedido}</span></td>
                                    {/foreach}
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
    </div>