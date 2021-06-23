<body bgcolor="orange">
<!-- get id -->
<?php $i = $_GET['i']; ?>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px; border-radius: 10px; margin-top: 130px;">
    <h2 align="center">Department Information</h2>
<form action="" method="post">
  <fieldset>
    <div style="padding: 10px; text-align: center;">
      <!-- create hidden field and pass data to ID here -->
      <input type="hidden" name="co_id" value="<?php echo $i; ?>">
      <input autocomplete="off" type="text" name="coname" value="" placeholder="Enter Course Name" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="credits" value="" placeholder="Enter Course Credits" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="coduration" value="" placeholder="Enter Course Duration" style="padding: 5px; width: 90%">
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
  $id = $_POST['co_id'];
  $cona = $_POST['coname'];
  $cred = $_POST['credits'];
  $cod = $_POST['coduration'];
  
  //insert a data here
  $updatequery = mysqli_query($con,"update course set co_name='$cona',credits='$cred',co_duration='$cod' where co_id='$id'");

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
  header("location:fetchB.php");
}
?>
</div>
