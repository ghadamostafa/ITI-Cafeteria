<?php
// DB connection
include '../Models/dbConnection.php';
    if (isset($_POST["done"])) 
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
            if (!empty($_FILES['photo']['tmp_name'])) {
                $dir_to_upload = "../assets/Images/";
                $dir_to_upload = $dir_to_upload . basename($_FILES['photo']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $dir_to_upload)) {
                    $query="update users set name='$name',email='$email',password='$password' ,room_no='$room_no',ext='$ext',image='$dir_to_upload'where user_id=".$_POST['userId'];
                    $result = mysqli_query($connect,$query);
                    if ($result) {
                        header("Location:../Views/users.php");

                    } else {
                        echo "Result false";
                    }
                } else {
                    echo "Add picture";
                }
            } else {
                    $query="update users set name='$name',email='$email',password='$password' ,room_no='$room_no',ext='$ext' where user_id=".$_POST['userId'];
                    $result = mysqli_query($connect,$query);
                    if ($result) {
                        echo "updated successfully";
                        header("Location:../Views/users.php");
                    } else {
                        echo "Result false";
                    }
            }
    }
    elseif (isset($_POST["userID"])) {
        $query="delete from users where user_id=".$_POST["userID"];
        $result = mysqli_query($connect,$query);
        if($result)
        {
            echo "success";
        }
        
    }