<?php
$connect = mysqli_connect("localhost", "root", "", "cafeteria");
if (!$connect) {
	echo "cann't connect";
	echo mysqli_connect_error();
	exit;
}
