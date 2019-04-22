<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{#URL_DIR#}index.php?pagina=produtos">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{$nome_pagina}</li>
    </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="page-title">{$nome_pagina}</h3>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="index.php?pagina=produtos&acao=incluir" class="btn btn-sm btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>Adicionar
        </a>
    </div>
</div>
<div class="panel">
    <div class="panel-body">
        <table id="table-{$nome_pagina}" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th>Tipo de produto</th>
                    <th>Nome</th>
                    {* <th class="no-sort s10">Disponibilidade</th>*}
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                {section name=sec1 loop=$lista_produtos}
                <tr {if isset($id_atualiza)}{if $lista_produtos[sec1].id==$id_atualiza}class='bg-success' {/if}{/if}>
                    <td>{$lista_produtos[sec1].id}</td>
                    <td>{$lista_produtos[sec1].id_categoria}</td>
                    <td>{$lista_produtos[sec1].nome_produto}</td>
                    <td>
                        <a class="text-primary" id="editar"
                            href="index.php?pagina=produtos&acao=alterar&id={$lista_produtos[sec1].id}">
                            <i class="far fa-edit"></i>
                        </a>
                        <a class="text-danger"
                            href="index.php?pagina=produtos&acao=excluir&id={$lista_produtos[sec1].id}">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                {/section}
            </tbody>
        </table>
    </div>
</div>