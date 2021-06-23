<body bgcolor="blue">
<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px; border-radius: 10px; margin-top: 130px;">
    <h2 align="center">Department Information</h2>
<form action="" method="post">
  <fieldset>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="dname" value="" placeholder="Enter Department Name" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="dphone" value="" placeholder="Enter Department Phone" style="padding: 5px; width: 90%">
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
  $dn = $_POST['dname'];
  $dph = $_POST['dphone'];

  //insert a data here
  mysqli_query($con,"insert into department(d_name,d_phone) values('$dn','$dph')");
  
  //id not apply because thats autoincrement
  echo "<div style='box-shadow:1px 1px 5px 1px rgb(255,90,40);'>Data Inserted Successfully<div>";
}
?>
</div>
<div style="padding: 10px; margin-top: 20px;">
<center><a href="fetchA.php"><button type="button" class="btn btn">View Records</button></a></center>
</div>