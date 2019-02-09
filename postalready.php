<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>

<html>
<head>
<meta charset="utf-8">
<title>eBook</title>
<link rel="stylesheet" type="text/css" href="cssmain\user.css">
</head>

<body>
<div id="wrapper">
<?php
$usernm = $_SESSION['name'];
?>
<div id="header">
<br>
<pre><h1><a href="userhomepage.php"><img src="images\librarysymbol.gif" alt="Logo"
  style="float:left;width:100px;height:100px;border-radius: 20px 20px 20px 20px;"> eBook</a></h1></pre>

 <div id="dropdown">
   <ul id="drop-nav" style="font-family:Arial;">
  
  <li><a href="userhomepage.php">HOME</a>
  </li>
  <li><a href="#">MY ACTION</a>
    <ul>
      <li><a href="books.php">View Books</a></li>
      <li><a href="issue.php">View Issue History</a></li>
      
    </ul>
  </li>
  <li><a href="#">ABOUT US</a>
  </li>
  <li><a href="#">MY ACCOUNT</a>
    <ul>
	  <li><a href="profile.php">View Profile</a></li>
	  <li><a href="logout.php">Logout</a></li>
	</ul>
  </li>	  
</ul>
   
  </div>
</div>
<hr>
<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px;margin-left:327px; width: 600px; height:500px">
	<img src="images\sorry.jpg" alt="University" style="float:left;width:400px;height:300px;margin-left: 100px;">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center><p ><font size='7px' color='black'><b>YOU HAVE ALREADY<br>COLLECTED BOOK FROM eBook<b></font></p></center>
</div>
 <div id="footer">
Copyrights(TM) 2019
</div>
</div>
</body>
</html>