<?php
//display data here
$con = mysqli_connect("localhost:3307","root","","university");
$s = mysqli_query($con,"select * from college");
?>
<!-- create a html table and display Data -->
<table border="1" align="center" class="table table-bordered">
	<tr>
			<th>c_name</th>
			<th>c_office</th>
			<th>c_phone</th>
			<th>Add New</th>
			<th>Remove</th>
			<th>Edit</th>
	</tr>
<?php
//fetch data using array
while($r = mysqli_fetch_array($s))
{
?>
	<tr>
		<td><?php echo $r['c_name']; ?></td>
		<td><?php echo $r['c_office']; ?></td>
		<td><?php echo $r['c_phone']; ?></td>
		<td><a href="project.php"><button type="button" class="btn btn-success">New Record</button></a></td>
		<!-- create query string ? means query string thats pass to URL I is a variable name 
			where id is a field name -->
		<td><a href="delete.php?i=<?php echo $r['id']; ?>"><button type="button" class="btn btn-success">Delete</button></a></td>
		
		<!-- create delete.php file -->
		
		<!-- data Delete ID wise -->
		<td><a href="update.php?i=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger">Update</button></a></td>
		<!-- create a update.php file -->

	</tr>
<?php
}
?>
</table>