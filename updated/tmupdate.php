<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kiran";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Connection failed: ".mysqli_connect_error());
}
?>
 <html><style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: gray}

th {
  background-color: #4CAF34;
  color: white;
}</style>

<style>
input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>


 <body bgcolor="skyblue">
     <form name="frmdropdown" method="post" action="">
     <center>
            <h3><b>You can participate in some other tournaments also, we are providing their links to you, so that you can visit their site, there you can book ur slots</b></h3><br><br>
            <h3 align="center">Tournaments till now updated</h3>
      
     <br><br>

   <table border="1">
 <tr align="center">
     <center><th style='text-align:center'>Tournament Name</th><center>      
 </tr>

 <?php
// session_start();
//if ($_SESSION['login2'])
//{
    //if(isset($_POST['submit']))
    //{
        $res= "Select tournament_name from teamupdate";
        $s=mysqli_query($conn,$res);
        //echo $s;
        //echo "<tr><td colspan='5'></td></tr>";
        while($r=mysqli_fetch_row($s))
        //$r=mysqli_fetch_row($s);
        //$a= explode(' ',$s);
        //print_r ($a);
        

        {
                //"<td><a href=add_borrower.php?id=" . $rows['id'] . ">Borrow</a></td>"
            echo "<tr>";
            echo "<td style='text-align:center'><a href = $r[0] >$r[0]</td>";
             echo "</tr>";
             //echo "<tr>";
            //echo "<td></td>"
        }
    //}
//}
  /*  else
    {
        header("location:scdlogin.php");
        session_destroy();
    }*/


 
?>
  </table>

 </center>
</form>

<button onclick="window.location.href = 'home.php';">Home</button><br><br>
</body>
</html>