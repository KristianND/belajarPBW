<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$to='dikandapamerang@gmail.com';

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= "From : ".$email."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= "Cc: ".$email. "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if(@mail)
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Email Sucsessful');
    window.location.href='http://kindika-ndapamerang.000webhostapp.com/';
    </script>");
}



$servername = "localhost";
$username = "id4894883_root";
$password = "kristian";
$dbname = "id4894883_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, email, subject, message)
VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>