<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>eBook</title>
<link rel="stylesheet" type="text/css" href="cssmain\admin.css">
</head>

<body>
<div id="wrapper">
<div id="header">
<br>
<a href="adminhomepage.php"><h1>eBook</h1></a>

 <div id="dropdown">
   <ul id="drop-nav" style="font-family:Arial;">
  
  <li><a href="adminhomepage.php">HOME</a>
  <li><a href="#">MY ACTION</a>
    <ul>
      <li><a href="abooks.php">Book Database</a></li>
      <li><a href="addbooks.php">Add Book</a></li>	  	  
	  <li><a href="user.php">Member Database</a></li>
      
    </ul>
  </li>

  <li><a href="#">ABOUT US</a>
      </li>
  <li><a href="#">MY ACCOUNT</a>
    <ul>
	  <li><a href="alogout.php">Logout</a></li>
	</ul>
  </li>	  
</ul>
   
  </div>
</div>
<hr>

<div style="background-color:white; color:black; padding:20px;margin-left:350px;margin-top:20px; width:600px;border-radius: 20px 20px 20px 20px;">

<center><img src="images\success.png" alt="Thank You" style="width:400px;height:300px;border:0"></center>

<p style="color:black;text-align:center;font-size: 40px"><b>UPLOAD SUCCESSFULL...!!!</a></p>
</div>
<div id="footer">
Copyright © 2019
</div>

</body>

</html>