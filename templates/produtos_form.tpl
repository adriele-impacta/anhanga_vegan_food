{if isset($msg_retorno)}
<div class="alert alert-{$class_retorno}" role="alert">{$msg_retorno}</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=produtos{if isset($id_atualiza)}&id={$id_atualiza}{/if}" class="btn btn-primary">OK</a>
</div>
{else}

<div class="panel">
  <div class="panel-body">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=home">Home</a></li>
        <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=produtos">{$nome_pagina}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{$acao_pagina}</li>
      </ol>
    </nav>
    <h3 class="page-title">{$acao_pagina}</h3>

    <div class="col-lg-6 col-md-8 col-sm-10">
      <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave"
        action="index.php?pagina=produtos{if isset($acao)}&acao={$acao}{/if}&send=1{if isset($id_atualiza)}&id={$id_atualiza}{/if}">

        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" value="{if isset($nome_produto)}{$nome_produto}{/if}" placeholder="Ex: Feijoada"
            class="form-control" id="nome_produto" name="nome_produto" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Preço</label>
          <div class="input-group">
            <span class="input-group-addon">R$</span>
            <input class="form-control" name="valor" value="{if isset($valor)}{$valor}{/if}" type="number" min="0.00" max="10000.00"
              step="0.01" required>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Tipo de produto</label>
          <select name="id_categoria" id="id_categoria" class="form-control" required>
            {html_options values=$tipos_values selected=$tipo_selected output=$tipos_output}
          </select>
        </div>


        <div class="form-group">
          <label for="files">Imagem</label><br>
          <span class="btn btn-success btn-sm fileinput-button">
            <i class="fa fa-plus"></i> Adicionar
            <!-- The file input field used as target for the file upload widget -->
            <input class="form-control" id="fileupload" type="file" name="files">
          </span>
          <!-- The global progress bar
        <div id="progress" class="progress">
            <div class="progress-bar progress-bar-success"></div>
        </div> -->
          <!-- The container for the uploaded files-->
          <div id="files" class="files">
            {if isset($imagem)}
            <img id="img_e" src="{$IMG_DIR}{$imagem}" width="450" />
            {/if}
          </div>
          <br>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Descrição</label>
          <textarea name="descricao_produto" id="descricao_produto"
            class="form-control">{if isset($descricao_produto)}{$descricao_produto}{/if}</textarea>
        </div>
        <div class="form-group">
          <a href="{$URL}index.php?pagina=produtos" class="btn btn-primary">Voltar</a>
          <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
        </div>

      </form>
    </div>
  </div>
</div>
{/if}