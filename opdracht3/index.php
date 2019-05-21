<?php
include_once 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Sandbox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
    <meta charset="utf-8">
    <title>Geochart GeoJSON example page</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWpcwKHGlsRC0B1pCwUpDwIUKAZweC-_s "></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/rarylson/geochart-geojson/master/build/geochart-geojson.min.js"></script>

    <script type="text/javascript">
      google.charts.load("current");
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {

        // Create and populate a data table
        var data = new google.visualization.DataTable();
        data.addColumn("string", "City");
        data.addColumn("number", "Value");
        data.addRows([
          ["Rio de Janeiro", 10],
          ["Maricá", 5],
          ["São João de Meriti", 2],
          ["Niterói", 1],
          ["São Gonçalo", 1]
        ]);

        // Instantiate our Geochart GeoJSON object
        const vis = new geochart_geojson.GeoChart(document.getElementById("mydiv"));

        // Set Geochart GeoJSON options
        const options = {
          mapsOptions: {
            center: {lat: -22.15, lng: -42.9},
            zoom: 10
          },
          geoJson: "https://cdn.rawgit.com/rarylson/geochart-geojson/master/example/rio-state.geojson",
          geoJsonOptions: {
            idPropertyName: "name"
          }
        };

        // Draw our Geochart GeoJSON with the data we created locally
        vis.draw(data, options);
      }
    </script>
  </head>

  <body>
    <div id="mydiv" style="width: 100%; height: 2000px;"></div>
  </body>
           
    </center>

    <script src="app.js"></script>
</body>
</html>