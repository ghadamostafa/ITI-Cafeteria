<?php
$connect = mysqli_connect("localhost", "root", "", "iti_cafeteria");
if (!$connect) {
	echo "cann't connect";
	echo mysqli_connect_error();
	exit;
}
