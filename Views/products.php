<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style >
		img{
			margin: 20px;
			display: inline;
			border-radius: 20px;
		}
		.row{
			margin: 20px auto;
			text-align: center;
		}
		table
		{
			width: 60% !important;
			margin: 0 auto;
			padding: 10px;
		}
		thead th{
			color:#cc6699;
			padding: 10px !important;
		}
		tbody th{
			color: #391326;
		}
		th,td{
			text-align: center;
		}
		td{
			font-family: Tahoma;
		}
		#headerDiv{
			text-align:center;
			margin: 40px;
			font-family: Arial;
			color: #660033;
		}
		
		#addProduct{
			margin: 10px;
			position: relative;
			text-align: right;
			right:  280px;
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div id="headerDiv" >
		<h2 >All Products</h2>
	</div>
	<div id="addProduct" >
			<a href="#">Add product</a>
	</div>
	<div >
		
		<table class="table table-sm ">
		  <thead>
		    <tr>
		   		
		      <th scope="col">Product</th>
		      <th scope="col">Price</th>
		      <th scope="col" style="width: 150px;">Action</th>
		      <th scope="col" style="width: 350px;">Image</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    	
		      <th scope="row">Black Tea</th>
		      <td>10EGP</td>
		      <td style="width: 150px;">Available<br>
		      	<a href="#">Edit</a><br>
		      	<a href="#">Delete</a></td>
		      <td style="width: 350px;"><img src="../assets/Images/blackTea.jpg"></td>
		      
		    </tr>
		    <tr>
		    	
		      <th scope="row">Green Tea</th>
		      <td>10EGP</td>
		      <td style="width: 150px;">Available<br>
		      	<a href="#">Edit</a><br>
		      	<a href="#">Delete</a></td>
		    
		      <td style="width: 350px;"><img src="../assets/Images/greenTea.jpg"></td>
		    </tr>  
		    <tr>
		      <th scope="row">Coffee</th>
		      <td >15EGP</td>
		      <td style="width: 150px;">Available<br>
		      	<a href="#">Edit</a><br>
		      	<a href="#">Delete</a></td>
		      <td style="width: 350px;"><img src="../assets/Images/cofee.jpg"></td>
		    </tr>
		    <tr>
		      <th scope="row">Latte</th>
		      <td >15EGP</td>
		      <td style="width: 150px;">Available<br>
		      	<a href="#">Edit</a><br>
		      	<a href="#">Delete</a></td>
		      <td style="width: 350px;"><img src="../assets/Images/latte.jpg"></td>		      
		    </tr>
		    <tr>
		      <th scope="row">Cappuccino</th>
		      <td >15EGP</td>
		      <td style="width: 150px;">Available<br>
		      	<a href="#">Edit</a><br>
		      	<a href="#">Delete</a></td>
		      <td style="width: 350px;"><img src="../assets/Images/cappuccino.webp"></td>
		    </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>