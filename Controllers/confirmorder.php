<?php


echo 'here';

include '../Models/dbConnection.php';
var_dump($_GET);
echo $_GET['id'];
if (isset($_GET["id"])&&!empty($_GET["id"])) {

    if ($connect) {
        if ($connect) {
            $result = mysqli_query($connect, "UPDATE orders SET status='done' WHERE order_id=".$_GET['id']);
            if ($result) {
                            echo $result;
                            header("Location:../Views/processorder.php?done=1");

                       }
        }


}
}

?>