<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>

<?php
$conn=mysqli_connect("localhost","root","","library");
//mysql_select_db("library");
$id=$_GET["book"];
$usernm = $_SESSION['user'];
$sql="SELECT * 
FROM  `issue` 
WHERE  `rollno` =  '$usernm'
AND  `bid` =  '$id'";
$query2 = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query2);
$status=$row[5];
$del=$row[0];
if($status=='YES'){
  header("Location:postalready.php");
  echo "You have taken book from library";
}else{
	$sql1="DELETE FROM `library`.`issue` WHERE `issue`.`id` = $del";
$que=mysqli_query($conn,$sql1);
if($que){
echo "Cancelled";
header("Location:postcancel.php");
} }
?>