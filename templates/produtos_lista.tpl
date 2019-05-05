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
                <a href="index.php?pagina=produtos&acao=incluir" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>

        <table id="table-{$menu_ativo}" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th>Nome</th>
                    <th class="sort_by">Disponibilidade</th>
                    <th>Tipo de produto</th>
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                {section name=sec1 loop=$lista_produtos}
                <tr id="tr{$lista_produtos[sec1].id}" class="tr_bg {if isset($id_atualiza)}{if $lista_produtos[sec1].id==$id_atualiza}= bg-success {/if}{/if}">
                    <td>{$lista_produtos[sec1].id}</td>
                    <td>{$lista_produtos[sec1].nome_produto}</td>
                    <td><select name="cardapio" data-cod="{$lista_produtos[sec1].id}" id="produto{$lista_produtos[sec1].id}" class="form-control input-sm cardapio">{html_options
                            values=$tipos_values selected=$lista_produtos[sec1].dia_semana
                            output=$tipos_output}</select>
                        <small class="retorno" id="retorno{$lista_produtos[sec1].id}"></small>
                    </td>
                    <td>{$lista_produtos[sec1].nome_categoria}</td>
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