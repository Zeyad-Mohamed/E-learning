<!DOCTYPE html>
<html lang="en">
<head>
<title>My Grades</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
#allpageopacity {
	background-color: black;
	opacity: 0.5;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  margin :0;
}

/* Style the header */
header {
  background-color: #003399; /*#666*/
  padding: 10px;
  text-align: left;
  font-size: 15px; /*35*/
  color: white;
}

/*Div Box*/
#divboxedit {
	/*text-align: center;*/
	/*padding: 1px;*/
}

#deiv{
	width: 175px;
	height: 100px;
	text-align: center;
	padding-top: 1px;
	background-color: #cdcdd3;
	margin: 5px;
	opacity: 0.9;
	
}
/*End of div box*/


/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
/*nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}*/

/* Style the list inside the menu */
/*nav ul {
  list-style-type: none;
  padding: 0;
}*/

/* Style the content */
#art {
  -webkit-flex: 3;
  -ms-flex: 3;
  height : 650px;
  flex: 3;
  margin:0;
  color: white;
  text-align: center;
  background-color: white;
  padding: 100px;
}
#leftside{
	position : absolute;
	left : 70%;
	bottom : 80%;
}

/*Editing the texts*/
#titlepage {
  text-align: center;
  color: white;
  font-weight: bold;
  font-size: 30px;
}
#paratext {
  color: white;
  font-size: 20px;
}
#divtxt {
  text-align: center;
  color: white;
  font-weight: bold;
  font-size: 20px;
}

/* Style the footer */
footer {

  background-color: #003399;
  padding: 5px;
  text-align: left;
  color: white;
  
position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
  
  
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
/*Dashboard*/
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #003399; 
}

li {
    float: left;
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

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #00cccc}

.dropdown:hover .dropdown-content {
    display: block;
}
/*END OF DASHBOARD*/
/*copyright things*/
#copyright{
	text-align: right;
}
#copyright2{
	text-align: left;
}
/*Date of side bar*/
var d = new Date();
.datediv {
	height: 200px;
	width: 20px;
	padding: 20px;
	border : 500px solid black;
	background-color: #cdcdd3;
}
.announcement-txt {
	width: 90px;
	height : 10px;
	text-align: left;
	color: white;
	margin-left:19%;
	margin-top: 3%;
	padding-top: 10px;
	padding-left: 10px;
	padding-bottom: 20px;
	background-color: #003399;
	box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.2);
}
.pagetitle{

	text-align: center;
	font-weight: bold;
	font-size: 40px;
	color: black;
}
.results {
	    width: 774px;
    height: 75%;
    margin-left: 26%;
    text-align: left;
    color: white;
    padding-left: 80px;
    padding-top: 11px;
    padding-bottom: 8px;
    background-color: #003399;
    box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.2);
}
.grades{
	text-align: center;
	color: white;
	padding: 3px;
	width : 120px;
	background-color: #003399;
	height: 40px;
}
</style>
</head>
<body>


 <ul>
  <li><a href="disscus.php">Disscutions</a></li>
  <li class="dropdown">
  </li>
 </ul>



<h1 class="grades">Grades</h1>
	<p class="pagetitle">Midterm Results</p>
	<?php
$con = mysqli_connect('localhost','root','','email');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM grades_1 ";
$result = mysqli_query($con,$sql);

echo "<div id='art'>

<table class='results'>";

while($row = mysqli_fetch_array($result)) {
	?>
	
			<tr><td><?php echo $row['coursename']?></td>
			<td> <?php echo $row['grade']?> </td></tr>
			<tr><td><hr></hr></td></tr>

  
  
  <?php

}

echo"</table>
	</div>";
	

mysqli_close($con);
?>

	
	
	
	
	
	
	
	
	
	  



<footer>
  <p>Copyright © WebDevelopment Project</p>
</footer>

</body>
</html>
