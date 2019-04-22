<?php
/* Smarty version 3.1.33, created on 2019-04-22 03:03:13
  from 'F:\xampp\htdocs\novo\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbd12d19bcbf6_01914564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c66eb021b0a5fcbbe96150cfe4b90c5c4149a459' => 
    array (
      0 => 'F:\\xampp\\htdocs\\novo\\templates\\base.tpl',
      1 => 1555894937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbd12d19bcbf6_01914564 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/chartist/css/chartist-custom.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/dataTables.bootstrap4.css" />
    <!-- MAIN CSS -->
    <?php if (isset($_smarty_tpl->tpl_vars['upload_arquivo']->value)) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/jquery.fileupload.css">
    <?php }?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
css/main.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/favicon.png">
</head>


<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
img/logo-dark.png" alt="Anhangá Logo" class="img-responsive logo"></a>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>Samuel</span> <i class="icon-submenu fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>Meu perfil</span></a></li>
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
                            <a href="#menu_pedidos" data-toggle="collapse" class="collapsed <?php if ($_smarty_tpl->tpl_vars['menu_ativo']->value == "pedidos") {?>active<?php }?>"> <i class="fa fa-shopping-cart"></i> <span>Pedidos</span> 
                                <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_pedidos" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=pedidos" class="">Pedidos</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=historico_pedidos" class="">Histórico de Pedidos</a></li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="tables.html" class=""><i class="fa fa-list-alt"></i> <span>Cardápio</span></a></li>

                        <li>
                            <a href="#menu_produtos" data-toggle="collapse" class="collapsed <?php if ($_smarty_tpl->tpl_vars['menu_ativo']->value == "produtos") {?>active<?php }?>"> <i class="fa fa-box-open"></i> <span>Produtos</span> <i
                                    class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_produtos" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=produtos" class="">Novo produto</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=tipo_produto" class="">Tipo</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="elements.html" class=""><i class="fa fa-calendar"></i><span>Eventos</span></a></li>
                        <li><a href="charts.html" class=""><i class="fa fa-chart-line"></i><span>Relatórios</span></a>
                        </li>

                        <li>
                            <a href="#menu_usuarios" data-toggle="collapse" class="collapsed"><i class="fa fa-users"></i> <span>Usuários</span> <i
                                    class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="menu_usuarios" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html" class="">Aplicativo</a></li>
                                    <li><a href="page-login.html" class="">Administrativo</a></li>
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
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['conteudo_pagina']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>.
                    All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
vendor/chartist/js/chartist.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/klorofil-common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            var data, options;

            // headline charts
            data = {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                series: [
                    [23, 29, 24, 40, 25, 24, 35],
                    [14, 25, 18, 34, 29, 38, 44],
                ]
            };

            options = {
                height: 300,
                showArea: true,
                showLine: false,
                showPoint: false,
                fullWidth: true,
                axisX: {
                    showGrid: false
                },
                lineSmooth: false,
            };

            new Chartist.Line('#headline-chart', data, options);


            // visits trend charts
            data = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [{
                    name: 'series-real',
                    data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
                }, {
                    name: 'series-projection',
                    data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
                }]
            };

            options = {
                fullWidth: true,
                lineSmooth: false,
                height: "270px",
                low: 0,
                high: 'auto',
                series: {
                    'series-projection': {
                        showArea: true,
                        showPoint: false,
                        showLine: false
                    },
                },
                axisX: {
                    showGrid: false,

                },
                axisY: {
                    showGrid: false,
                    onlyInteger: true,
                    offset: 0,
                },
                chartPadding: {
                    left: 20,
                    right: 20
                }
            };

            new Chartist.Line('#visits-trends-chart', data, options);


            // visits chart
            data = {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                series: [
                    [6384, 6342, 5437, 2764, 3958, 5068, 7654]
                ]
            };

            options = {
                height: 300,
                axisX: {
                    showGrid: false
                },
            };

            new Chartist.Bar('#visits-chart', data, options);


            // real-time pie chart
            var sysLoad = $('#system-load').easyPieChart({
                size: 130,
                barColor: function (percent) {
                    return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
                },
                trackColor: 'rgba(245, 245, 245, 0.8)',
                scaleColor: false,
                lineWidth: 5,
                lineCap: "square",
                animate: 800
            });

            var updateInterval = 3000; // in milliseconds

            setInterval(function () {
                var randomVal;
                randomVal = getRandomInt(0, 100);

                sysLoad.data('easyPieChart').update(randomVal);
                sysLoad.find('.percent').text(randomVal);
            }, updateInterval);

            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

        });
    <?php echo '</script'; ?>
>

    <?php if (isset($_smarty_tpl->tpl_vars['upload_arquivo']->value)) {?>
    <?php echo '<script'; ?>
>
        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#img_e").remove();
                    $('#files + img').remove();
                    $('#files').after('<img src="' + e.target.result + '" width="450"/>');
                }
                reader.readAsDataURL(input.files[0]);
            }


        }
        $("#fileupload").change(function () {
            filePreview(this);
        });
    <?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LIB_DIR']->value;?>
js/app.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
