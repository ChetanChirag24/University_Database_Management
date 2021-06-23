<?php
//display data here
$con = mysqli_connect("localhost:3307","root","","university");
$s = mysqli_query($con,"select * from instructor");
?>
<!-- create a html table and display Data -->
<table border="1" align="center" class="table table-bordered">
	<tr>
			<th>i_name</th>
			<th>i_phone</th>
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
		<td><?php echo $r['i_name']; ?></td>
		<td><?php echo $r['i_phone']; ?></td>
		<td><a href="projectC.php"><button type="button" class="btn btn-success">New Record</button></a></td>
		<!-- create query string ? means query string thats pass to URL I is a variable name 
			where id is a field name -->
		<td><a href="deleteC.php?i=<?php echo $r['i_id']; ?>"><button type="button" class="btn btn-success">Delete</button></a></td>
		
		<!-- create delete.php file -->
		
		<!-- data Delete ID wise -->
		<td><a href="updateC.php?i=<?php echo $r['i_id']; ?>"><button type="button" class="btn btn-danger">Update</button></a></td>
		<!-- create a update.php file -->

	</tr>
<?php
}
?>
</table>