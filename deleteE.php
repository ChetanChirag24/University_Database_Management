<?php

$id = $_GET['i'];
//connection


$con = mysqli_connect("localhost:3307","root","","university");
mysqli_query($con,"delete from student where s_id='$id'");

header("location:fetchE.php");

?>