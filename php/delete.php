<?php

$id = $_GET['i'];
//connection


$con = mysqli_connect("localhost:3307","root","","university");
mysqli_query($con,"delete from college where id='$id'");

header("location:fetch.php");

?>