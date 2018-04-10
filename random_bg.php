<?php
  $bg = array('bg-1.jpg', 'bg-2.jpg', 'bg-3.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  
  $name = test_input($_POST["name"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
  }
?>