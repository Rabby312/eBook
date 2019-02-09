<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>
<?php
$usernm=$_SESSION['user'];
?>

<html>
<head>
<meta charset="utf-8">
<title>eBook</title>
<link rel="stylesheet" type="text/css" href="cssmain\user.css">
<style>
img{
  width: 250px;
  height: 250px;
}
</style>
</head>

<body>
<div id="wrapper">
<div id="header">
<br>
<pre><h1><a href="index.html"><img src="images\librarysymbol.gif" alt="Logo"
  style="float:left;width:100px;height:100px;border-radius: 20px 20px 20px 20px;"> eBook</a></h1></pre>

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
	<p ><font size='8px' color='#2266FF'><img src="images\history.jpg" alt="University"
  style="float:left;width:200px;height:150px;"> <b>MY ISSUED BOOKS<b></font></p>
</div>

<div style="background-color:white; color:black; padding:20px; margin-top:10px; width:1275px; height:auto">
<table width='800' align='center' border='5'>
   <tr bgcolor='brown'>
		<th>Book Image</th>
		<th>Book Name</th>
		<th>Author</th>
		<th>Publication</th>
		<th>Date of issue</th>
		<th>Fine</th>
		<th>Cancel</th>
   </tr>
   <tr>
 <?php
 $conn=mysqli_connect("localhost","root","","library");
 //mysql_select_db("library");
 $sql="SELECT * FROM  `issue` WHERE  `rollno` LIKE  '$usernm'";
   $query = mysqli_query($conn,$sql);
  while(($row2=mysqli_fetch_array($query))){
   $bookid=$row2[2];
   $sql1="SELECT * FROM  `book` WHERE  `bid` = $bookid ";
   $query2=mysqli_query($conn,$sql1);
 while(($row=mysqli_fetch_array($query2)))
 {
	$book_name = $row[1];
	$author=$row[2];
	$pub = $row[3];
	$date = $row2[3];
	$fine=$row2[4];
	$image=$row[6];
 ?>
  <!--<td><center><img src="<?php echo $image; ?>" width="200" height="250"></center></td>-->
  <td><center><?php echo "<img src='books/".$row['image']."'>";?></center></td>
  <td><center><?php echo $book_name ;?></center></td>  
  <td><center><?php echo $author ;?></center></td>
  <td><center><?php echo $pub; ?></center></td>
  <td><center><?php echo $date; ?></center></td>
  <td><center><?php echo $fine; ?></center></td>
  <td><center><a href='cancel.php?book=<?php echo $bookid;?>' style="color: blue">Cancel</center></td>
 </tr>
 <?php } }?>
 </table>
 <a href="receiptpdf.php">
<img src="images\save.png" alt="SAVE" style="width:30px;height:30px;border:0;float:right">
</a>
<br>
 </div>
 <div id="footer">
Copyrights(TM) 2019
</div>
</div>
</body>
</html>