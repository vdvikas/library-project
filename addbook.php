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

$name = $_REQUEST['name'];
$bookno =  $_REQUEST['bookno'] ;
$author =  $_REQUEST['author'] ;
$subject = $_REQUEST['subject'];
// prepare and bind
$stmt = $conn->prepare("INSERT INTO book (booknumber, bookname, author ,subject) VALUES (?, ?, ?, ?)");
if ($stmt)
{
$stmt->bind_param("ssss", $name, $bookno, $author , $subject);

// set parameters and execute
$stmt->execute();

$stmt->close();
echo "New records created successfully";
}
else
{
	die( 'wrong stmt'.mysqli_error($conn));
}


$conn->close();
header("location:../page/first.php");
?>