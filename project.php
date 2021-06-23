<body bgcolor="orange">
<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px; border-radius: 10px; margin-top: 130px;">
    <h2 align="center">College Information</h2>
<form action="" method="post">
  <fieldset>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="cname" value="" placeholder="Enter College Name" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="coffice" value="" placeholder="Enter College Office" style="padding: 5px; width: 90%">
    </div>
    <div style="padding: 10px; text-align: center;">
      <input autocomplete="off" type="text" name="cphone" value="" placeholder="Enter College Phone" style="padding: 5px; width: 90%">
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
  $cn = $_POST['cname'];
  $cof = $_POST['coffice'];
  $cph = $_POST['cphone'];

  //insert a data here
  mysqli_query($con,"insert into college(c_name,c_office,c_phone) values('$cn','$cof','$cph')");
  
  //id not apply because thats autoincrement
  echo "<div style='box-shadow:1px 1px 5px 1px rgb(255,90,40);'>Data Inserted Successfully<div>";
}
?>
</div>
<div style="padding: 10px; margin-top: 20px;">
<center><a href="fetch.php"><button type="button" class="btn btn">View Records</button></a></center>
</div>