<?php

$id = $_GET['i'];
//connection


$con = mysqli_connect("localhost:3307","root","","university");
mysqli_query($con,"delete from section where sec_id='$id'");

header("location:fetchD.php");

?>