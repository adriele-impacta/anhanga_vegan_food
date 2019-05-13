{if isset($msg_retorno)}
<div class="alert alert-{$class_retorno}" role="alert">{$msg_retorno}</div>
<div class="form-group col-lg-6 col-md-8 col-sm-10">
  <a href="index.php?pagina=usr_adm{if isset($id_atualiza)}&id={$id_atualiza}{/if}" class="btn btn-primary">OK</a>
</div>
{else}
<script src="{$LIB_DIR}vendor/jquery.mask/jquery.mask.js"></script>
<script src="{$LIB_DIR}vendor/jquery.validation/jquery.validation.js"></script>
<div class="panel">
  <div class="panel-body">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=pedidos">Home</a></li>
        <li class="breadcrumb-item"><a href="{$URL}index.php?pagina=usr_adm">{$nome_pagina}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{$acao_pagina}</li>
      </ol>
    </nav>
    <h3 class="page-title">{$acao_pagina}</h3>

    <div class="col-lg-6 col-md-8 col-sm-10">
      <form method="POST" name="frmSave" enctype="multipart/form-data" id="frmSave"
        action="index.php?pagina=usr_adm{if isset($acao)}&acao={$acao}{/if}&send=1{if isset($id_atualiza)}&id={$id_atualiza}{/if}">

        <div class="form-group">
          <label for="exampleInputEmail1">Nome Completo</label>
          <input type="text" value="{if isset($nome_completo)}{$nome_completo}{/if}" class="form-control"
            id="nome_completo" name="nome_completo" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">CPF</label>
          <input type="text" value="{if isset($cpf)}{$cpf}{/if}" class="form-control cpf" placeholder="xxx.xxx.xxx-xx"
            id="cpf" name="cpf" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Data de nascimento</label>
          <input type="text" value="{if isset($dt_nascimento)}{$dt_nascimento}{/if}" placeholder="__/__/____"
            class="form-control date" id="dt_nascimento" name="dt_nascimento" required>
        </div>

        <hr>

        <div class="form-group">
          <label for="exampleInputEmail1">Login</label>
          <input type="text" value="{if isset($login)}{$login}{/if}" class="form-control" id="login" name="login"
            required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Senha</label>
          <input type="text" value="{if isset($senha)}{$senha}{/if}" class="form-control" id="senha" name="senha"
            required>
        </div>
        <div class="form-group">
          <a href="{$URL}index.php?pagina=usr_adm" class="btn btn-primary">Voltar</a>
          <button type="submit" id="frmSaveButton" class="btn btn-primary">Salvar</button>
        </div>
      </form>

      <script>
        $(document).ready(function () {
          jQuery.validator.addMethod("verificaCPF", function (value, element) {
            value = value.replace('.', '');
            value = value.replace('.', '');
            cpf = value.replace('-', '');
            while (cpf.length < 11) cpf = "0" + cpf;
            var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
            var a = [];
            var b = new Number;
            var c = 11;
            for (i = 0; i < 11; i++) {
              a[i] = cpf.charAt(i);
              if (i < 9) b += (a[i] * --c);
            }
            if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11 - x }
            b = 0;
            c = 11;
            for (y = 0; y < 10; y++) b += (a[y] * c--);
            if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11 - x; }
            if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) return false;
            return true;
          }, "Informe um CPF válido.");


          var validator = $("#frmSave").validate({
            rules:
            {
              cpf: { verificaCPF: true }
            }
          });
          validator.element("#cpf");







          $('.date').mask('00/00/0000');
          $('.cpf').mask('000.000.000-00', { reverse: true });
        });
      </script>
    </div>
  </div>
</div>
{/if}