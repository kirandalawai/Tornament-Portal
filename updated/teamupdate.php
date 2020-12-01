<html>
<head>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'kiran';
$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error());
}
 session_start();
if ($_SESSION['login1']==true)
  {
    if (isset($_POST['submit']))
    {
      $a = $_POST['n1'];
      $b = $_POST['n2'];
      $c = $_POST['n3'];
      $d = $_POST['n4'];
      $e = $_POST['n5'];
      $f = $_POST['n6'];
      $g = $_POST['n7']; 
      $query = "INSERT into `teamupdate` VALUES ('$a', '$b','$c','$d','$e','$f','$g')";
      $result = mysqli_query($dbconn,$query);
      if($result)
      {
      echo "<script>alert('updated successfuly');</script>";
      }
      else
      {
        echo "<script>alert('failed to insert');</script>";
      }
    }
  }
  else
  {
    header("location:teamuplogin.php");
    session_destroy();
  }
  //
?>


</style>

<style>
input[type=text],input[type=email],input[type=number],input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>



<div>
  <form action="" method = "POST">
    <center><h2>Tournament Updates</h2></center>
    <h3>Enter the Necessary Details</h3>

    <label for="fname"><b>Tournament name<font color ="red">*</font></label>
      <input type="text"  name="n1" placeholder="Team name.." required>

          <label for="fname"><b>Email(Organizer)<font color ="red">*</font></label>
      <input type="email"  name="n2" placeholder="Email..." required>

      <label for="fname"><b>Ph_no(Organizer)<font color ="red">*</font></label>
      <input type="number" name="n3" placeholder="Phone..."  maxlength="10" required>
  
       <label for="fname"><b>Ground<font color ="red">*</font></label>
      <input type="text"  name="n5" placeholder="Ground.." required>

       <label for="fname"><b>Landmark<font color ="red">*</font></label>
      <input type="text"  name="n6" placeholder="landmark..." required>

       <label for="fname"><b>Address<font color ="red">*</font></label>
      <input type="text"  name="n7" placeholder="Address..." required>


          

       <input type="submit" name="submit" value="Submit">

       <a href ="home.php">Home</a>
</div>
</body>
</html>










