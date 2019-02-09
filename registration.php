<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>eBook</title>
<style>
body {
    background-image: url("library.jpg");
	background-size: 1366px 768px;
    background-repeat: no-repeat;
}
h1 {
    font-family: Gill Sans, Verdana;
	font-size: 60px;
	color: #2266FF;
}
p{
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
#header {
    background-color:white;
    color:white;
    text-align:left;
	padding: 5px;
}

#footer {
    color:black;
    clear:both;
    text-align:center;
    padding:5px;
    margin-top: 30px;	
}

</style>
</head>
<body>
<div id="header">
  <a href="index.html">
<pre><h1><img src="images\librarysymbol.gif" alt="Logo"
  style="float:left;width:100px;height:100px;border-radius: 20px 20px 20px 20px;">eBook</h1></pre>
</a>
</div>
<div style="background-color:white; color:black; padding:20px;margin-left:175px;margin-top:20px; width:450px; height: 525px;border-radius: 20px 20px 20px 20px;">

<p style="color:black;text-align:center;font-size: 30px"><b>Create your eBook Account</b></p>
<pre><form id='register' action='registration.php' method='post' accept-charset='UTF-8' style="font-size:20px;color:black">
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='name' >Your Full Name*  : </label><input type='text' name='name'  style="height: 22px;font-size: 18px;"/><br>
<label for='gender'>Gender*          : </label><input type="radio" name="sex" value="male">Male <input type="radio" name="sex" value="female">Female<br>
<label for='username' >UserID*          : </label><input type='text' name='id'   style="height: 22px;font-size: 18px;"/><br>
<label for='password' >Password*        : </label><input type='password' name='pass1'  style="height: 22px;font-size: 18px;"/><br>
<label for='password' >Confirm Password*: </label><input type='password' name='pass2'   style="height: 22px;font-size: 18px;"/><br>
<pre style="color:black;font-size: 16px;font-family: 'Open Sans', Arial, Helvetica, sans-serif;"><input type="checkbox" name="con" value="Bike"><b> I agree to the eBook Terms of Service and Privacy Policy</b><br></pre>
<input type='submit' name='submit' value=""  style="border-style: none; background: url('images/signup.jpg') no-repeat; width: 111px; height: 30px;float:right;"/>
</form>
</div>
<div id="footer">
Copyright (TM) 2019
</div>

</body>

</html>
<?php 
$conn=mysqli_connect("localhost","root","","library");
//$sql=mysqli_select_db("library");
   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password1 = $_POST['pass1'];
	$password2 = $_POST['pass2'];
	error_reporting(0);
	$sex=$_POST['sex'];
	$id = $_POST['id'];
	error_reporting(0);
	$check=$_POST['con'];
	
	if($name==''){
	echo "<script>alert('Please enter your name!')</script>";
	exit();
   }
   
   if($password1==''){
	echo "<script>alert('Please enter your password1!')</script>";
	exit();
   }
   
   if($id==''){
	echo "<script>alert('Please enter your Roll no!')</script>";
	exit();
   }
   if($sex==''){
	echo "<script>alert('Please select your Gender!')</script>";
	exit();
   }
   if(empty($check)){
   echo"<script>alert('Please agree the terms to continue')</script>";
   }else{
    if($password1==$password2)
   {
     $que=mysqli_query("SELECT * FROM  `user` WHERE  `rno` LIKE  '$id'");
	 $res=mysqli_num_rows($que);
	 if($res==1){
   echo"<script>alert('Already Registered')</script>";
	 exit();
   
   }else{
   $query = "INSERT INTO  `library`.`user` (`id` ,`name` ,`rno` ,`pass` ,`gender`)VALUES (NULL ,  '$name',  '$id',  '$password1',  '$sex')";
	if(mysqli_query($conn,$query))
	 header("Location:thank.html");
   } }
   else{
    echo "<script>alert('Password not match')</script>";
     exit();
   }
 }  }
   
   
?>