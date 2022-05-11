<?php
$n=$_GET['stname'];
$c=$_GET['stclass'];
$con=mysqli_connect("localhost","root","","data");
$sql="INSERT INTO student(studentname,studentclass) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "student data add successfully";
}
else{
    echo "not added";
}
?>