<?php

// DB connection
include '../Models/dbConnection.php';

    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = mysqli_escape_string($connect, $_POST['email']);
        $password = mysqli_escape_string($connect, $_POST['password']);
        $email = trim($email);
        $password = trim($password);
        if($email=='shimaa@s.com' && $password==123){
            header("Location:../Views/addProduct.php");
        }
        ///
       else{ $result = mysqli_query($connect, "select * FROM users WHERE email='$email' and password='$password'");
        if ($result) {
            $res = mysqli_fetch_row($result);
            if (count($res) != 0) {
                var_dump($res);
                session_start();
                $_SESSION['name'] = $res[1];
                $_SESSION['id'] = $res[0];
                header("Location:../Views/myOrders.php");
            } else {
                header("Location:../Views/login.php");
            }
        } else {
            echo "edit";
        }}
        ///
    }
?>