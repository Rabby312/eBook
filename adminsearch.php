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
<!-- Javascript -->
<link rel="stylesheet" type="text/css" href="cssmain\user.css">
<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Javascript -->
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
    <li><a href="user.php">Member Database</a></li>
      
    </ul>
  </li>
   <li><a href="adminsearch.php">SEARCH BOOK</a>
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
  <p ><font size='8px' color='#2266FF'><img src="images\books.jpg" alt="University"
  style="float:left;width:200px;height:150px;"> <b>BOOK SEARCH<b></font></p>
</div>

<div style="background-color:white; color:black; padding:20px; margin-top:10px; width:1275px; height:auto">

<div class="container">
   <br />
   <h2 align="center">Search Book Information</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by books Details" class=" " />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){ // A page can't be manipulated safely until the document is "ready." jQuery detects this state . $( document ).ready() will only run once the page Document Object Model (DOM) is ready for JavaScript code to execute.
 load_data();
 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",   // The data are send to the "fetch.php" file through POST method.
   method:"POST",
   data:{query:query},     
   success:function(data)     // The response from the server is placed into an HTML element which has id="result". This is output of ajax function
   {
    $('#result').html(data);    
   }
  });
 }
 $('#search_text').keyup(function(){    // jquery key-upevent
  var search = $(this).val();           // set search text to search variable
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
 </div>
 <div id="footer">
Copyrights(TM) 2019
</div>
 </div>
</body>
</html>