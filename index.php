<!DOCTYPE html>
<html>
<head>
  <title>bar chart-amcharts-php</title>
  <script type="text/javascript" src="amcharts/amcharts.js"></script>
  <script type="text/javascript" src="amcharts/serial.js"></script>
  <script type="text/javascript" src="amcharts/themes/light.js"></script>
  <script type="text/javascript" src="dataloader.min.js"></script>
</head>
<body>
  <h1 style="color: red;">Dynamic Bar Graph or Column Chart Using Amcharts js in php and json</h1> 
  <div id="chartdiv" style="width: 100%; height: 400px;"></div>
  <script type="text/javascript">
    AmCharts.makeChart( "chartdiv", {
      "type": "serial",
      "dataProvider": [ {
        "year": 2005,
        "income": 23.5
      }, {
        "year": 2006,
        "income": 26.2
      }, {
        "year": 2007,
        "income": 30.1
      } ],
      "categoryField": "year",
      "rotate": true,

      "categoryAxis": {
        "gridPosition": "start",
        "axisColor": "#DADADA"
      },
      "valueAxes": [ {
        "axisAlpha": 0.2
      } ],
      "graphs": [ {
        "type": "column",
        "title": "Income",
        "valueField": "income",
        "lineAlpha": 0,
        "fillColors": "#ADD981",
        "fillAlphas": 0.8,
        "balloonText": "[[title]] in [[category]]:<b>[[value]]</b>"
      } ]
    } );
  </script>
</body>
</html>
