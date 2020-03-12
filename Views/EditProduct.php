<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
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
    require("../Models/dbConnection.php");
    include 'adminNavBar.php';
    if (isset($_GET['id'])) {
        $products = mysqli_query($connect, "select * from products where product_id=" . $_GET['id']);
        // var_dump($user) ;
        while ($ProductRow = mysqli_fetch_assoc($products)) {
    ?>
            <form action="../../Controllers/productsController.php" method="POST" enctype="multipart/form-data">
                <h1 style="text-align: center">Edit Product </h1>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="product_name" value="<?php echo $ProductRow['product_name']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="price" value="<?php echo $ProductRow['price']; ?>">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-form-label col-sm-2 pt-0">Catogery</label>
                        <select class="custom-select" name="category_id" style="width: 50%; margin-left: 15px;">
                            <?php
                            $result = mysqli_query($connect, "select * from category ");
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($row['category_id'] == $ProductRow['category_id']) {
                            ?>
                                        <option selected value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?> </option>
                                    <?php } else { ?>
                                        <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                            <?php }
                                }
                            } ?>
                        </select>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="photo">
                    </div>
                </div>
                <div class="form-group row">
                    <div style="margin: 10px" class="col-sm-10">
                        <button type="submit" class="btn  login_btn" name="done" style="margin-left:35%; ">Submit</button>
                    </div>
                </div>
            </form>
    <?php }
    } ?>
</body>

<script scr="../../assets/js/bootstrap.min.js"></script>
<script scr="../../assets/js/popper.js"></script>
<script src="../../assets/js/Orders.js"></script>
<script src="../../assets/js/JQuery-3.3.1.min.js"></script>
<?php
include 'layout/bootstrap.php';
?>

</html>