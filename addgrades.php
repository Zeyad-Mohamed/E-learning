<?php include('gardesserver.php') ?>

<html>
<head>

<link href="ags.css" rel="stylesheet" type="text/css">
</head>
<body>

 <ul>
  <li><a href="disscus.php">Disscutions</a></li>
  <li class="dropdown">
  </li>
 </ul>
	
	<div id="signinbox">
<div class="container">
 <form method="post" action="addgrades.php">

		

		<div class="input-group">
			<label>Coursename</label>
			<input type="text" name="coursename" value="<?php $coursename; ?>">
		</div>
		
				<div class="input-group">
			<label>Grade</label>
			<input type="text" name="grade" value="<?php $grade; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="add_gra">Add</button>
		</div>
		
	</form>
</div>
</div>


<footer id="footer">
  <p>Copyright © WebDevelopment Project</p>
</footer>
</body>
</html>