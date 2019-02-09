<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>
<?php
$uid = $_SESSION['user'];
?>

<html>
<head>
<title>eBook</title>
<link rel="stylesheet" type="text/css" href="cssmain\goals.css">
</head>

<body>
<div id="wrapper">
<div id="header">
<br>
<a href="userhomepage.php" style="width:0px"><h1>eBook</h1></a>
  
  <div id="dropdown">
   <ul id="drop-nav" style="font-family:Arial;">
  
  <li><a href="userhomepage.php">HOME</a>
  </li>
  <li><a href="#">MY ACTION</a>
    <ul>
      <li><a href="books.php">View Books</a></li>
      <li><a href="issue.php">My Issue Status</a></li>
      
    </ul>
  </li>
  <li><a href="#">ABOUT US</a>
    <ul>
	</ul>
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

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px; width: 1295px; height:160px">
	<p ><font size='8px' color='#2266FF'><img src="images\userinfo.png" alt="University"
  style="float:left;width:200px;height:150px;"> <b>USER INFO<b></font></p>
</div>
 
<<div style="background-color:white; color:black; padding:20px; margin-top:0px; width:1275px; height:200px">

<center><h1></h1></center>
<table width='800' height='150' align='center' border='5' style="font-size:22px;">
   <tr bgcolor='brown'>
		<th>User ID</th>
		<th>User Name</th>
		<th>User Password</th>
		<th>Gender</th>
   </tr>
   <tr>
 <?php
 $conn=mysqli_connect("localhost","root","","library");
 //mysql_select_db("library");
   $query = "SELECT * FROM  `user` WHERE  `rno` LIKE  '$uid'";
   $run = mysqli_query($conn,$query);
 while(($row=mysqli_fetch_array($run)))
 {
	$user_id = $row[2];
	$user_name = $row[1];
	$user_pass = $row[3];
	$gen = $row[4];
 ?>
  <td><?php echo $user_id ;?></td>
  <td><?php echo $user_name; ?></td>
  <td><?php echo $user_pass ;?></td>
  <td><?php echo $gen; ?></td>
 </tr>
 <?php } ?>
 </table>
 </div>
</body>
</html>
