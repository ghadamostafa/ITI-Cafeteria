<?php
$connect = mysqli_connect("localhost:3307", "root", "", "iti_cafeteria");
if (!$connect) {
	echo "cann't connect";
	echo mysqli_connect_error();
	exit;
}
