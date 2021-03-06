<div class="panel">
    <div class="panel-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{$URL}pedidos">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{$nome_pagina}</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <h3 class="page-title">{$nome_pagina}</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{$URL}eventos/incluir" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>

        <table id="table-{$menu_ativo}" class="table table-striped table-sm clean-table">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th class="no-sort s20">Nome</th>
                    <th>Link</th>
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                {section name=sec1 loop=$lista_eventos}
                <tr id="tr{$lista_eventos[sec1].id}">
                    <td>{$lista_eventos[sec1].id}</td>
                    <td>{$lista_eventos[sec1].nome_evento}</td>
                    <td><a href="{$lista_eventos[sec1].link_evento}" target="_blank">{$lista_eventos[sec1].link_evento}</a></td>
                    <td>
                            <a class="text-primary" id="editar"
                                href="{$URL}index.php?pagina=eventos&acao=alterar&id={$lista_eventos[sec1].id}">
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="text-danger"
                                href="{$URL}index.php?pagina=eventos&acao=excluir&id={$lista_eventos[sec1].id}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                </tr>
                {/section}
            </tbody>
        </table>
    </div>
</div>