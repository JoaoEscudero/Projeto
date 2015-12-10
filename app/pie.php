<?php
$nexcs = $_GET["nexcs"];
$nfexcs = $_GET["nfexcs"];
$code = '[{"value":'.$nexcs.',"color":"#ff9900","highlight": "#d27f03","label":"Feitos"}, {"value":'.$nfexcs.',"color":"#d2d2d2","highlight": "#a1a1a1","label":"Nao Feitos"}]';
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="author" content="puravidaapps.com">
  <meta charset="utf-8">
  <meta-name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <title>Pie Chart</title>
  <script src="Chart.min.js"></script>

  <script>
    // urldecode function, which also handles the case of spaces being encoded as +
    // http://stackoverflow.com/a/4458580/1545993
    function urldecode(str) {
      return decodeURIComponent((str+'').replace(/\+/g, '%20'));
    }
  </script>
</head>
<body>
  <div id="canvas-holder">
    <canvas id="chart-area" width="130" height="80"/>
  </div>

  <script>
    window.onload = function(){
      // get the pie data from the url, urldecoded (ONLY FOR TEST PURPOSES)
      var pieData = urldecode(location.search.slice(1));

      // get the pie data from the window.AppInventor object
      //var pieData = window.AppInventor.getWebViewString();

      var ctx = document.getElementById("chart-area").getContext("2d");
      window.myPie = new Chart(ctx).Pie(JSON.parse('<?php echo $code; ?>'));
    };
  </script>
</body>
</html>