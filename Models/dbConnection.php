<?php
	$conn=mysqli_connect("localhost:3308","root","","cafeteria");
	if(! $conn)
	{
		echo "cann't connect";
		echo mysqli_connect_error();
		exit;
	}
	?>