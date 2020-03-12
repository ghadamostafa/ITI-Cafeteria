<!DOCTYPE html>
<html>

<head>
	<title>All users</title>
	<?php require("bootstrap.php"); ?>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
	<?php
	require_once("../Models/dbConnection.php");
	$users = mysqli_query($connect, "select * from users");
	include 'adminNavBar.php';
	?>
	<div id="headerDiv">
		<h2>All Users</h2>
	</div>
	<div id="addUser" >
		<a href="addUser.php" style="color:white; font-size:28px">Add User</a>
	</div>
	<div>
		<table class="table table-sm " style="background-color: white;">
			<thead style="background-color: brown;">

				<tr>
					<th scope="col" class="image">Image</th>
					<th scope="col">Name</th>
					<th scope="col">Room</th>
					<th scope="col">Ext.</th>
					<th scope="col" style="width: 150px;">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($users)) {
				
				?>
					<tr>
						<td class="image"><img id="userImg" src="<?php echo $row['image'] ?>"></td>
						<th scope="row" style="color: black;"><?php echo $row['name']; ?></th>
						<td style="color: black;"><?php echo $row['room_no']; ?></td>
						<td style="color: black;"><?php echo $row['ext']; ?></td>
						<td style="width: 150px;color: black;">
							<a href="EditUser.php/?id=<?php echo $row['user_id']; ?>">Edit</a><br>
							<a href="#" id="<?php echo $row['user_id']; ?>" class="deletebtn">Delete</a></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<script type="text/javascript" src="../assets/js/deleteUser.js"></script>
</body>

</html>