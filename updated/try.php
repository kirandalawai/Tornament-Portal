<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
</head>
<?php

session_start();
echo $_SESSION['name'];

	if(isset($_POST['submit'])) {
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
        //session_start()
        $name = $_SESSION['name'];
        $name1 = $_SESSION['name1'];
        //$name2 = $_SESSION['name2'];
        //$name3 = $_SESSION['name3'];
        //$name4 = $_SESSION['name4'];

        $query = "INSERT INTO cricket_reg VALUES ('$name','$name1','FYF@GAHA',654654,'SIUH')";
            if(mysqli_query($dbconn ,$query))
            {
                echo "<script>alert('SUBMITED SUCCESSFULLY');</script>";
            }
            else
            {
                echo "<script>alert('FAILED TO INSERT');</script>";
            }
        }
    ?>


<body>
	<form method="POST">
		<input type="text" name="name">
		<input type="submit" name="submit">
	</form>
</body>
</html>