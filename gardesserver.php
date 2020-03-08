<?php


		// Create connection
		$conn = mysqli_connect('localhost', 'root', '', 'email');
		
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if (isset($_POST['add_gra'])) 
{
	$coursename = mysqli_real_escape_string($conn, $_POST['coursename']);
	$grade = mysqli_real_escape_string($conn, $_POST['grade']);

	$sql = "INSERT INTO grades_1 (coursename,grade)
	VALUES ('$coursename', '$grade')";

	if ($conn->query($sql) === TRUE) {
		header('location: adminprofile.php');
	}
	else
	{
		echo 'false';
	}
}

$conn->close();
?>