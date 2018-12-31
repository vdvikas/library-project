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
$course =  $_REQUEST['course'];
$year =  $_REQUEST['year'] ;
$enrollmentno =  $_REQUEST['enroll'] ;
$T_address = $_REQUEST['taddress'];
// prepare and bind
$stmt = $conn->prepare("INSERT INTO student (name, course, year ,enrollmentno ,T_address) VALUES (?, ?, ?, ?, ?)");
if ($stmt)
{
$stmt->bind_param("ssiis", $name, $course, $year , $enrollmentno , $T_address);

// set parameters and execute
$stmt->execute();

$stmt->close();
echo "New records created successfully";
}
else
{
	echo 'wrong stmt'.mysqli_error($conn);
}


$conn->close();
header("location:../page/first.php");
?>