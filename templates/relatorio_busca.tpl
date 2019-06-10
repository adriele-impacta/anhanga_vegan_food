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