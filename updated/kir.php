<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<?php
		if (isset($_POST['submit'])) {
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="kiran";
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
			die("Connection failed : ".mysqli_connect_error());
		} 
		$un=$_POST['uname'];
		$ps=$_POST['password'];
		$sql="SELECT username,password FROM reg WHERE username='".$un."' && password='".$ps."'";
		$result=mysqli_query($conn,$sql);
		
	
		
		if(mysqli_num_rows($result)==1){
			session_start();
			$_SESSION['login'];
			echo "<script>alert('login succesful');</script>";
			header("location:kir1.php");
		}
		else{
			echo "<script>alert('login unsuccesful');</script>";
			//header("location:login.php");
		}
	}
	?>
</head>
<body>
<center>
<form name="myForm" method="post" action="">
	Username : <input type="text" name="uname"><br>
	Password : <input type="password" name="password"><br>
	<input type="submit" name="submit" value="Submit">
</form>
</center>
</body>
</html>