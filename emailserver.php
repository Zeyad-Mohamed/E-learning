<?php


		// Create connection
		$conn = mysqli_connect('localhost', 'root', '', 'email');
		
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['sent_mail'])) 
{
	$sent = mysqli_real_escape_string($conn, $_POST['sent']);
	$receive = mysqli_real_escape_string($conn, $_POST['receive']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);

	$sql = "INSERT INTO inbox_1 (sent, receive, content,subject,iddec)
						VALUES ('$sent', '$receive', '$content','$subject','1')";

	if ($conn->query($sql) === TRUE) {
		header('location: adminprofile.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>