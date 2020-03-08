<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  text-align: center;
	position:absolute;
  top:100px;

margin :0;
 
  float :left;
    
}

th, td {
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #003399;
  color: white;
}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','email');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM inbox_1 WHERE iddec = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Sent</th>
<th>Recieved</th>
<th>Subject</th>
<th>Content</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['sent'] . "</td>";
    echo "<td>" . $row['receive'] . "</td>";
    echo "<td>" . $row['subject'] . "</td>";
    echo "<td>" . $row['content'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>