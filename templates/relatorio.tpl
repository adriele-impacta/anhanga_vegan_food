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
</script>