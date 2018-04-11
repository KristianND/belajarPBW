<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

// Fetch all users data from database
$statistik = mysqli_query($mysqli, "SELECT * FROM jumlahpendaftar ORDER BY id DESC");
?>

<html>
<head>
    <title>Admin Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div id="mtable" class="jumbotron">
<a href="http://kindika-ndapamerang.000webhostapp.com/">Go back to webpage</a><br/><br/>

	<h3 style="text-align: center;">"Respondent Page"</h3>
    <table width='80%' border=1 class="table table-bordered">

    <tr>
        <th>Name</th> <th>Email</th> <th>Subject</th> <th>Message</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['subject']."</td>";
        echo "<td>".$user_data['message']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>

        <p><a href="exportexcel.php"><button>Export Data ke Excel</button></a></p><br>

    <h3 style="text-align: center;">"Jumlah Pendaftar di Fakultas Teknologi Informasi dan Komunikasi Periode 2018"</h3>
    <table width='80%' border=1 class="table table-bordered">
        <tr>
            <th>Nama Departemen</th> <th>Tahun 2014</th> <th>Tahun 2015</th> <th>Tahun 2016</th> <th>Tahun 2017</th> <th>Tahun 2018</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($statistik)) {
            echo "<tr>";
            echo "<td>".$user_data['namaDepartemen']."</td>";
            echo "<td>".$user_data['tahun2014']."</td>";
            echo "<td>".$user_data['tahun2015']."</td>";
            echo "<td>".$user_data['tahun2016']."</td>";
            echo "<td>".$user_data['tahun2017']."</td>";
            echo "<td>".$user_data['tahun2018']."</td>";
            echo "<td><a href='editstatistik.php?id=$user_data[id]'>Edit</a></td></tr>";
        }
        ?>
    </table>
	</div>
</body>

</html>
