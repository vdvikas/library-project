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


$stmt = $conn->prepare("DELETE FROM book WHERE booknumber=?");
$stmt->bind_param("s", $bookno);

$bookno = $_REQUEST['bookno'];
$stmt->execute();

echo "book Deleted";

$stmt->close();
$conn->close();
header("location:../page/first.php");
?>