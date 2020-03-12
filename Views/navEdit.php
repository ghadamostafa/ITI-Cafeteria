<!-- <!DOCTYPE html>
<html> -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <script scr="../../assets/js/bootstrap.min.js"></script>
    <script scr="../../assets/js/popper.js"></script>
    <script src="../../assets/js/Orders.js"></script>
    <script src="../../assets/js/JQuery-3.3.1.min.js"></script>
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
    <style>
        body {
            background-image: url("../../assets/Images/bg.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
        nav {
            background-color: brown;
            height: 80px;
        }

        img {
            height: 80px;
        }

        label {
            color: white;
            size: 24;
        }
    </style>
<!-- </head> -->
<?php include '../Models/sessioncheck.php';?>


<!-- <body> -->
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
        <a class="navbar-brand" href="#">Cafeterai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="processorder.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="users.php">Users </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="processorder.php">Manual Orders</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Checks </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item avatar dropdown">
                    <a  href="login.php" class="navbar-brand">Log out</a>
                    <label class="navbar-brand">Admin</label>
                    <img src="../../assets/Images/avatar.jpg" class="rounded-circle z-depth-0" alt="avatar image">
                </li>
                
            </ul>
        </div>
    </nav>
<!-- </body>
</html> -->