<html>
<head>
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
<?php

if (isset($_POST['submit1']))
    {

        echo "<script>alert('succesfuly completed');</script>";
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
        $name = $_POST['select'];
        $phone = $_POST['name'];
        $amt = $_POST['amt'];
        /*$email    = $_POST['n4'];
        $adhar     = $_POST['n5'];
        $addres    = $_POST['n6'];*/



        echo  "<h3>Card type ".$name."<br></h3>";
        echo  "<h3>Card holder name ".$phone."<br></h3>";
        echo  "<h3>Paid amount ".$amt."<br></h3>";
        

        /*echo  "<h3>email ".$email."<br></h3>";
        echo  "<h3>Adhar No ".$adhar."<br></h3>";
        echo  "<h3>Address ".$addres."<br></h3>";*/

    }
    ?>
</head>

    <body bgcolor="skyblue">

        <div>
    <form name="" action="" method="post">
        <h2>Card payment</h2>
        Select card type:<select name="select">
            <option hidden=''>select</option>
            <option value="visa">visa</option>
            <option value="master">master</option>
            <option value="rupay">rupay</option>
        </select><br>

        <label for="fname"><b>Enter the Card Num:<font color ="red">*</font></label>
        <input type="number" name="card" placeholder="card num..." required><br>


        Enter the Pin:<input type="number" name="card1" placeholder="pin..." required><br>
        Expiry date:<input type="date" name="cdate" placeholder="expiry date.." required><br>
        Amount to be paid :<input type="number" name="amt" value="500" readonly><br>
        Card holder name:<input type="text" name="name" placeholder="card holder name"  required><br>
        <input type="submit" name="submit1">
        <a href = "home.php">Home</a>
        
</form>
</div>
<?php
/*if(isset($_POST['submit1']))
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

        session_start();
//echo $_SESSION['name'];

        $name   = $_SESSION['name'];
        $phone = $_SESSION['name1'];
        $email    = $_SESSION['name2'];
        $adhar     = $_SESSION['name4'];
        $addres    = $_SESSION['name5'];

        $query = "INSERT INTO cricket_reg VALUES ('$name','$phone','$email','$adhar','$addres')";
            if(mysqli_query($dbconn ,$query))
            {
                echo "<script>alert('SUBMITED SUCCESSFULLY');</script>";
            }
            else
            {
                echo "<script>alert('FAILED TO INSERT');</script>";
            }
}*/
?>
</body>
</html>


















