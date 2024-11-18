<?php
$h1 = mysqli_connect("localhost","root","","admin");
$x =$_POST['a'];
$h2 = "delete from cars where carname = '$x' ";

mysqli_query($h1,$h2);

header("location:admin.html");
?>