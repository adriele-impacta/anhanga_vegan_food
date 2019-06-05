<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">{$nome_pagina}</h3>
        <div class="row">
            <div class="col-md-2">
                <select class="form-control input-sm">
                    <option value="0">Todos os meses</option>
                    {html_options values=$mes_values selected=$mes_selected output=$mes_output}
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control input-sm">
                    <option value="0">Todos os anos</option>
                    {html_options values=$ano_values selected=$ano_selected output=$ano_output}
                </select>
            </div>
            <div class="col-md-2 form-group">
                <a type="button" href="{$URL}index.php?pagina=relatorio" class="btn btn-primary btn-sm">Buscar</a>
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
<script>
    var data = {
        labels: [
            {foreach from=$dados_pagamento key=i item=pg}
                '{$pg.tipo_pagamento}{if $i < $dados_pagamento|@count}',{/if}
            {/foreach}
        ],
        series: [
            {foreach from=$dados_pagamento key=i item=pg}
                {$pg.total}{if $i < $dados_pagamento|@count},{/if}
            {/foreach}
        ]
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
        labels: [
             {foreach from=$dados_produtos key=i item=pd}
                '{$pd.nome_produto}{if $i < $dados_produtos|@count}',{/if}
            {/foreach}
        ],
        series: [[
            {foreach from=$dados_produtos key=i item=pd}
                {$pd.total}{if $i < $dados_produtos|@count},{/if}
            {/foreach}
        ]]

    }, {
            seriesBarDistance: 8,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });
</script>