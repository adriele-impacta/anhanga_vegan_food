<div class="panel">
    <div class="panel-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{#URL_DIR#}index.php?pagina=pedidos">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{$nome_pagina}</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <h3 class="page-title">{$nome_pagina}</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="index.php?pagina=tipo_pagamento&acao=incluir" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>

        <table id="table-{$menu_ativo}" class="table table-striped table-sm clean-table">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th>Descrição</th>
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                {section name=sec1 loop=$lista_tipo_pagamento}
                <tr id="tr{$lista_tipo_pagamento[sec1].id}">
                    <td>{$lista_tipo_pagamento[sec1].id}</td>
                    <td>{$lista_tipo_pagamento[sec1].tipo_pagamento}</td>
                    <td>
                            <a class="text-primary" id="editar"
                                href="index.php?pagina=tipo_pagamento&acao=alterar&id={$lista_tipo_pagamento[sec1].id}">
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="text-danger"
                                href="index.php?pagina=tipo_pagamento&acao=excluir&id={$lista_tipo_pagamento[sec1].id}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                </tr>
                {/section}
            </tbody>
        </table>
    </div>
</div>