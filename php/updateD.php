<body bgcolor="orange">
<!-- get id -->
<?php $i = $_GET['i']; ?>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px; border-radius: 10px; margin-top: 130px;">
    <h2 align="center">Section Information</h2>
<form action="" method="post">
  <fieldset>
    <div style="padding: 10px; text-align: center;">
      <!-- create hidden field and pass data to ID here -->
      <input type="hidden" name="sec_id" value="<?php echo $i; ?>">
      <input type="text" name="year" value="" placeholder="Enter Year" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input type="text" name="scapa" value="" placeholder="Enter Section Capacity" style="padding: 5px; width: 90%">
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
  $id = $_POST['sec_id'];
  $yer = $_POST['year'];
  $sca = $_POST['scapa'];

  //insert a data here
  $updatequery = mysqli_query($con,"update section set year='$yer',sec_capacity='$sca' where sec_id='$id'");

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
  header("location:fetchD.php");
}
?>
</div>
