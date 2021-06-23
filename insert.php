<?php
$link=mysqli_connect("localhost","root","","university");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>inserting php</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
</head>
<body>
<form name="form1" action="" method="post">
	<table>
		<tr>
			<td>Enter college name</td>
			<td><input type="text" name="t1"></td>
		</tr>
		<tr>
			<td>Enter college office</td>
			<td><input type="text" name="t2"></td>
		</tr>
		<tr>
			<td>Enter college phone</td>
			<td><input type="text" name="t3"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit1" value="insert"></td>
		</tr>
	</table>
</form>

<?php
if(isset($_post["submit1"]))
{
	mysqli_query($link,"insert into college values('$_post[t1]','$_post[t2]','$_post[t3]')");

}


?>



</body>
</html>