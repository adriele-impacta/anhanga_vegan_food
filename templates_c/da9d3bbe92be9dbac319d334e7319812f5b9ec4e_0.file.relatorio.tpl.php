<?php
/* Smarty version 3.1.33, created on 2019-06-02 01:30:23
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\relatorio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf30a8fcbbbc1_63616185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9d3bbe92be9dbac319d334e7319812f5b9ec4e' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\relatorio.tpl',
      1 => 1559431821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf30a8fcbbbc1_63616185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\anhanga_vegan_food\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h3>
        <div class="row">
            <div class="col-md-2">
                <select class="form-control input-sm">
                    <option value="0">Todos os meses</option>
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['mes_values']->value,'selected'=>$_smarty_tpl->tpl_vars['mes_selected']->value,'output'=>$_smarty_tpl->tpl_vars['mes_output']->value),$_smarty_tpl);?>

                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control input-sm">
                    <option value="0">Todos os anos</option>
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ano_values']->value,'selected'=>$_smarty_tpl->tpl_vars['ano_selected']->value,'output'=>$_smarty_tpl->tpl_vars['ano_output']->value),$_smarty_tpl);?>

                </select>
            </div>
            <div class="col-md-2 form-group">
                <a type="button" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
index.php?pagina=relatorio&" class="btn btn-primary btn-sm">Buscar</a>
            </div>
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
>
    var data = {
        labels: ['Bananas', 'Apples', 'Grapes'],
        series: [20, 15, 40]
    };

    var options = {
        labelInterpolationFnc: function (value) {
            return value[0]
        }
    };

    var responsiveOptions = [
        ['screen and (min-width: 640px)', {
            chartPadding: 30,
            labelOffset: 100,
            labelDirection: 'explode',
            labelInterpolationFnc: function (value) {
                return value;
            }
        }],
        ['screen and (min-width: 1024px)', {
            labelOffset: 80,
            chartPadding: 20
        }]
    ];
    new Chartist.Pie('#pagamento-chart', data, options, responsiveOptions);

    new Chartist.Bar('#pratos-chart', {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        series: [[5, 4, 3, 7, 5, 10, 3]]

    }, {
            seriesBarDistance: 8,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });
<?php echo '</script'; ?>
><?php }
}
