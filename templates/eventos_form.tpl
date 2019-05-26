{if isset($msg_retorno)}
<div class="alert alert-{$class_retorno}" role="alert">{$msg_retorno}</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=eventos{if isset($id_atualiza)}&id={$id_atualiza}{/if}" class="btn btn-primary">OK</a>
</div>
{else}

<div class="panel">
  <div class="panel-body">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=pedidos">Home</a></li>
        <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=eventos">{$nome_pagina}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{$acao_pagina}</li>
      </ol>
    </nav>
    <h3 class="page-title">{$acao_pagina}</h3>

    <div class="col-lg-6 col-md-8 col-sm-10">
      <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave"
        action="{$URL}index.php?pagina=eventos{if isset($acao)}&acao={$acao}{/if}&send=1{if isset($id_atualiza)}&id={$id_atualiza}{/if}">

        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" value="{if isset($nome_evento)}{$nome_evento}{/if}" class="form-control" id="nome_evento"
            name="nome_evento" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Descrição</label>
          <textarea name="descricao_evento" id="descricao_evento" required class="form-control">{if isset($descricao_evento)}{$descricao_evento}{/if}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Link</label>
          <input type="text" value="{if isset($link_evento)}{$link_evento}{/if}" class="form-control" id="link_evento"
            name="link_evento">
        </div>

        <div class="form-group">
          <a href="{$URL}index.php?pagina=eventos" class="btn btn-primary">Voltar</a>
          <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
{/if}