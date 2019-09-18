<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> -->
<?php  
    require_once("index.php");
	require_once ('conexion.php');
    $consulta = "SELECT dv.cantidad,p.nombreProducto FROM producto p, venta v, detalle_venta dv WHERE idventa = venta_idventa AND idproducto = producto_idproducto";
    $query = mysqli_query($conn,$consulta);	
?>
<script>
            var chart;

            var chartData = [
            <?php while ($rows = mysqli_fetch_array($query)) 
            { ?>
                {
                    "country": "<?php echo $rows['nombreProducto']; ?>",
                    "visits": <?php echo $rows['cantidad']; ?>,
                    "color": "<?php $color = substr(md5(time()),0,6);
                    echo '#'. $color; ?>"
                },
            <?php } ?>
                /*,
                {
                    "country": "China",
                    "visits": 1882,
                    "color": "#FF6600"
                },
                {
                    "country": "Japan",
                    "visits": 1809,
                    "color": "#FF9E01"
                },
                {
                    "country": "Germany",
                    "visits": 1322,
                    "color": "#FCD202"
                }*/
            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "country";
                chart.startDuration = 1;
                chart.depth3D = 50;
                chart.angle = 30;
                chart.marginRight = -45;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 0;
                categoryAxis.axisAlpha = 0;
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                valueAxis.gridAlpha = 0;
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.valueField = "visits";
                graph.colorField = "color";
                graph.balloonText = "<b>[[category]]: [[value]]</b>";
                graph.type = "column";
                graph.lineAlpha = 0.5;
                graph.lineColor = "#FFFFFF";
                graph.topRadius = 1;
                graph.fillAlphas = 0.9;
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonEnabled = false;
                chartCursor.valueLineEnabled = true;
                chartCursor.valueLineBalloonEnabled = true;
                chartCursor.valueLineAlpha = 1;
                chart.addChartCursor(chartCursor);

                chart.creditsPosition = "top-right";

                // WRITE
                chart.write("chartdiv");
            });
    </script>
<center>
    
    <h2 align="center">VENTAS DURANTE EL MES</h2>
    <div id="chartdiv" style="width: 90%; height: 350px;"></div>
    <br><br>
    <a href="exportarGrafica.php?id=<?php echo $rows['cantidad'];?>" title=""><button type="" class="btn btn-warning"><span class="glyphicon glyphicon-export"></span>Generar Reporte</button></a>
    <a href="detalle_venta.php" title=""><button type="" class="btn btn-danger">Regresar</button></a>
</center>
