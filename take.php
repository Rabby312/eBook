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
$sql="SELECT * FROM  `issue` WHERE  `rollno` LIKE  '$usernm'";
$query2 = mysqli_query($conn,$sql);
$nbook=mysqli_num_rows($query2);
error_reporting(0);
$date=date('Y-m-d');
$row=mysqli_fetch_array($date);
if($nbook>=2){
header("Location:sorry.php");
}
else{
	$sql1="INSERT INTO `library`.`issue` (`id`, `rollno`, `bid`, `date`, `fine`) VALUES (NULL, '$usernm', '$id', '$date', '0')";
$query= mysqli_query($conn,$sql1);
if($query)
{
header("Location:receipt.php");
echo "<script>alert('Issued')</script>";
}
}

?>

