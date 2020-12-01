<html>
<head>
	<title>Tournament Portal</title>
  <style>
body  {
  background-image: url("kab.jpg");
  background-repeat: no-repeat;
  background-image : height=100px;
  background-image: width=100px;
  background-position:center;
   
}
</style>
<style>
 #container {
     width: 1400px;
     background: white;
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
     box-shadow: 10px 20px 10px #000;

     

     
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
   </style>
   <style>
    img:hover {
  opacity: 0.5;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}
</style>

<style>
.mySlides {display:none;}

ul {
  list-style-type: none;
   padding: 0; 
  background-color: blue;
 }
  
  li {
  float: left;
  }

  li a {
  display: block;
  color: white;
  text-align:center;
  background-color: tomato;
  padding: 8px 50px;
  text-decoration: none;
  }
  
li a:hover {
background-color: black;
color: white;

}

.active {
background-color: green;}

</style>
<?php
if(!isset($_COOKIE['name10']))
{
  $name =$_COOKIE['name10']=0;
}
else
{
  $name=$_COOKIE['name10']+1;
}


setcookie('name10',$name,time()+36000);
if($name > 1)
{
echo "<script>alert('this is ur visiting $name time');</script>";
}
else
{
echo "<script>alert('this is ur visiting 1st time');</script>";

}
?>

  </head>
  <body bgcolor="skyblue">
   <div id="container"><center>
    <h1>PRO KABADDI</h1>
    <h2> Book your Slot and Enjoy the Game</h2></marquee> </center>

<ul>
    <li><a href="kabadi.php">Book Team</a></li>
  <li><a href="kab.php">Matches</a></li>
  <li><a href="main.php">Back</a></li>
  <li><a class="active" href="about.php">About us</a></li>
</ul><br><br><br><br>


</script>

     </div>
 </body>
</html>