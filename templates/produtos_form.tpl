{if isset($msg_retorno)}
<div class="alert alert-{$class_retorno}" role="alert">{$msg_retorno}</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=produtos{if isset($id_atualiza)}&id={$id_atualiza}{/if}" class="btn btn-primary">OK</a>
</div>
{else}
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=home">Home</a></li>
    <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=produtos">{$nome_pagina}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{$acao_pagina}</li>
  </ol>
</nav>


<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">{$acao_pagina}</h3>
  </div>
  <div class="panel-body">







    <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave"
      action="index.php?pagina=produtos{if isset($acao)}&acao={$acao}{/if}&send=1{if isset($id_atualiza)}&id={$id_atualiza}{/if}">
      <div class="form-group col-lg-6 col-md-8 col-sm-10">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" value="{if isset($nome_produto)}{$nome_produto}{/if}" placeholder="Ex: Feijoada"
          class="form-control" id="nome_produto" name="nome_produto" required>
        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
      </div>

      <div class="form-group col-lg-6 col-md-8 col-sm-10">
        <label for="exampleInputPassword1">Preço</label>
        <div class="col-8 input-group mb-2 mr-sm-2 row">
          <div class="input-group-prepend">
            <div class="input-group-text">R$</div>
          </div>
          <input value="{if isset($valor)}{$valor}{/if}" type="number" min="0.00" max="10000.00" step="0.01" id="valor"
            class="form-control" name="valor" required>
        </div>
      </div>

      <div class="form-group col-lg-6 col-md-8 col-sm-10">
        <label for="exampleInputPassword1">Tipo de produto</label>

        <select name="id_categoria" id="id_categoria" class="form-control" required>
          {html_options values=$tipos_values selected=$tipo_selected output=$tipos_output}
        </select>

      </div>


      <div class="form-group col-lg-6 col-md-8 col-sm-10">
        <span class="btn btn-success fileinput-button">
          <i class="glyphicon glyphicon-plus"></i>
          <span>Adicionar arquivo...</span>
          <!-- The file input field used as target for the file upload widget -->
          <input id="fileupload" type="file" name="files">
        </span>
        <br>
        <br>
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
      </div>


      <div class="form-group col-lg-6 col-md-8 col-sm-10">
        <label for="exampleInputPassword1">Descrição</label>
        <textarea name="descricao_produto" id="descricao_produto"
          class="form-control">{if isset($descricao_produto)}{$descricao_produto}{/if}</textarea>
      </div>
      <div class="form-group col-lg-6 col-md-8 col-sm-10">

        <a href="{$URL}index.php?pagina=produtos" class="btn btn-primary">Voltar</a>
        <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </div>
</div>
{/if}