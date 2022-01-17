<?php include "header.php";?>

<p class="h1"><i class="fas fa-cloud-rain"></i>&nbsp;Luftfeuchtigkeit</p>

<div class="card">
  <div class="card-header">letzte 3 Stunden</div>
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

<div class="card">
  <div class="card-header">letzte 24 Stunden</div>
  <div class="card-body">
    <!-- Div für Google Chart -->
    <div id="card_graph_hum_latest_24h"></div>
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

            var chart = new google.visualization.BarChart(document.getElementById('card_graph_hum_latest_24h"'));

            chart.draw(data, options);
            }
    </script>
  </div>
  <div class="card-footer"></div>
</div>


<div class="card">
  <div class="card-header">letzte 7 Tage</div>
  <div class="card-body">
    <!-- Div für Google Chart -->
    <div id="card_graph_hum_latest_7d"></div>
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

            var chart = new google.visualization.BarChart(document.getElementById('card_graph_hum_latest_7d"'));

            chart.draw(data, options);
            }
    </script>
  </div>
  <div class="card-footer"></div>
</div>

<div class="card">
  <div class="card-header">letzte 14 Tage</div>
  <div class="card-body"><!-- Div für Google Chart -->
    <div id="card_graph_hum_latest_14d"></div>
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

            var chart = new google.visualization.BarChart(document.getElementById('card_graph_hum_latest_14d"'));

            chart.draw(data, options);
            }
    </script></div>
  <div class="card-footer"></div>
</div>

<div class="card">
  <div class="card-header">letzter Monat</div>
  <div class="card-body"><!-- Div für Google Chart -->
    <div id="card_graph_hum_latest_31d"></div>
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

            var chart = new google.visualization.BarChart(document.getElementById('card_graph_hum_latest_31d"'));

            chart.draw(data, options);
            }
    </script></div>
  <div class="card-footer"></div>
</div>

<div class="card">
  <div class="card-header">Alle Daten</div>
  <div class="card-body"><!-- Div für Google Chart -->
    <div id="card_graph_hum_latest_allData"></div>
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

            var chart = new google.visualization.BarChart(document.getElementById('card_graph_hum_allData"'));

            chart.draw(data, options);
            }
    </script></div>
  <div class="card-footer"></div>
</div>



<?php include "footer.php";?>