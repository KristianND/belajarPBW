<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" src="lib\bootstrap\css\bootstrap.css"></link>
</head>
 
<body>
<div id="mtable" class="jumbotron">
<a href="http://kindika-ndapamerang.000webhostapp.com/">Go back to webpage</a><br/><br/>
 
    <table width='80%' border=1>
 
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
	</div>
	<div id="form">
		<input id="username" type='text'> </input>
		<input id="password" type='text'> </input>
		<button onClick="admin()">Click</button>
	</div>
	<script>
		$('#mtable').hide();
		
		function admin(){
			if($('#username').val()==='admin'&& $('#password').val()==='123456'){
					
			$('#mtable').show();
			$('#form').hide();
			}
			else{
				window.alert('you are not admin');
			}
		}
	</script>
</body>

</html>