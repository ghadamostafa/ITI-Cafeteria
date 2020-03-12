<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("../assets/Images/bg.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
        form {
            width: 600px;
            margin: 0 auto;
            margin-top: 50px;
            padding-left: 20px;
            padding-right: 30px;
            background-color: brown;
            border-radius: 7%;
            opacity: 80%
        }

        label {
            color: black;
            font-size: 20
        }
    </style>
</head>

<body>
    <?php
    include 'adminNavBar.php';
    include '../Models/dbConnection.php';
    if (!empty($_POST["category_name"])) {
        $category_name = mysqli_escape_string($connect, $_POST['category_name']);
        var_dump($_POST);
        $result = mysqli_query($connect, "insert into category set category_name='$category_name'");
        if ($result) {
            header("Location:../Views/addProduct.php");
        } else {
            echo "Enter catrgory";
        }
    }
    ?>
    <form action="#" method="POST" enctype="multipart/form-data">
        <h1 style="text-align: center">Add Catogery </h1>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Category name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="category_name">
            </div>
        </div>

        <div class="form-group row">
            <div style="margin: 10px" class="col-sm-10">
                <button type="submit" class="btn  login_btn" name="done" style="margin-left:35%; ">Submit</button>
            </div>
        </div>
    </form>
</body>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
<!-- <script scr="../assets/js/JQuery-3.3.1.min.js"></script> -->
<script scr="../assets/js/bootstrap.min.js"></script>
<script scr="../assets/js/popper.js"></script>
<script src="../assets/js/Orders.js"></script>
<script src="../assets/js/JQuery-3.3.1.min.js"></script>
<?php
include 'bootstrap.php';
?>

</html>