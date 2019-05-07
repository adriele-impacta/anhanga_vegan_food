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
                        <span class="number">8</span>
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
        <li class="nav-item active">
            <a class="nav-link" id="hoje-tab" data-toggle="tab" href="#hoje" role="tab" aria-controls="hoje"
                aria-selected="true">Hoje</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="amanha-tab" data-toggle="tab" href="#amanha" role="tab" aria-controls="amanha"
                aria-selected="false">Amanhã</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="amanha-tab" data-toggle="tab" href="#amanha" role="tab" aria-controls="amanha"
                aria-selected="false">22/02</a>
        </li>
    </ul>
    <div class="tab-content border-left border-right border-bottom" id="myTabContent">
        <div class="tab-pane fade show active in" id="hoje" role="tabpanel" aria-labelledby="hoje-tab">
            <table id="table-{$nome_pagina}" class="table table-striped table-sm clean-table">
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
                    <tr>
                        <td>0001</td>
                        <td>João da Silva</td>
                        <td>Pizza brócolis
                            <button type="button" class="badge badge-warning btn btn-warning btn-sm"
                                data-container="body" data-toggle="popover" data-placement="right"
                                data-content="Sem borda por favor">Obs</button>
                        </td>
                        <td>Metrô Liberdade</td>
                        <td>12h45</td>
                        <td>Online</td>
                        <td>R$ 20,00</td>
                        <td>
                            <div class="form-group mb-0">
                                <select class="col-lg-9 form-control input-sm" id="exampleFormControlSelect1">
                                    <option>Recebido</option>
                                    <option>Saiu para entrega</option>
                                    <option selected>Chegou no local de entrega</option>
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
                    <tr>
                        <td>0002</td>
                        <td>Cris Telis</td>
                        <td>Nhoque congelado</td>
                        <td>Parada Inglesa</td>
                        <td>13h15</td>
                        <td>Online</td>
                        <td>R$ 15,00</td>
                        <td>
                            <div class="form-group mb-0">
                                <select class="col-lg-9 form-control input-sm" id="exampleFormControlSelect1">
                                    <option>Recebido</option>
                                    <option selected>Saiu para entrega</option>
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
                    <tr class="novo-pedido">
                        <td>0003</td>
                        <td>Hugh Laurie</td>
                        <td>Feijoada<br>Refrigerante Hibisco</td>
                        <td>Consolação</td>
                        <td>11h45</td>
                        <td>Na retirada</td>
                        <td>R$ 28,00</td>
                        <td>
                            <div class="form-group mb-0">
                                <select class="col-lg-9 form-control input-sm" id="exampleFormControlSelect1">
                                    <option selected>Novo</option>
                                    <option>Recebido</option>
                                    <option>Saiu para entrega</option>
                                    <option>Chegou no local de entrega</option>
                                    <option>Cancelado</option>
                                </select>
                            </div>
                        </td>
                        <td class="text-center" style="padding: 1.8% 0%;">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-comment-alt icon-msg-pedidos"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>0004</td>
                        <td>Sr. Barriga</td>
                        <td>Feijoada<br>Refrigerante Hibisco<br>Salada de pote</td>
                        <td>Anhangabaú</td>
                        <td>11h45</td>
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
        <div class="tab-pane fade" id="amanha" role="tabpanel" aria-labelledby="amanha-tab">...</div>
    </div>
</div>