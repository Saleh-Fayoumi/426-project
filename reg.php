<?php
$h1 = mysqli_connect("localhost","root","","admin");
$x= $_POST['a']; // username
$y= $_POST['b']; // password
$h2 = "select * FROM user WHERE username = '$x' && password='$y'";
$r = mysqli_query($h1,$h2);
$num = mysqli_num_rows($r);
if ($num==0){
$h3  = "INSERT INTO `user`(`username`, `password`) VALUES ('$x','$y')";
mysqli_query($h1,$h2);
header("location:log.html");
}
else{
    header("location:reg.html");
}
?>