<?php

// DB connection
$connect = mysqli_connect("localhost:3307", "root", "", "iti_cafeteria");
if ($connect) {
    // <!-- product_id	product_name	price	category_id	product_image -->

    //check login in DB
    if (isset($_POST["done"])) {
        if (!empty($_POST["product_name"]) && !empty($_POST["price"]) && !empty($_POST["category_id"]))
         {
            $product_name = mysqli_escape_string($connect, $_POST['product_name']);
            $price = mysqli_escape_string($connect, $_POST['price']);
            $category_id = mysqli_escape_string($connect, $_POST['category_id']);
           
            $product_name = trim($product_name);
            $price = trim($price);
            $result = "";
            var_dump($_POST);
            echo "*************";
            // var_dump($_FILES);
            var_dump($_FILES['photo']['tmp_name']);

            if (!empty($_FILES['photo']['tmp_name'])) {
                $dir_to_upload = "../images/";
                $dir_to_upload = $dir_to_upload . basename($_FILES['photo']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $dir_to_upload)) {
                    $result = mysqli_query($connect, "insert into users set name='$name',email='$email',password='$password' ,room_no='$room_no',ext='$ext',image='$dir_to_upload'");
                    if ($result) {
                        header("Location:../Views/login.php");
                    } else {
                        echo "BBBBBBBBBaddddddddd";
                    }
                } else {
                    // var_dump($_FILES['image']['tmp_name']);
                    echo "BBBBBBBBBaddddddddd222222222222";
                }
            } else {
                echo "heeeeeeeeeere";
            }
        } else {

            header("Location:../Views/addUser.php");
            echo "Must Enter All Fields";
        }
    } 
} else {
    echo "No Connection";
}
?>