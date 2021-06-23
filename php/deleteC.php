<?php

$id = $_GET['i'];
//connection


$con = mysqli_connect("localhost:3307","root","","university");
mysqli_query($con,"delete from instructor where i_id='$id'");

header("location:fetchC.php");

?>