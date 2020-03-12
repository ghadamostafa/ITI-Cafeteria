<?php
include '../Models/dbConnection.php';
$result = mysqli_query($connect, "SELECT b.order_id, b.date ,b.status ,b.notes , b.order_room, a.name , b.order_id FROM orders b INNER JOIN users a ON a.user_id = b.user_id WHERE b.status='processing'");
if ($result) {
	if (mysqli_fetch_assoc($result) == null) {
		echo '<h1 style="text-align: center">No orders yet</h1>';
	} else {
		while ($row = mysqli_fetch_assoc($result)) {  //var_dump($row); 
?>
			<hr>
			<div class="row mt-5">
				<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
					<h2>processing.....</h2>
					<ul class="p-0">
						<li>
							<div class="row comments mb-2">
								<div class="col-md-2 col-sm-2 col-3 text-center user-img">
									<img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
								</div>
								<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
									<h1 class="m-0"><a href="#"><?php echo  $row['name']; ?></a></h1>
									<time class="text-white ml-3"><?php echo $row['date']; ?></time>
									<like></like>
									<h3 class="mb-0 text-white"><?php echo  $row['notes']; ?></h3>
									<br>
									<h1>Order Room: <br></h1>
									<h3><?php echo  $row['order_room']; ?></h3>
								</div>
							</div>
						</li>
					</ul>
					<div class="row comment-box-main p-3 rounded-bottom">

						<?php $order_id = $row['order_id'];
						include '../Controllers/iterateprocessitem.php'; ?>

						<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
							<a href="../Controllers/confirmorder.php?id=<?php echo $order_id; ?>"><button class="btn btn-info">CONFIRM</button></a>

						</div>
					</div>
				</div>
			</div>
<?php }
	}
}
?>