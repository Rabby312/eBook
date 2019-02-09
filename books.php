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
<style>
img{
  height:250px;
  width: 250px;
}
</style>

</head>

<body>
<div id="wrapper">
<?php
$usernm = $_SESSION['name'];
?>
<div id="header">
<br>
<a href="userhomepage.php"><h1>eBook</h1></a>

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
	<p ><font size='8px' color='#2266FF'><img src="images\books.jpg" alt="University"
  style="float:left;width:200px;height:150px;"> <b>BOOKS INFO<b></font></p>
</div>

<div style="background-color:white; color:black; padding:20px; margin-top:10px; width:1275px; height:auto">
<table width='800' align='center' border='5'>
   <tr bgcolor='brown'>
		<th>BOOK ID</th>
		<th>BOOK IMAGE</th>
		<th>BOOK NAME</th>
		<th>AUTHOR</th>
		<th>PUBLICATION</th>
		<th>ACTION</th>
   </tr>
   <tr>
 <?php
 $conn=mysqli_connect("localhost","root","","library");
 //mysql_select_db("library");
   $query = "select * from book ORDER BY bid DESC";
   $run = mysqli_query($conn,$query);
 while(($row=mysqli_fetch_array($run)))
 {
	$book_id = $row[0];
	$book_name = $row[1];
	$author=$row[2];
	$pub = $row[3];
	$branch = $row[4];
	//$image=$row[6];
 ?>
  <center><td><center><?php echo $book_id ;?></center></td>
  <td><center><?php echo "<img src='books/".$row['image']."'>";?></center></td>
  <!--<td><center><img src="<?php echo $image; ?>" width="200" height="250"></center></td>-->
  <td><center><?php echo $book_name ;?></center></td>
  <td><center><?php echo $author; ?></center></td>
  <td><center><?php echo $pub; ?></center></td>
  <td><center><a href='take.php?book=<?php echo $book_id;?>' style="color: blue">Issue</center></td>
 </tr>
 <?php } ?>
 </table>
 </div>
 <div id="footer">
Copyrights(TM) 2019
</div>
 </div>
</body>
</html>