<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">{$nome_pagina}</h3>
        <div class="row">
            <form name="buscarGrafico">
                <div class="col-md-2">
                    <select class="form-control input-sm" id="mesGrafico">
                        <option value="0">Todos os meses</option>
                        {html_options values=$mes_values selected=$mes_selected output=$mes_output}
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control input-sm" id="anoGrafico">
                        <option value="0">Todos os anos</option>
                        {html_options values=$ano_values selected=$ano_selected output=$ano_output}
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <div id="charts">   
<script>
google.charts.load('current', { 'packages':['corechart'] });
google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() { 
        var data = google.visualization.arrayToDataTable([
        ['Pagamento', 'Total'],
            {foreach from=$dados_pagamento key=i item=pg}
                ['{$pg.tipo_pagamento}', {$pg.total}],
            {/foreach} 
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
        {foreach from=$dados_produtos key=i item=pd}
            ['{$pd.nome_produto}', {$pd.total}],
        {/foreach}
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
</script>
</div>