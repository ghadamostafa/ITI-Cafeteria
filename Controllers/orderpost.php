<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include '../Models/dbConnection.php';
    var_dump($_POST);
    if (isset($_POST["orders"])) {
        $user_id = 1;
        echo  'INSERT INTO `orders`( `date`, `user_id`, `status`, `notes`, `order_room`) VALUES (NOW(),' . $user_id . ',\'process\',\'' . $_POST['order_comment'] . '\',\'' . $_POST['order_place'] . '\')';
        if ($connect) {
            if ($connect) {
                $result = mysqli_query($connect, 'INSERT INTO `orders`( `date`, `user_id`, `status`, `notes`, `order_room`) VALUES (NOW(),' . $user_id . ',\'processing\',\'' . $_POST['order_comment'] . '\',\'' . $_POST['order_place'] . '\')');
                if ($result) {
                    echo $result . '2222';
                    $order_id = mysqli_insert_id($connect);
                    $arr = [];
                    foreach ($_POST['product_name'] as $i => $x) {
                        array_push($arr, '(' . $_POST['product_id'][$i] . ',' . $order_id . ',' . $_POST['product_quantity'][$i] . ')');
                        var_dump($arr);
                        echo '<hr>';
                        echo implode(" , ", $arr);
                        echo '<hr>';
                    }
                    $values = implode(" , ", $arr);
                    $result = mysqli_query($connect, 'INSERT INTO `products_orders`(`product_id`,`order_id`, `Quantity`) VALUES ' . $values);
                    if ($result) {
                        echo $result;
                        echo '<hr>';
                    } else {
                        echo 'eror in order details ';
                        echo '<hr>';
                        echo 'INSERT INTO `products_orders`(`product_id`,`order_id`, `Quantity`) VALUES ' . $values;
                    }
                } else {
                    echo 'err';
                }
            }
        }
    }
    ?>
</body>

</html>