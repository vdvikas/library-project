<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

		//data variables
		$usr_name=$_REQUEST['usr'];
		$passwd=$_REQUEST['passwd'];

		//query
		$query = "SELECT username,password FROM user WHERE username = ? AND password =? ";

		//prepare statement
		$stmt = $conn->prepare($query);

		if ($stmt)
		{
			//bind data
			$stmt->bind_param('ss', $usr_name, $passwd);

			//execute sql query
			$stmt->execute();
			
			
			if( $stmt->fetch() )
			{
								
				
				header("location:page/first.php");
			}
			else
			{
				header("location:../logout.php");
			}
			//close statement
			$stmt->close();
		}
		else
		{
			echo 'wrong stmt '.mysqli_error($conn);
			header("location:/");
		}
		
		$conn->close();
?>