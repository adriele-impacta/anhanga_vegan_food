<div class="panel">
    <div class="panel-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{#URL_DIR#}pedidos">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{$nome_pagina}</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <h3 class="page-title">{$nome_pagina}</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="usr_adm/incluir" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Adicionar
                </a>
            </div>
        </div>

        <table id="table-{$menu_ativo}" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th class="no-sort s20" >Nome</th>
                    <th class="sort_by">CPF</th>
                    <th class="no-sort s10">Ações</th>
                </tr>
            </thead>
            <tbody>
                {section name=sec1 loop=$lista_usr_adm}
                <tr id="tr{$lista_usr_adm[sec1].id}" class="tr_bg {if isset($id_atualiza)}{if $lista_usr_adm[sec1].id==$id_atualiza}= bg-success {/if}{/if}">
                    <td>{$lista_usr_adm[sec1].id}</td>
                    <td>{$lista_usr_adm[sec1].nome_completo}</td>
                    <td>{$lista_usr_adm[sec1].cpf}</td>
                    <td>
                        <a class="text-primary" id="editar"
                            href="index.php?pagina=usr_adm&acao=alterar&id={$lista_usr_adm[sec1].id}">
                            <i class="far fa-edit"></i>
                        </a>
                        <a class="text-danger"
                            href="index.php?pagina=usr_adm&acao=excluir&id={$lista_usr_adm[sec1].id}">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                {/section}
            </tbody>
        </table>
    </div>
</div>