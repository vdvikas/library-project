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
$stmt = $conn->prepare("INSERT INTO issuehistory (bookno, enrollmentno, issuedate ) SELECT * FROM issue WHERE bookno= ?");
$stmt->bind_param("s", $bookno);

// set parameters and execute
$bookno = $_REQUEST['bookno'];
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM issue WHERE bookno=?");
$stmt->bind_param("s", $bookno);

$stmt->execute();

echo "Book Returened";

$stmt->close();
$conn->close();
header("location:../page/first.php");
?>