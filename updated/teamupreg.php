<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'kiran';
$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit']))
{
  $uname = $_POST['uname'];

  $em = $_POST['email'];
                                                                        
  $pw    = $_POST['pw'];

  $query = "INSERT into teamreg VALUES ('$uname','$em','$pw')";
  $result = mysqli_query($dbconn,$query);
  if($result)
  {
    echo "<script>alert('REGISTERED SUCCESSFULLY');";
    echo'window.location="teamupdate.php"</script>';
  }
  else
  {
    echo "<script>alert('SORRY! CAN'T ABLE TO INSERT');</script>";
  }
}

?></head>
<body>
  <style>
    body  {
  background-image: url("k1.jpg");
  background-repeat: repeat;
 
}
 #container 
 {
     width: 600px;
     background: #fff;
     color: #555;
     border: 3px solid #ccc;
     -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
     -ms-border-radius: 10px;
     border-radius: 10px;
     border-top: 3px solid #ddd;
     padding: 1em 2em;
     margin: 0 auto;
     -webkit-box-shadow: 3px 7px 5px #000;
     -moz-box-shadow: 3px 7px 5px #000;
     -ms-box-shadow: 3px 7px 5px #000;
     box-shadow: 3px 7px 5px #000;
   }
 
    ul {
     list-style: none;
     padding: 0;
    }
 
    ul > li {
     padding: 0.12em 1em
    }
 
    label {
     display: block;
     float: left;
     width: 130px;
    }
 
    input, textarea {
     font-family: Georgia, Serif;
    }
   </style><center>
<div id="container">
<h1>Team Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="uname" placeholder="Username"  maxlength="20" required /><br><br>
<input type="email" name="email" placeholder="email" required /><br><br>
<input type="password" name="pw" placeholder="Password" required /><br><br>

<input type="submit" name="submit" value="Register" /><br><br>
</form>
<a href="home.php" >home</a> <br>
Already a member?<a href="teamuplogin.php">sign in</a>
</center>


</body>
</html>