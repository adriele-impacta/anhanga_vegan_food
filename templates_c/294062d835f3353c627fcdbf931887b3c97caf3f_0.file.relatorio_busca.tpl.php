<?php
/* Smarty version 3.1.33, created on 2019-06-10 04:11:34
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\relatorio_busca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdbc564e94b4_81976981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294062d835f3353c627fcdbf931887b3c97caf3f' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\relatorio_busca.tpl',
      1 => 1560132686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdbc564e94b4_81976981 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
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
><?php }
}
