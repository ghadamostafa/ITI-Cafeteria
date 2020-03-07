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
			width:100px;
			height: 100px;
			margin: 20px;
			display: inline;
			border-radius: 50%;
			/*position: absolute;*/
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
			color:#ffb3d9;
			padding: 10px !important;
		}
		/*td a{
			color:#ffb3d9;
		}*/
		/*tbody th{
			color: #391326;
		}*/
		th,td{
			text-align: center;
			padding-top: 50px !important;
		}
		td{
			font-family: Tahoma;
		}
		#headerDiv{
			text-align:left;
			margin: 20px 280px;
			font-family: Arial;
			color: #660033;
		}
		.image{
			width: 200px;
			padding-top:10px !important;
		}
		#addUser{
			margin: 10px;
			position: relative;
			text-align: right;
			right:  280px;
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div id="headerDiv">
		<h2 >All Users</h2>
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
		      <th scope="col" style="width: 150px;">Action</th>
		      
		      
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    	<td  class="image"><img src="../assets/Images/photo1.jpg"></td>
		      <th scope="row">Hend</th>
		      <td>1011</td>
		      <td style="width: 150px;">
		      	<a href="#">Edit</a><br>
		      	<a href="#">Delete</a></td>
		      
		      
		    </tr>
		    <tr>
		    	<td class="image"><img src="../assets/Images/photo2.jpg"></td>
		      <th scope="row">Nadia</th>
		      <td>1012</td>
		      <td style="width: 150px;">
		      	<a href="#">Edit</a><br>
		      	<a href="#">Delete</a></td>
		    
		      
		    </tr>  
		    <tr>
		    	<td class="image"><img src="../assets/Images/photo3.jpeg"></td>
		      <th scope="row">Noha</th>
		      <td >1013</td>
		      <td style="width: 150px;">
		      	<a href="#">Edit</a><br>
		      	<a href="#">Delete</a></td>
		      
		      
		    </tr>
		    
		  </tbody>
		</table>
	</div>
</body>
</html>