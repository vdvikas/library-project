<?php
require("../include/layout.php");

	render_html("list of students not returened book");
	render_header("RGSC LIBRARY");
	
	
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

$query="SELECT * FROM issue";

	$stmt = $conn->prepare($query);

	if ($stmt)
	{
		$stmt->execute();

	$res = $stmt->get_result();

		echo '<h3>List of Students having book issued</h3>
			<table border="1" class="show_data">
				<tr>
					<th>bookno</th>
					<th>enrollment number</th>
					<th>issue date</th>
				</tr>';

			while($row = $res->fetch_array(MYSQLI_ASSOC)) {
				echo '<tr >
						<td>'.$row['bookno'].'</td>
						<td>'.$row['enrollmentno'].'</td>
						<td>'.$row['issuedate'].'</td>
					</tr>';
			}
			echo '</table>';
			
	}
$stmt->close();
$conn->close();

render_footer();
	get_css("../style/frm.css");
	get_css("../style/layout.css");
?>