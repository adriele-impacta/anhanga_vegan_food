<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Anhangá Vegan Food</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 
    <link rel="stylesheet" href="{$LIB_DIR}vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{$LIB_DIR}vendor/chartist/css/chartist-custom.css">
    <link rel="stylesheet" href="{$LIB_DIR}vendor/datatable/css/datatables.css" />

    {if isset($upload_arquivo)}
    <link rel="stylesheet" href="{$LIB_DIR}css/jquery.fileupload.css">
    {/if}
    <link rel="stylesheet" href="{$LIB_DIR}css/main.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">-->
    
    <link rel="apple-touch-icon" sizes="76x76" href="{$LIB_DIR}img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{$LIB_DIR}img/icons/logo-cachorro.png">
    
    <script src="{$LIB_DIR}vendor/jquery/jquery.min.js"></script>
    <script src="{$LIB_DIR}vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{$LIB_DIR}vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{$LIB_DIR}vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="{$LIB_DIR}vendor/chartist/js/chartist.min.js"></script>
    <script src="{$LIB_DIR}js/klorofil-common.js"></script>
    <script src="{$LIB_DIR}vendor/datatable/js/datatables.js"></script>
</head>


<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="{$URL}index.php?pagina=pedidos"><img src="{$LIB_DIR}img/logo-escrito.png" alt="Anhangá Logo" class="img-responsive logo-in"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="far fa-arrow-alt-circle-left"></i></button>
                </div>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System
                                        space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9
                                        unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly
                                        report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly
                                        meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your
                                        request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>{$nome_usuario}</span> <i
                                    class="icon-submenu fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>Meu perfil</span></a></li>
                                {*<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>*}
                                <li><a href="#"><i class="lnr lnr-exit"></i> <span>Sair</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li>
                            <a href="#menu_pedidos" data-toggle="collapse" class="collapsed {if $menu_ativo == "pedidos"}active{/if}"> <i class="fa fa-shopping-cart"></i> <span>Pedidos</span>
                                <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_pedidos" class="collapse ">
                                <ul class="nav">
                                    <li><a href="{$URL}index.php?pagina=pedidos">Pedidos</a></li>
                                    <li><a href="{$URL}index.php?pagina=historico_pedidos">Histórico de Pedidos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#menu_produtos" data-toggle="collapse" class="collapsed {if $menu_ativo == "produtos"}active{/if}"> <i class="fa fa-box-open"></i> <span>Produtos</span>
                                <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_produtos" class="collapse ">
                                <ul class="nav">
                                    <li><a href="{$URL}index.php?pagina=produtos">Novo produto</a></li>
                                    <li><a href="{$URL}index.php?pagina=tipo_produto">Tipo</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="elements.html" class=""><i class="fa fa-calendar"></i><span>Eventos</span></a></li>
                        <li><a href="charts.html" class=""><i class="fa fa-chart-line"></i><span>Relatórios</span></a>
                        </li>

                        <li>
                            <a href="#menu_usuarios" data-toggle="collapse" class="collapsed"><i
                                    class="fa fa-users"></i> <span>Usuários</span> <i
                                    class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_usuarios" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html">Aplicativo</a></li>
                                    <li><a href="page-login.html">Administrativo</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    {include file="$conteudo_pagina"}
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; {$ano} Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->

    {if isset($upload_arquivo)}
    <script src="{$LIB_DIR}js/upload_arquivo.js"></script>
    {/if}
    <script src="{$LIB_DIR}js/app.js"></script>
    <script src="{$LIB_DIR}js/valida_form.js"></script>

</body>

</html>