<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kiran1";
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
  <button onclick="window.location.href = 'khome.php';">Home</button><br><br>
     <form name="frmdropdown" method="post" action="">
     <center>
            <h2>Team battels</h2><br><br>
            
      
     <br><br>

   <table>
 <tr align="center">
  
     <th style='text-align:center' >Teamname</th><th></th><th style='text-align:center'>Teamname</th> <th style='text-align:center'>Ground</th> <th style='text-align:center'>Date   and   Time</th>    
 </tr>


 <?php
 //session_start();
//if ($_SESSION['login2'])
//{
  $count=0;
  $tr=0;
  $dd=05;
  $mm=01;
  $yy=2020;
  //  if(isset($_POST['submit']))
    //{
        $res= "Select teamname from kabadi";
        $s=mysqli_query($conn,$res);
        
        //echo $s;
        //echo "<tr><td colspan='5'></td></tr>";
        while($r=mysqli_fetch_row($s))
        
        

        {
            if ($count==0)
                echo "<tr  >";

              
            echo "<td style='text-align:center'>$r[0]</td>";
            if($tr==0)
                  echo "<td width = '15px'>v/s</td>";
              
               $tr =1;
             $count+=1;
            if($count==2)
            {

              echo "<td style='text-align:center'>Ramaiha ground</td><td style='text-align:center'>$dd-$mm-$yy   10:00 AM</td><td"; 
              $dd +=1;
              $tr=0;
             echo "</tr>";
             $count=0;
           }
             //echo "<tr>";
            //echo "<td></td>"
        }
    
//}

 
?>  </table>

 </center >
</form>


</body>
</html>