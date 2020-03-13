<!DOCTYPE html>
<html>
<head>
	<title>Checks</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/checksStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

	<!-- Optional theme -->
	
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" /> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

</head>
<body>
	<?php
	include 'adminNavBar.php' ;
	session_start();
	require_once("../Models/dbConnection.php");
	$users=mysqli_query($connect,"select name,user_id from users"); ?>
<div>
	<div id="checksHeader">
		<h1>Checks</h1>
	</div>
<!-- start form	 -->
<form method="POST" action="" id="Dateform" >
	<div class="container" style="margin: 10px auto;">
	    <div class='col-md-5'>
	        <div class="form-group">
	            <div class='input-group date' data-provide="datepicker" id='datetimepicker6'>

	                <input type='text' class="form-control" id="fromDate"  name="fromDate" value="<?php if(isset($_SESSION['fromDate'])){
	                 echo $_SESSION['fromDate'];}
	                 else {echo "Date From"; } ?>" />
	                <span class="input-group-addon">
	                	<i class="glyphicon glyphicon-th"></i>
	                </span>
	            </div>
	        </div>
	    </div>
	    <div class='col-md-5'>
	        <div class="form-group">
	            <div class='input-group date' data-provide="datepicker" id='datetimepicker7'>
	                <input type='text' class="form-control" id="ToDate" value="<?php if(isset($_SESSION['toDate'])){
	                 echo $_SESSION['toDate'];}
	                 else {echo "Date To"; } ?>"  name="ToDate" />
	                <span class="input-group-addon">
	                    <span class="glyphicon glyphicon-calendar"></span>
	                </span>
	            </div>
	        </div>
	    </div>
	</div>
	<br>
	<div id="users" style="display: inline;">
		<select class="mdb-select md-form" style="width: 100px;height: 30px;" id="user" name="user">
					  <option value="" disabled selected>User</option>
				    <?php
					while($row=mysqli_fetch_assoc($users))
					{
					?>
				    <option value="<?php echo $row['user_id'] ?>"><?php echo $row['name']?></option>
				    <?php } ?>
		</select>
		
	</div>
	<button id="check" style="margin:10px 260px !important;" class="btn btn-primary" name="submit_btn" type="submit">Check</button>
	
</form>
<!-- End form	 -->
<!-- outer table -->
<?php include '..\Controllers\ChecksController.php' ?>
<?php if($result)
{
	if(mysqli_num_rows ( $result ) > 0)
{?>
	<div id="tableDiv" style="width: 800px;height: 800px;text-align: center;margin:20px auto;">
			<table class="table table-sm " style="background-color: white;" >
			  <thead style="background-color: brown;">
			    <tr>		   		
			      <th scope="col" style="text-align: center;">Name</th>
			      <th scope="col" style="text-align: center;">Total Amount</th>		      
			    </tr>
			  </thead>
			  <tbody>
			  	<?php while($row=mysqli_fetch_assoc($result))
				 { ?>
				 	<tr >
				 		<td class="userRow"><span><?php echo $row['userName'] ?></span>

				 			<i class="fa fa-plus" id="<?php echo $row['user_id'] ?>" ></i>
				 		</td>
				 		<td><?php echo $row['TotalAmount']; ?></td>
				 	</tr>
			  	<?php } ?>
			  		<tr></tr>
			  </tbody>
			</table>
			
		</div>
<?php }}?>
</div>
<!-- End outer table -->
</body>
<script type="text/javascript" src="../assets/js/checks.js"></script>
</html>