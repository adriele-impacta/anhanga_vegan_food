{if isset($msg_retorno)}
<div class="alert alert-{$class_retorno}" role="alert">{$msg_retorno}</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=categorias{if isset($id_atualiza)}&id={$id_atualiza}{/if}" class="btn btn-primary">OK</a>
</div>
{else}

<div class="panel">
  <div class="panel-body">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=pedidos">Home</a></li>
        <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=categorias">{$nome_pagina}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{$acao_pagina}</li>
      </ol>
    </nav>
    <h3 class="page-title">{$acao_pagina}</h3>

    <div class="col-lg-6 col-md-8 col-sm-10">
      <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave"
        action="index.php?pagina=categorias{if isset($acao)}&acao={$acao}{/if}&send=1{if isset($id_atualiza)}&id={$id_atualiza}{/if}">

        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" value="{if isset($nome_categoria)}{$nome_categoria}{/if}" placeholder="Ex: Lanches"
            class="form-control" id="nome_categoria" name="nome_categoria" required>
        </div>

        <div class="form-group">
          <label for="files">Imagem</label><br>
          <span class="btn btn-success btn-sm fileinput-button">
            <i class="fa fa-plus"></i> Adicionar
            <input class="form-control" id="fileupload" type="file" name="files">
          </span>
          <div id="files" class="files">
            {if isset($imagem)}
            <img id="img_e" src="{$IMG_DIR}categorias/{$imagem}" width="150" class="img-responsive" alt="{$nome_categoria}" />
            {/if}
          </div>
          <br>
        </div>

        <div class="form-group">
          <a href="{$URL}index.php?pagina=categorias" class="btn btn-primary">Voltar</a>
          <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
{/if}