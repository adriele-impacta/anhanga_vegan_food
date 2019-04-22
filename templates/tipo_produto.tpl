<main role="main" class="col-md-10 ml-sm-auto mr-sm-auto col-lg-10 px-4">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>app/Pedidos/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">{$nome_pagina}</li>
  </ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h1 class="h3"> {$nome_pagina}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button id="add-TipoProduto" type="button" data-page="{$nome_pagina}" class="btn btn-sm btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>Adicionar
        </button>
    </div>
</div>
<div class="table-responsive">
    <table id="table-TipoProduto" class="table table-striped table-sm clean-table">
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
                <td contenteditable="true" data-cod="{$lista_tipos[sec1].id}">{$lista_tipos[sec1].nome_categoria}</td>
                <td>
                    <a class="text-primary" id="editar-row" data-page="{$nome_pagina}" data-cod="1" data-action="update-row" href="javascript:">
                        <span data-feather="edit"></span>
                    </a>
                    <a class="text-danger" href="index.php?pagina=tipo_produto&acao=excluir&id={$lista_produtos[sec1].id}">
                            <span data-feather="trash-2"></span>
                        </a>
                </td>
            </tr>
        {/section}
        </tbody>
    </table>
</div>
</main>