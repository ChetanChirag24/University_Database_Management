<?php
//display data here
$con = mysqli_connect("localhost:3307","root","","university");
$s = mysqli_query($con,"select * from course");
?>
<!-- create a html table and display Data -->
<table border="1" align="center" class="table table-bordered">
	<tr>
			<th>co_name</th>
			<th>credits</th>
			<th>co_duration</th>
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
		<td><?php echo $r['co_name']; ?></td>
		<td><?php echo $r['credits']; ?></td>
		<td><?php echo $r['co_duration']; ?></td>
		<td><a href="projectB.php"><button type="button" class="btn btn-success">New Record</button></a></td>
		<!-- create query string ? means query string thats pass to URL I is a variable name 
			where id is a field name -->
		<td><a href="deleteB.php?i=<?php echo $r['co_id']; ?>"><button type="button" class="btn btn-success">Delete</button></a></td>
		
		<!-- create delete.php file -->
		
		<!-- data Delete ID wise -->
		<td><a href="updateB.php?i=<?php echo $r['co_id']; ?>"><button type="button" class="btn btn-danger">Update</button></a></td>
		<!-- create a update.php file -->

	</tr>
<?php
}
?>
</table>