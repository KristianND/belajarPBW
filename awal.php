<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Admin Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
</head>
 
<body>
<div id="mtable" class="jumbotron">
<a href="http://kindika-ndapamerang.000webhostapp.com/">Go back to webpage</a><br/><br/>
	<h3 style="text-align: center;">"Respondent Page"</h3>
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
	
	<section id="contact" class="section-bg wow fadeInUp" style="border: 2px solid red; border-radius: 12px; margin: 180px; font-family:courier;">
		<div id="form">
		
		<br>
		<h3 class="text-center"><strong>Admin Login Page</strong></h3>
		<h5 class="text-center">Please Enter Username and Password</h5>
		<div class="container">

        
	    <div class="form-row">
			<br><br><br>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" name="name" data-rule="minlen:4" id="username" placeholder="Username">
			</div>

			<div class="form-group col-md-6">
				<input type="text" class="form-control" name="email" data-rule="email" id="password" placeholder="Password">
			</div>
		</div>
		<div class="text-center"><button onClick="admin()">Log In</button></div>
		<br><br>
		<p><em>*If you are not admin, please consider to leave this page immediately</em></p>
		<a href="http://kindika-ndapamerang.000webhostapp.com/"><em>Go back to Information Technology Webpage</em></a>
		</div>
		</div>
    </section>
	
	<script>
		$('#mtable').hide();
		
		function admin(){
			if($('#username').val()==='admin'&& $('#password').val()==='admin'){
					
			$('#mtable').show();
			$('#form').hide();
			}
			else{
				window.alert('Username Or Password Incorrect');
			}
		}
	</script>
</body>

</html>