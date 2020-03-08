<?php include('emailserver.php') ?>

<html>
<head>

<link href="sentemailstyle.css" rel="stylesheet" type="text/css">
</head>
<body>

 <ul>
  <li><a href="disscus.php">Disscutions</a></li>
  <li class="dropdown">
  </li>
 </ul>

<div class="container">
 <form method="post" action="sentemail.php">

		

		<div class="input-group">
			<label>To</label>
			<input type="text" name="sent" value="<?php $sent; ?>">
		</div>
		
				<div class="input-group">
			<label>Subject</label>
			<input type="text" name="subject" value="<?php $subject; ?>">
		</div>
			<div class="input-group">
			<label>From</label>
			<input type="text" name="receive" value="<?php $receive; ?>">
		</div>
		
		<div class="input-group">
			<label>Content</label>
			<input id="kber" type="text" name="content" value="<?php  $content; ?>">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="sent_mail">Send</button>
		</div>
		
	</form>
</div>


<footer id="footer">
  <p>Copyright © WebDevelopment Project</p>
</footer>
</body>
</html>