<!DOCTYPE html>
<html lang="pt-br" class="fullscreen-bg">

<head>
    <title>Anhangá Vegan Food</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <link rel="stylesheet" href="{$LIB_DIR}vendor/bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="{$LIB_DIR}vendor/font-awesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="{$LIB_DIR}css/main.css">

    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">-->
    <script src="{$LIB_DIR}vendor/jquery/jquery.min.js"></script>

    <link rel="icon" type="image/png" sizes="96x96" href="{$LIB_DIR}img/icons/logo-cachorro.png">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div>
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="{$LIB_DIR}img/logo.gif" alt="Anhangá Logo"
                                        height="100">
                                </div>
                                <p class="lead">Bem vindo!</p>
                            </div>

                            <form class="form-auth-small" method="POST" id="frmSave" action="index.php?pagina=home">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Usuário</label>
                                    <input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Senha</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                                    <div class="invalid-feedback">{if isset($feedback)}{$feedback}{/if}</div>
                                </div>
                                {* <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Continuar conectado</span>
                                    </label>
                                </div>*}
                                <button type="submit" class="btn btn-orange btn-lg btn-block">Entrar</button>
                                {*<div class="bottom">
                                    <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                                </div>*}
                                <input type="hidden" value="enviado" name="enviado">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    <script src="{$LIB_DIR}js/valida_form.js"></script>
</body>
</html>