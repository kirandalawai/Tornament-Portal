<?php

//echo "Connected successfully";
session_start();

if(isset($_POST['submit2'])) {
	$_SESSION['name'] = $_POST['n1'];
	$_SESSION['name1'] = $_POST['n3'];
	$_SESSION['name2'] = $_POST['n4'];
	$_SESSION['name3'] = $_POST['n5'];
	$_SESSION['name4'] = $_POST['n6'];

	header('location:try.php');	
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
  <form method = "POST">
    <center><h2>Team Updates</h2></center>
    <h3>Enter the Necessary Details</h3>
    <label for="fname"><b>Team Name<font color ="red">*</font></label>
    <input type="text" id="fname" name="n1" maxlength="20"  placeholder="Team name.." required>
    <label for="fname">Phone No(Captain)<font color ="red">*</font></label>
    <input type="number" id="fname" name="n3" maxlength=10   placeholder="Phon no.." required>
    <label for="fname">Email(Captain)<font color ="red">*</font></label>
    <input type="email" id="fname" name="n4" placeholder="email.." required>
    <label for="fname">Adhar No(Captain)<font color ="red">*</font></label>
    <input type="number" id="fname" name="n5" minlenght="12" maxlength="12"  placeholder="Adhar.." required>
    <label for="fname">Address</label>
    <input type="text" id="fname" name="n6" placeholder="Address..">
       <input type="submit" name="submit2" value="Proced to pay entry fee">
       <a href ="home.php">Home</a>
    </form>
</div>
</body>
</html>
    



