<?php
	$conn = new mysqli('localhost','root','12345','help_desk');

	if ($conn->connect_error) 
	{
		die('Connecton Error'.$conn->connect_error);
	}

	else
	{
		$result = $conn->query("SELECT * FROM support_ticket");
		if ($result->num_rows > 0) 
		{
			while ($row = $result->fetch_assoc()) 
			{
				echo $row['name'].'<br>';
			}
		}

	}
?>