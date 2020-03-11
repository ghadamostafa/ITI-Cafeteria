<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <style>
        body {
            background-image: url("../assets/Images/bg.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            color: white;
        }

        #navL {
            background-color: brown;
            height: 80px;
            text-align: center;
            font-size: 28;
            border-radius: 10px
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="navL">
            <h1>Welcome to ITI Cafeteria</h1>
        </div>
        <div class="d-flex justify-content-center h-100" style="margin-top: 60px">
            <div class="card" style="background-color: brown; border-radius: 7% ; opacity: 85%">
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <form action="../controllers/loginControler.php" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="email" require placeholder="Email">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" require placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign In" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- <script src="js/JQuery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script> -->

</html>