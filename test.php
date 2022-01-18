<?php include "header.php";?>

<?php 

$collection = $client->C19->data;


$cursor=$collection->find(['timestamp' => '20220115001847242887']);

foreach($cursor as $doc){
    echo $doc['_id'],"\n";
}




?>






<p class="h1"><i class="fas fa-cloud-rain"></i>&nbsp;Luftfeuchtigkeit</p>

<div class="card">
  <div class="card-header">Test</div>
  <div class="card-body">
    <!-- Div für Google Chart -->
    <div id="card_graph_hum_latest_3h"></div>
    <script type="text/javascript">



        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            // Nach Anzahl Votes aufsteigend sortieren!!!
            const votes = ["4","3","3","2","2","1"]
            votes.sort()
            votes.reverse()


            var data = google.visualization.arrayToDataTable([
                ['Gericht', 'Stimmen',{role:'style'}],
                
                ['5', 4,'#772e25'],
                ['2', 3,'#e09f3e'],
                ['1', 3,'#c44536'],
                ['3', 2,'#283d3b'],
                ['6', 2,'#5fa8d3'],
                ['4', 1,'#197278']
                
               
            ]);

            var options = {
                chartArea: {width: '80%'},
                

                hAxis: {
                title: 'Stimmen gesamt',
                minValue: 0
                },
                vAxis: {
                title: 'Gericht'
                },
                backgroundColor: "transparent",
                animation:{
                    duration: 1000,
                    easing: 'in',
                },
            };

            var chart = new google.visualization.BarChart(document.getElementById('card_graph_hum_latest_3h"'));

            chart.draw(data, options);
            }
    </script>
  </div>
  <div class="card-footer"></div>
</div>

<?php include "footer.php";?>