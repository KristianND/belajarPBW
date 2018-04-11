<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$tahun2014=$_POST['tahun2014'];
    $tahun2015=$_POST['tahun2015'];
    $tahun2016=$_POST['tahun2016'];
    $tahun2017=$_POST['tahun2017'];
    $tahun2018=$_POST['tahun2018'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE jumlahpendaftar SET tahun2014='$tahun2014', tahun2015='$tahun2015', tahun2016='$tahun2016', tahun2017='$tahun2017', tahun2018='$tahun2018' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: awal.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$statistik = mysqli_query($mysqli, "SELECT * FROM jumlahpendaftar WHERE id=$id");

while($user_data = mysqli_fetch_array($statistik))
{
	$tahun2014 = $user_data['tahun2014'];
    $tahun2015 = $user_data['tahun2015'];
    $tahun2016 = $user_data['tahun2016'];
    $tahun2017 = $user_data['tahun2017'];
    $tahun2018 = $user_data['tahun2018'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<a href="awal.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="editstatistik.php">
		<table border="0" class="table table-bordered">
            <tr>
                <td>Tahun 2014</td>
                <td><input type="text" name="tahun2014" value=<?php echo $tahun2014;?>></td>
            </tr>
            <tr>
                <td>Tahun 2015</td>
                <td><input type="text" name="tahun2015" value=<?php echo $tahun2015;?>></td>
            </tr>
            <tr>
                <td>Tahun 2016</td>
                <td><input type="text" name="tahun2016" value=<?php echo $tahun2016;?>></td>
            </tr>
            <tr>
                <td>Tahun 2017</td>
                <td><input type="text" name="tahun2017" value=<?php echo $tahun2017;?>></td>
            </tr>
            <tr>
                <td>Tahun 2018</td>
                <td><input type="text" name="tahun2018" value=<?php echo $tahun2018;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
		</table>
	</form>
</body>
</html>
