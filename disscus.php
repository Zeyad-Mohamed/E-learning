<?php include('discussserver.php') ?>
<html>
<head>
<link href="02style.css"  rel="stylesheet" type="text/css">
<style>

body{

margin :0;
}



#morb3
{
width : 560px;

background-color : #eef4ff;
margin-left : 30%;

padding : 5%;


border-style : solid;
border-color :  white;

border : 1 px 
background-color : #eef4ff;

box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.2);
}
#elform
{
margin-left: 30%;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #00cccc;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
float : left;
}
input[type=submit]:hover {
  background-color: #00cccc;
}
.commentf {
  position: absolute;
  top: 30%;
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}





#footer {

  background-color: #003399;
  padding: 5px;
  text-align: left;
  color: white;
position : absolute;
   left: 0;
   bottom: 0;
   width: 100%;
  
  
}
ul {
    list-style-type: none;
    margin: 0;
	margin-bottom : 5%;
    padding: 0;
    overflow: hidden;
    background-color:#003399 ;
	
}

li {
    float: left;
}


#btn
{

  background-color: #003399; 
width : 102px;
height :50px;
  border: none;
  color: white;
  padding: 14px;
  text-align: center;
  border-radius: 5px;
margin-top:10px;
margin-left: 34%;
 
  text-decoration: bold;
  font-size : 22px;
  display: inline-block;
  
  
  cursor: pointer;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #00cccc;
}

li.dropdown {
    display: inline-block;
}

#name
{
    margin-top: -84px;
    margin-left: -82px;
	font-size : 25px;
	text-decoration : bold;
}
#content
{
margin -left : 50px;
}

#elcon
{
	height : 0px;
}

#elesm
{
	    width: 48%;
    margin-left: 0%;
}
#tktk{

    margin-left: 26px;
}
</style>
</head>
<body>


 <ul>
  <li><a href="disscus.php">Disscutions</a></li>
  <li class="dropdown">
  </li>
 </ul>

 <form id="elform" method="post" action="disscus.php">

		

		<div id="elesm">
			<label>Name</label>
			<input id="tktk" type="text" name="name" value="<?php $name; ?>">
		</div>
		
			<div id="elcon">
			<label>Comment</label>
			<input type="text" name="content" value="<?php $content; ?>">
		</div>
		
		<div class="input-group">
			<button type="submit" id="btn" name="add_com">Post</button>
		</div>
		
	</form>



<?php
$con = mysqli_connect('localhost','root','','announcements');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM comments_1 ";
$result = mysqli_query($con,$sql);



while($row = mysqli_fetch_array($result)) {
	?>
  <div id="morb3">
    <p id="name"> <?php echo $row['name'] ?> </p>
	<p id="content"> <?php echo $row['content'] ?> </p>
  </div>
  
  
  <?php


}

mysqli_close($con);
?>










<footer id="footer">
  <p>Copyright © WebDevelopment Project</p>
</footer>




</body>
</html>