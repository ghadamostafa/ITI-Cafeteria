<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require("bootstrap.php"); ?>
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/checksStyle.css">
	<style>
		td{
			color: white;

		}
	</style>
</head>
<body>
	<?php
	include 'adminNavBar.php' ;
	session_start();
	require_once("../Models/dbConnection.php");
	$fromDate= strtotime( $_SESSION['fromDate'] );
	$FromDate = date( 'Y-m-d H:i:s', $fromDate );
	$toDate= strtotime( $_SESSION['toDate'] );
	$ToDate = date( 'Y-m-d H:i:s', $toDate );
	$query="SELECT o.date,u.name,u.room_no,u.ext,o.status,u.user_id
		FROM orders o 
		INNER JOIN users u 
		on o.user_id = u.user_id  
		WHERE Date(o.date) >=('".$FromDate. "') AND Date(o.date) <= ('" .$ToDate. "')
		AND u.user_id=" .$_GET['id'];
	$result=mysqli_query($connect,$query);
	if($result)
	{
	?>
	<div id="ordersTable">
		<table class="table table-sm ">
			  <thead>
			    <tr>
			   		<th scope="col" class="image">Order Date</th>
			      <th scope="col">Name</th>
			      <th scope="col">Room</th>
			      <th scope="col">Ext.</th>
			      <th scope="col" style="width: 150px;">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	while($row=mysqli_fetch_assoc($result))
				{
			  	?>
			  	<tr>
			  		<td class="date" id="<?php echo $row['user_id'];?>"><?php echo $row['date']; ?> <i class="fa fa-plus"></i></td>
			  		<td><?php echo $row['name']; ?></td>
			  		<td><?php echo $row['room_no']; ?></td>
			  		<td><?php echo $row['ext']; ?></td>
			  		<td><?php echo $row['status']; ?></td>
			  	</tr>
			  <?php }} ?>
			  </tbody>
		</table>
	</div>
	<script >
		$(".date").on("click",function(){
			userId=this.id;
			currentRow=this;
			selectedDate=$(this).text();
			$.ajax({
	        type:'POST',
			url:"../Controllers/ChecksController.php",
			data: { userId: userId, selectedDate: selectedDate },
			success:function(response)
			{ 
				var Data = JSON.parse(response);
				$(currentRow).children("i").removeClass("fa fa-plus");
				$(currentRow).children("i").addClass("fa fa-minus");
				$(currentRow).parents("tr").after(`<tr class="display-block " ><td colspan=5>
					<table style="width:100%">
					</table>
					</td></tr>`);
				
				Data[0].data.forEach((element)=>{
				$(currentRow).parents("tr").next().find("table").first().append(`	
					<tr >
						<td  style="padding:0;">
						<table style="width:100%">
							<tr class="row">
							<td class="col-md-3">${element.Quantity}</td>
							<td class="col-md-3">${element.price}</td>
							<td class="col-md-3">${element.product_name}</td>
							<td class="col-md-3"><img id="productImg" src="${element.product_image}"></td>
							</tr>
						</table>
						</td>
					</tr>
					
					`);
			});
			},
			error:function(xhr,status,message) { console.log(status+' '+message); }
			});
			$(this).off();
		    $(this).click(function () {
		    $(this).parents("tr").next().toggleClass("display-block display-none");
		    $(this).find("i").toggleClass("fa-minus fa-plus");
    });
		});
	</script>
</body>
</html>