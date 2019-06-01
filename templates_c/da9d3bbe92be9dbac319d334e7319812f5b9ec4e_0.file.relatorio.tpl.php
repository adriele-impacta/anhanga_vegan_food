<?php
/* Smarty version 3.1.33, created on 2019-06-01 17:25:47
  from 'F:\xampp\htdocs\anhanga_vegan_food\templates\relatorio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf298fb541988_54256704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9d3bbe92be9dbac319d334e7319812f5b9ec4e' => 
    array (
      0 => 'F:\\xampp\\htdocs\\anhanga_vegan_food\\templates\\relatorio.tpl',
      1 => 1559402745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf298fb541988_54256704 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['nome_pagina']->value;?>
</h3>
            <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <div id="headline-chart" class="ct-chart"></div>
                </div>
                <div class="col-md-3">
                    <div class="weekly-summary text-right">
                        <span class="number">2,315</span> <span class="percentage"><i
                                class="fa fa-caret-up text-success"></i> 12%</span>
                        <span class="info-label">Total Sales</span>
                    </div>
                    <div class="weekly-summary text-right">
                        <span class="number">$5,758</span> <span class="percentage"><i
                                class="fa fa-caret-up text-success"></i> 23%</span>
                        <span class="info-label">Monthly Income</span>
                    </div>
                    <div class="weekly-summary text-right">
                        <span class="number">$65,938</span> <span class="percentage"><i
                                class="fa fa-caret-down text-danger"></i> 8%</span>
                        <span class="info-label">Total Income</span>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }
}
