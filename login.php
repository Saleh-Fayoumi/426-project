<?php
$h1 = mysqli_connect("localhost","root","","admin");
$x= $_POST['a']; // username
$y= $_POST['b']; // password

$h2 = "select * FROM admins WHERE username = '$x' && password='$y'";

$r=mysqli_query($h1,$h2);
$num1= mysqli_num_rows($r);
if($num1 ==1){
header("location:admin.html");
}
else if($num1 ==0) {
    $h3 = "select * FROM user WHERE username = '$x' && password='$y'";
    $r=mysqli_query($h1,$h3);
    $num2= mysqli_num_rows($r);
    if ($num2 == 1){
        header("location:cus.html");
    }
    else header("location:log.html");


}



?>

