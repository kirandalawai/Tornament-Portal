<?php

//echo "Connected successfully";
session_start();
if ($_SESSION['login']==true)
{
    if (isset($_POST['submit']))
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'kiran';
        $dbconn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
//mysqli_select_db($db);
        if (!$dbconn)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

      $name   = $_POST['n1'];
      $phone = $_POST['n3'];
      $email    = $_POST['n4'];
      $adhar     = $_POST['n5'];
      $addres    = $_POST['n6'];
        $query = "INSERT INTO cricket_reg VALUES ('$name','$phone','$email','$adhar','$addres')";
        if(mysqli_query($dbconn ,$query))
        {
            echo "<script>alert('SUBMITED SUCCESSFULLY');</script>";
            header('location:payment.php');
        }
        else
        {
            echo "<script>alert('FAILED TO INSERT');</script>";
        }
    }
 }
 else
 {
  header("location:login.php");
  session_destroy();
 }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User login</title>
    </head>
    
</style>

<style>
input[type=text],input[type=email],input[type=number], select {
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
    <center><h2>Team Updates</h2></center>
    <h3>Enter the Necessary Details</h3>
    <label for="fname"><b>Team Name<font color ="red">*</font></label>
    <input type="text" id="fname" name="n1" placeholder="team name contains only a-z charecters" required>

    <label for="fname">Phone No(Captain)<font color ="red">*</font></label>
    <input type="number" id="fname" name="n3" pattern="[0-9]" placeholder="Phon no.." required>
    
    <label for="fname">Email(Captain)<font color ="red">*</font></label>
    <input type="email" id="fname" name="n4" placeholder="email.." required>
    
    <label for="fname">Adhar No(Captain)<font color ="red">*</font></label>
    <input type="number" id="fname" name="n5" placeholder="Adhar.." required>
    
    <label for="fname">Address</label>
    <input type="text" id="fname" name="n6" placeholder="Address..">
       <input type="submit" name="submit" value="Proceed to entry fee payment">
       <a href ="home.php">Home</a>
    </form>
</div>
</body>
</html>
    



