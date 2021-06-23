<?php

$id = $_GET['i'];
//connection


$con = mysqli_connect("localhost:3307","root","","university");
mysqli_query($con,"delete from course where co_id='$id'");

header("location:fetchB.php");

?>