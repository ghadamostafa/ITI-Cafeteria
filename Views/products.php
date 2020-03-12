<!DOCTYPE html>
<html>

<head>
	<title></title>
	<?php require_once("layout/bootstrap.php"); ?>
	<link rel="stylesheet" type="text/css" href="../assets/css/productsStyle.css">
</head>

<body>
	<?php require("../Models/dbConnection.php");
    include 'adminNavBar.php';
	$products = mysqli_query($connect, "select * from products"); ?>
	<div id="headerDiv">
		<h2>All Products</h2>
	</div>
	<div id="addProduct">
		<a href="addProduct.php" style="color:brown; font-size:28px">Add product</a>
	</div>
	<div>
		<table class="table table-sm "style="background-color:white; opacity: 90%; border-radius:10px;" >
			<thead style="background-color: brown;">
				<tr>
					<th scope="col">Product</th>
					<th scope="col">Price</th>
					<th scope="col" style="width: 150px;">Action</th>
					<th scope="col" style="width: 350px;">Image</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($products)) {
				?>
					<tr>
						<th scope="row" style="font-size: 24px"><?php echo $row['product_name']; ?></th>
						<td><?php echo $row['price']; ?></td>
						<td style="width: 150px;">Available<br>
							<a href="EditProduct.php/?id=<?php echo $row['product_id']; ?>">Edit</a><br>
							<a href="#" id="<?php echo $row['product_id']; ?>" class="deletebtn">Delete</a></td>
						<td style="width: 350px;"><img src="<?php echo $row['product_image']; ?>"></td>
					</tr>
					
				<?php } ?>
			</tbody>
		</table>
	</div>
	<script type="text/javascript" src="../assets/js/deleteProduct.js"></script>
</body>

</html>