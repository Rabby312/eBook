<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}?>

<?php
$conn=mysqli_connect("localhost","root","","library");

$delete_id = $_GET['del'];

$query = "delete from book where bid='$delete_id'";
if(mysqli_query($conn,$query)){
echo "<script>alert('book has been deleted!')</script>";
header("location:abooks.php");
}
?>