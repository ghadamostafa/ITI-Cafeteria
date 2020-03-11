<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <style>
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
</head>


<body>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
        <a class="navbar-brand" href="#">Cafeterai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="myorder.php">Home
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="myOrders.php">My Order
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item avatar dropdown">
                    <a href="login.php" class="navbar-brand">Log out</a>
                    <?php
                    // DB connection
                    include '../Models/dbConnection.php';
                    session_start();
                    $result = mysqli_query($connect, "select * from users where user_id={$_SESSION['id']}");
                    if ($result) {
                        $result = mysqli_fetch_assoc($result);
                        $path = $result['image'];
                        $name=$result['name'];
                       echo "<label class='navbar-brand'>$name</label>";
                        echo "<img src='$path' class='rounded-circle z-depth-0' alt='avatar image'>";
                    }
                    ?>
                    
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>