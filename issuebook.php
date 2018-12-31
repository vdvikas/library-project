<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO issue (bookno, enrollmentno) VALUES (?, ?)");
$stmt->bind_param("ss", $bookno, $enrollmentno );

// set parameters and execute
$bookno = $_REQUEST['bookno'];
$enrollmentno =  $_REQUEST['enroll'];
$stmt->execute();

if(!$stmt)
{
	echo "student not exists";
}
else
{
echo "Book Issued";
}
$stmt->close();
$conn->close();
header("location:../page/first.php");
?>