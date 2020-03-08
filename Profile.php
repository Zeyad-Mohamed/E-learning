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

<link href="profilestyle.css" type="text/css" rel="stylesheet" />
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
  <p class="title">Student</p>
  <p>MSA University</p>
  <p> <a href="index.php?logout='1'"> <button id="signout">Logout</button></p> </a>
</div>

<div id="box">



<a href="UCO.html"> <button class="button">My Courses</button> </a>
<a href="grades.php"> <button class="button">Grades</button> </a>
<a href="ajaxdb.php"> <button class="button">Email</button> </a>
<a href="library.html"> <button class="button">Library</button> </a>



</div>


<footer id="footer">
  <p>Copyright © WebDevelopment Project</p>
</footer>




















</body>
</html>