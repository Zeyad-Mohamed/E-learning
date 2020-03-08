<?php


		// Create connection
		$conn = mysqli_connect('localhost', 'root', '', 'announcements');
		
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if (isset($_POST['add_com'])) 
{
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);

	$sql = "INSERT INTO comments_1 (name,content)
	VALUES ('$name', '$content')";

	if ($conn->query($sql) === TRUE) {
		header('location: disscus.php');
	}
	else
	{
		echo 'false';
	}
}

$conn->close();
?>