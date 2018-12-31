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


$stmt = $conn->prepare("DELETE FROM student WHERE enrollmentno=?");
$stmt->bind_param("s", $enroll);

$enroll = $_REQUEST['enroll'];
$stmt->execute();

echo "Student Deleted";

$stmt->close();
$conn->close();
header("location:../page/first.php");
?>