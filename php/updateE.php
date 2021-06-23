<body bgcolor="orange">
<!-- get id -->
<?php $i = $_GET['i']; ?>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px; border-radius: 10px; margin-top: 130px;">
    <h2 align="center">Student Information</h2>
<form action="" method="post">
  <fieldset>
    <div style="padding: 10px; text-align: center;">
      <!-- create hidden field and pass data to ID here -->
      <input type="hidden" name="s_id" value="<?php echo $i; ?>">
      <input type="text" name="dob" value="" placeholder="Enter Student dob" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input type="text" name="sname" value="" placeholder="Enter Student Name" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input type="text" name="saddr" value="" placeholder="Enter Student Address" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input type="text" name="sphone" value="" placeholder="Enter Student Phone" style="padding: 5px; width: 90%">
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
  $id = $_POST['s_id'];
  $dob = $_POST['dob'];
  $sna = $_POST['sname'];
  $sadd = $_POST['saddr'];
  $sph = $_POST['sphone'];

  //insert a data here
  $updatequery = mysqli_query($con,"update student set dob='$dob',s_name='$sna',s_address='$sadd',s_phone='$sph' where s_id='$id'");

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
  header("location:fetchE.php");
}
?>
</div>
