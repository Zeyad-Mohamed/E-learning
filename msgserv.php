<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
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
$sql="SELECT * FROM inbox_1 WHERE id = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>id</th>
<th>sent</th>
<th>recive</th>
<th>subject</th>
<th>content</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
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