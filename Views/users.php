<!DOCTYPE html>
<html>

<head>
	<title>All users</title>
	<?php require_once("layout/bootstrap.php"); ?>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>
	<?php
	require_once("../Models/dbConnection.php");
	$users = mysqli_query($conn, "select * from users"); ?>
	<div id="headerDiv">
		<h2>All Users</h2>
	</div>
	<div id="addUser">
		<a href="#">Add User</a>
	</div>
	<div>
		<table class="table table-sm table-dark">
			<thead>
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
						<td class="image"><img src="../assets/Images/<?php echo $row['image'] ?>"></td>
						<th scope="row"><?php echo $row['name']; ?></th>
						<td><?php echo $row['room_no']; ?></td>
						<td><?php echo $row['ext']; ?></td>
						<td style="width: 150px;">
							<a href="#">Edit</a><br>
							<a href="#">Delete</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>