<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>

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
  </li>
  <li><a href="#">MY ACTION</a>
    <ul>
      <li><a href="abooks.php">Book Database</a></li>
      <li><a href="addbooks.php">Add Book</a></li>
      <li><a href="astatus.php">Issue Book</a></li>	
      <li><a href="areturnfine.php">Return Book</a></li>	  	  
	  <li><a href="user.php">Member Database</a></li>
      
    </ul>
  </li>

  <li><a href="#">ABOUT US</a>
    <ul>
	  <li><a href="#agoals.php">Our Goals</a></li>
	  <li><a href="#amission.php">Mission, Vision & Core Values</a></li>
	  <li><a href="#acontactus.php">Contact Us</a></li>
	</ul>
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

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px; width: 1295px; height:160px">
	<p ><font size='8px' color='#2266FF'><img src="images\adminissue.jpg" alt="University"
  style="float:left;width:200px;height:150px;"> <b><br>BOOKS TO BE ISSUED<b></font></p>
</div>

<<div style="background-color:white; color:black; padding:20px; margin-top:0px; width:1275px; height:auto">

<table width='800' align='center' border='5'>
   <tr bgcolor='brown'>
		<th>ROLL NO.</th>
		<th>BID</th>
		<th>BOOK NAME</th>
		<th>ISSUE DATE</th>
		<th>ISSUED</th>
		<th>CANCEL ISSUE</th>
   </tr>
   <tr>
 
  <?php
 $conn=mysqli_connect("localhost","root","","library");
   $query = mysqli_query("SELECT * FROM  `issue` WHERE  `status` NOT LIKE  'YES' ");
  while(($row2=mysqli_fetch_array($query))){
   $issueid=$row2[0];
   $bookid=$row2[2];
   $rollno=$row2[1];
   $query2=mysqli_query("SELECT * FROM  `book` WHERE  `bid` = $bookid ");
 while(($row=mysqli_fetch_array($query2)))
 {
	$book_name = $row[1];
	$date = $row2[3];

 ?> 
  <td><center><?php echo $rollno ;?></center></td>
  <td><center><?php echo $bookid; ?></center></td>
  <td><center><?php echo $book_name; ?></center></td>
  <td><center><?php echo $date; ?></center></td>
  <td><center><a href='aconfirm.php?con=<?php echo $issueid;?>' style="color: blue">Confirm</center></td>  
  <td><center><a href='acancel.php?del=<?php echo $issueid;?>' style="color: blue">Cancel</center></td>
  
 </tr>
 <?php } }?>
 
 </table>
 </div>
</body>
</html>
