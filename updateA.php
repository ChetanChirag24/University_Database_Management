<body bgcolor="orange">
<!-- get id -->
<?php $i = $_GET['i']; ?>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px; border-radius: 10px; margin-top: 130px;">
    <h2 align="center">Department Information</h2>
<form action="" method="post">
  <fieldset>
    <div style="padding: 10px; text-align: center;">
      <!-- create hidden field and pass data to ID here -->
      <input type="hidden" name="d_id" value="<?php echo $i; ?>">
      <input type="text" name="dname" value="" placeholder="Enter Department Name" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input type="text" name="dphone" value="" placeholder="Enter Department Phone" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input type="submit" name="update" value="Update" style="padding: 10px; width: 30%">
    </div>
  </fieldset>
</form>
<?php
if(isset($_POST['update']))
{
  //connection
  $con = mysqli_connect("localhost:3307","root","","university");
  //variable and value passing here
  $id = $_POST['d_id'];
  $dn = $_POST['dname'];
  $dph = $_POST['dphone'];

  //insert a data here
  $updatequery = mysqli_query($con,"update department set d_name='$dn',d_phone='$dph' where d_id='$id'");

  if($updatequery)
{
  ?>
  <script>
    alert('updated successfull');
  </script>
  
  <?php
}
else
{
  ?>
  <script>
    alert('Not updated');
  </script>

  <?php
}

  //id not apply because thats autoincrement
  header("location:fetchA.php");
}
?>
</div>
