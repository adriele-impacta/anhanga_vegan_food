<div class="panel">
    <div class="panel-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{#URL_DIR#}index.php?pagina=produtos">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{$nome_pagina}</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <h3 class="page-title">{$nome_pagina}</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a id="add-TipoProduto" data-page="Tipo de Produto" href="#" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>
        <table id="table-{$id_pagina}" class="table table-striped table-sm clean-table">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th>Nome</th>
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                {section name=sec1 loop=$lista_tipos}
                <tr>
                    <td>{$lista_tipos[sec1].id}</td>
                    <td contenteditable="true" data-cod="{$lista_tipos[sec1].id}">{$lista_tipos[sec1].nome_categoria}
                    </td>
                    <td>
                        <a class="text-primary" id="editar-row" data-page="{$nome_pagina}" data-cod="1" data-action="update-row" href="javascript:">
                            <i class="far fa-edit"></i>
                        </a>
                        <a class="text-danger" href="index.php?pagina=tipo_produto&acao=excluir&id={$lista_produtos[sec1].id}">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                {/section}
            </tbody>
        </table>
    </div>
</div>