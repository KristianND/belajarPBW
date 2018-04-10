<html>
<head>
    <title>Grafik Pendaftar</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <h3 class="text-center"><strong>Grafik Jumlah Pendaftar Jalur SNMPTN</strong></h3>
    <a href="index.html"><button>BACK</button></a>
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</body>

<?php
include_once("config.php");
?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: ['2014', '2015', '2016', '2017', '2018']
    },
    yAxis: {
        title: {
            text: 'Jumlah Peminat'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [
	    {
            name: 'Informatika',
            data: [1650, 1723, 1796, 1867,1900 ]
        }, {
            name: 'Sistem Informasi',
            data: [1477, 1568, 1600, 1633, 1650]
        }, {
            name: 'Teknologi Informasi',
            data: [1500, 1600, 1700, 1800, 2000]
        }
    ]
});
</script>
