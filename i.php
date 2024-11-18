<?php
$h1 = mysqli_connect("localhost","root","","admin");
$x =$_POST['b'];
$y =$_POST['c'];
$d =$_POST['d'];
$z =$_POST['e'];

$h2 = "select * from cars where carname = 'x' AND carmodel = '$y' AND carcolor = '$d' AND carprice = 'e'";
$r=mysqli_query($h1,$h2);
$num= mysqli_num_rows($r);
if ($num == 0){
$h3 = "INSERT INTO `cars`(`carname`, `carmodel`, `carcolor`, `carprice`) VALUES ('$x','$y','$d','$z') ";
mysqli_query($h1,$h2);
header("location:admin.html");
}
else{
header("location:admin.html");
}

?>