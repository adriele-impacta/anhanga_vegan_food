<?php
/* Smarty version 3.1.33, created on 2019-06-10 04:11:06
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\relatorio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdbc3a56d975_75080675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9d3bbe92be9dbac319d334e7319812f5b9ec4e' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\relatorio.tpl',
      1 => 1560132660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdbc3a56d975_75080675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\anhanga_vegan_food\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h3>
        <div class="row">
            <form name="buscarGrafico">
                <div class="col-md-2">
                    <select class="form-control input-sm" id="mesGrafico">
                        <option value="0">Todos os meses</option>
                        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['mes_values']->value,'selected'=>$_smarty_tpl->tpl_vars['mes_selected']->value,'output'=>$_smarty_tpl->tpl_vars['mes_output']->value),$_smarty_tpl);?>

                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control input-sm" id="anoGrafico">
                        <option value="0">Todos os anos</option>
                        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ano_values']->value,'selected'=>$_smarty_tpl->tpl_vars['ano_selected']->value,'output'=>$_smarty_tpl->tpl_vars['ano_output']->value),$_smarty_tpl);?>

                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <button type="button" id="btnBuscarGrafico" class="btn btn-primary btn-sm">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                 <div class="panel-heading">
                    <h3 class="panel-title">Tipos de pagamento</h3>
                </div> 
                <div class="panel-body">
                    <div id="pagamento-chart" class="ct-chart ct-golden-section"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                 <div class="panel-heading">
                    <h3 class="panel-title">Pratos mais pedidos</h3>
                </div> 
                <div class="panel-body">
                    <div id="pratos-chart" class="ct-chart ct-golden-section"></div>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.gstatic.com/charts/loader.js"><?php echo '</script'; ?>
>
 <div id="charts">   
<?php echo '<script'; ?>
>
google.charts.load('current', { 'packages':['corechart'] });
google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() { 
        var data = google.visualization.arrayToDataTable([
        ['Pagamento', 'Total'],
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dados_pagamento']->value, 'pg', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['pg']->value) {
?>
                ['<?php echo $_smarty_tpl->tpl_vars['pg']->value['tipo_pagamento'];?>
', <?php echo $_smarty_tpl->tpl_vars['pg']->value['total'];?>
],
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        ]);

        // var options = { 
        //  title: 'Tipos de pagamento'
      //  }; 

        var chart = new google.visualization.PieChart(document.getElementById('pagamento-chart'));
        chart.draw(data);
      }


google.charts.load('current', { packages: ['corechart', 'bar'] });
google.charts.setOnLoadCallback(drawAnnotations);

function drawAnnotations() {
      var data = google.visualization.arrayToDataTable([
        ['Prato', 'Total'],
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dados_produtos']->value, 'pd', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['pd']->value) {
?>
            ['<?php echo $_smarty_tpl->tpl_vars['pd']->value['nome_produto'];?>
', <?php echo $_smarty_tpl->tpl_vars['pd']->value['total'];?>
],
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      ]);

      var options = {
       // title: 'Pratos mais pedidos',
        chartArea: { width: '50%' },
        annotations: { alwaysOutside: true,
          textStyle: { 
            fontSize: 12,
            auraColor: 'none',
            color: '#555'
           },
          boxStyle: { 
            stroke: '#ccc',
            strokeWidth: 1,
            gradient: { 
              color1: '#f3e5f5',
              color2: '#f3e5f5',
              x1: '0%', y1: '0%',
              x2: '100%', y2: '100%'
            }
          }
        },
      };
      var chart = new google.visualization.BarChart(document.getElementById('pratos-chart'));
      chart.draw(data, options);
    }
<?php echo '</script'; ?>
>
</div><?php }
}
