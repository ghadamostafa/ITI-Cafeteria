<?php
// DB connection
include '../Models/dbConnection.php';
    if (isset($_POST["done"])) {
        if (
            !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["password"])
            && !empty($_POST["rePassword"]) && !empty($_POST["room_no"])
            && !empty($_POST["ext"]))
         {
            $name = mysqli_escape_string($connect, $_POST['name']);
            $password = mysqli_escape_string($connect, $_POST['password']);
            $email = mysqli_escape_string($connect, $_POST['email']);
            $room_no = mysqli_escape_string($connect, $_POST['room_no']);
            $rePassword = mysqli_escape_string($connect, $_POST['rePassword']);
            $ext = mysqli_escape_string($connect, $_POST['ext']);

            $name = trim($name);
            $password = trim($password);
            $email = trim($email);
            $room_no = trim($room_no);
            $rePassword = trim($rePassword);
            $ext = trim($ext);
            $result = "";
            var_dump($_FILES['photo']['tmp_name']);
            if (!empty($_FILES['photo']['tmp_name'])) {
                $dir_to_upload = "../assets/Images/";
                $dir_to_upload = $dir_to_upload . basename($_FILES['photo']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $dir_to_upload)) {
                    $result = mysqli_query($connect, "insert into users set name='$name',email='$email',password='$password' ,room_no='$room_no',ext='$ext',image='$dir_to_upload'");
                    if ($result) {
                        header("Location:../Views/users.php");
                    } else {
                        header("Location:../Views/users.php");
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