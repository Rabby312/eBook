<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
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
<!-- Javascript -->
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
  <li><a href="search.php">SEARCH BOOKS</a>
    
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
<!-- Javascript -->

		<div id="examples_outer">

			<div id="slider_container_2">

				<div id="SliderName_2" class="SliderName_2">
					<img src="img/one.jpg" width="700" height="450" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description">Featured: <strong></strong></div>
					<img src="img/two.jpg" width="700" height="450" alt="Demo2 second" title="Demo2 second" />
					<div class="SliderName_2Description">Featured: <strong></strong></div>
					<img src="img/three.jpg" width="700" height="450" alt="Demo2 third" title="Demo2 third" />
					<div class="SliderName_2Description">Featured: <strong></strong></div>
					<img src="img/four.jpg" width="700" height="450" alt="Demo2 fourth" title="Demo2 fourth" />
					<div class="SliderName_2Description">Featured: <strong></strong></div>
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation_2"></div>
				<div class="c"></div>

				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 700, height: 450, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
						}
					});
				</script>

				<div class="c"></div>
			</div>
			<div class="c"></div>
		</div>
		<div class="c"></div>
<!-- Javascript -->
 
 <div class="up-right" style="background-color:#114466; color:black; padding:20px;margin-left:770px;margin-top:20px; width:500px;">

			<center><p ><font size="6px"><b>WELCOME, <?php echo $usernm;  ?></b></font></p></center>
			
</div>


<div id="footer">
Copyrights(TM) 2019
</div>
</div>
</body>
</html>