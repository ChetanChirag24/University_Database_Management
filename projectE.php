<body bgcolor="orange">
<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px; border-radius: 10px; margin-top: 130px;">
    <h2 align="center">Student Information</h2>
<form action="" method="post">
  <fieldset>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="dob" value="" placeholder="Enter Student dob" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="sname" value="" placeholder="Enter Student Name" style="padding: 5px; width: 90%">
    </div>
     <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="saddr" value="" placeholder="Enter Student Address" style="padding: 5px; width: 90%">
    </div>
     <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="sphone" value="" placeholder="Enter Student Phone" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input type="submit" name="insert" value="Insert" style="padding: 10px; width: 30%">
    </div>
  </fieldset>
</form>
<?php
if(isset($_POST['insert']))
{
  //connection
  $con = mysqli_connect("localhost:3307","root","","university");
  //variable and value passing here
  $dob = $_POST['dob'];
  $sna = $_POST['sname'];
  $sadd = $_POST['saddr'];
  $sph = $_POST['sphone'];

  //insert a data here
  mysqli_query($con,"insert into student(dob,s_name,s_address,s_phone) values('$dob','$sna','$sadd','$sph')");
  
  //id not apply because thats autoincrement
  echo "<div style='box-shadow:1px 1px 5px 1px rgb(255,90,40);'>Data Inserted Successfully<div>";
}
?>
</div>
<div style="padding: 10px; margin-top: 20px;">
<center><a href="fetchE.php"><button type="button" class="btn btn">View Records</button></a></center>
</div>