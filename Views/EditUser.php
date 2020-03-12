<!DOCTYPE html>
<html>

<head>
    <title>User Edit</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
    <style>
        body {
            background-image: url("../assets/images/bg.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>
</head>

<body>
	<?php require("../Models/dbConnection.php"); ?>
   	<?php 
   	if(isset($_GET['id']))
   	{
   	$user=mysqli_query($connect,"select * from users where user_id=".$_GET['id'] );
   	// var_dump($user) ;
   	while($row=mysqli_fetch_assoc($user))
	{
   	?>   
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="background-color: brown; opacity: 85%">
                <div class="card-header">
                    <h3>Edit User</h3>
                </div>
                <div class="card-body">
                    <form action="../../Controllers/UsersController.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" require name="name" value="<?php echo $row['name'];?>">
                        </div>
                        <input type="hidden" name="userId" value="<?php echo $row['user_id'];?>">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" require placeholder="Enter Email" name="email" value="<?php echo $row['email'];?>">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" require placeholder="Enter Password" name="password" value="<?php echo $row['password'];?>">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" require placeholder="Re-Password" name="rePassword">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" require placeholder="Enter Room No." name="room_no" value="<?php echo $row['room_no'];?>">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" require placeholder="Enter EXT" name="ext" value="<?php echo $row['ext'];?>">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="file" class="form-control" require name="photo">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="done" value="Edit" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
<?php }} ?>
</body>
<!-- <script src="js/JQuery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script> -->

</html>