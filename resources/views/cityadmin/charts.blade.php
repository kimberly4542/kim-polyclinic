<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      // function drawChart() {

      //   var data = google.visualization.arrayToDataTable([
      //     ['Province', 'Number of Cases'],
      //     <?php echo $chartData; ?>
      //   ]);

      //   var options = {
      //     title: 'Dengue Cases by Province'
      //   };


      //   var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
      //   chart.draw(data, options);
      // }


    function drawChart() {
    var data1 = google.visualization.arrayToDataTable([
      ['Province', 'Number of Cases'],
      <?php echo $chartData1; ?>
    ]);

    var data2 = google.visualization.arrayToDataTable([
      ['Gender', 'Number of Cases'],
      <?php echo $chartData2; ?>
    ]);

    var options = {
      title: 'Dengue Cases by Province'
    };

    var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
    chart1.draw(data1, options);

    var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
    chart2.draw(data2, options);
  }

    </script>
  </head>
  <body>
    <div id="piechart1" style="width: 900px; height: 500px;"></div>
    <div id="piechart2" style="width: 900px; height: 500px;"></div>
  </body>
</html>
