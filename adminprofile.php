<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<html>
<head>

<link href="adminprofilestyle.css" type="text/css" rel="stylesheet" />
</head>


<body>

 <ul>
  <li><a href="disscus.php">Disscutions</a></li>
  <li class="dropdown">
  </li>
 </ul>
<div class="card">
  <img src="https://thevoicefinder.com/wp-content/themes/the-voice-finder/images/default-img.png" alt="John" style="width:50%">
  <?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
  <p class="title">Admin</p>
  <p>MSA University</p>
  <p> <a href="index.php?logout='1'"> <button id="signout">Logout</button></p> </a>
</div>

<div id="box">




<a href="addgrades.php"> <button class="button">Add Grades</button> </a>
<a href="sentemail.php"> <button class="button">Send Email</button> </a>



</div>


<footer id="footer">
  <p>Copyright © WebDevelopment Project</p>
</footer>




















</body>
</html>