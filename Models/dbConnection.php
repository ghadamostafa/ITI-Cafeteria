<?php
$connect = mysqli_connect("localhost:3308", "root", "", "cafeteria");
if(! $connect)
	{
		echo "cann't connect";
		echo mysqli_connect_error();
		exit;
	}
	?>