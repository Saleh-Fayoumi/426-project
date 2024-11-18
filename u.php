<?php
$h1 = mysqli_connect("localhost","root","","admin");
$x =$_POST['f'];
$y =$_POST['g'];
$d =$_POST['h'];
$z =$_POST['i'];

$h2 = "UPDATE `cars` SET `carmodel`='$y',`carcolor`='$d',`carprice`='$z' WHERE carname = '$x' ";

mysqli_query($h1,$h2);

header("location:admin.html");


?>