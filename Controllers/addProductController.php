<?php
// DB connection
include '../Models/dbConnection.php';
    if (isset($_POST["done"])) {
        if (!empty($_POST["product_name"]) && !empty($_POST["price"]) ) {
            $product_name = mysqli_escape_string($connect, $_POST['product_name']);
            $price = mysqli_escape_string($connect, $_POST['price']);
            $product_name = trim($product_name);
            $price = trim($price);
            $category_id=$_POST["category_id"];
            $result = "";
            var_dump($_POST);
            var_dump($_FILES['photo']['tmp_name']);
            if (!empty($_FILES['photo']['tmp_name'])) {
                $dir_to_upload = "../assets/images/";
                $dir_to_upload = $dir_to_upload . basename($_FILES['photo']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $dir_to_upload)) {
                    $result = mysqli_query($connect, "insert into products set product_name='$product_name',price='$price',category_id='$category_id',product_image='$dir_to_upload'");
                    if ($result) {
                        header("Location:../Views/login.php");
                    } else {
                        echo "Result false";
                    }
                } else {
                    echo "Add picture";
                }
            } else {
                echo "Pic Error";
            }
        } else {

            header("Location:../Views/addUser.php");
            echo "Must Enter All Fields";
        }
    } 

