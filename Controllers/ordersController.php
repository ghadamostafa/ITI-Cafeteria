<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
function showUserOrders($startDate, $endtDate)
{
    require("../Models/dbConnection.php");
    if (isset($_POST["showOrders"])) {
        $startDate = $_POST["start"];
        $endtDate = $_POST["end"];
        $sql = 'SELECT o.date,o.status, po.order_id , SUM(po.Quantity*p.price) as amount
            FROM orders o 
            INNER JOIN products_orders po 
            on o.order_id = po.order_id 
            INNER JOIN products p 
            on po.product_id = p.product_id 
            WHERE Date(o.date) >=("' . $startDate . '") AND Date(o.date) <= ("' . $endtDate . '") 
            AND o.user_id =' . $_SESSION['id'] . ' 
            GROUP by po.order_id';
        $userOrders = mysqli_query($connect, $sql);
        return $userOrders;
    }
}

if (isset($_POST['orderDate'])) {
    require("../Models/dbConnection.php");
    $orderDate = $_POST['orderDate'];
    $sql = 'SELECT p.product_image,p.product_name,p.price,po.Quantity 
    FROM orders o 
    INNER JOIN products_orders po 
    on o.order_id = po.order_id 
    INNER JOIN products p 
    on po.product_id = p.product_id 

    WHERE o.date =("' . $orderDate . '") AND o.user_id =' . $_SESSION['id'];
    $orderDetails = mysqli_query($connect, $sql);
    if ($orderDetails) {
        $data = [];
        while ($row = mysqli_fetch_assoc($orderDetails)) {
            $data[] = $row;
            
        }
        $myObj = (object) array();
        $myObj->data = $data;
        echo json_encode(array($myObj));

    }
}

if (isset($_POST['deleteID'])) {
    require("../Models/dbConnection.php");
    $id = $_POST['deleteID'];
    $sql = 'DELETE FROM orders
            where order_id='.$id;
    $orderDelete = mysqli_query($connect, $sql);

}