<?php
$result=NULL;
require_once("../Models/dbConnection.php");
if(isset($_POST['submit_btn']))
{
	//selection of two dates
	if(isset($_POST['fromDate']) && isset($_POST['ToDate']) && empty($_POST['user']))
	{		
		$fromDate= strtotime( $_POST['fromDate'] );
		$FromDate = date( 'Y-m-d H:i:s', $fromDate );
		$toDate= strtotime( $_POST['ToDate'] );
		$ToDate = date( 'Y-m-d H:i:s', $toDate );

		$query="SELECT x.userName,x.user_id,sum(x.Amount)as TotalAmount FROM
	(SELECT u.name as userName,u.user_id,sum(po.Quantity*p.price) as Amount from products p INNER JOIN products_orders po INNER JOIN orders o  INNER JOIN users u ON po.order_id=o.order_id and p.product_id=po.product_id and u.user_id=o.user_id WHERE Date(o.date) >= '".$FromDate."' and Date(o.date) <='".$ToDate."' GROUP by po.order_id) as x
		GROUP BY x.userName";
		// echo $query;
		// session_start();
		$_SESSION['fromDate'] = $FromDate;
		$_SESSION['toDate'] = $ToDate;
		$result=mysqli_query($connect,$query); 
	}
	//selection of user and two dates
	else if(isset($_POST['fromDate']) && isset($_POST['ToDate']) && isset($_POST['user']))
	{
		// session_start();
		$_SESSION['fromDate'] = $_POST['fromDate'];
		$_SESSION['toDate'] = $_POST['ToDate'];
		ob_start();
		// exit(header("location: ../Views/checksOrders.php?id=".$_POST['user']));
		echo("<script>location.href = '../Views/checksOrders.php?id=".$_POST['user']."';</script>");
	}
}
//selection of date and user ,delievered from checks.php
else if (isset($_POST['userId']) && isset($_POST['date'])) {
	$query="SELECT
    po.Quantity,
    p.price,
    p.product_name,
    p.product_image
	FROM
	    orders o
	INNER JOIN products_orders po INNER JOIN products p ON
	    o.order_id = po.order_id AND p.product_id = po.product_id
	WHERE
	    o.date = '".$_POST['date']."' AND o.user_id = ".$_POST['userId'];
	    // echo $query;
	$result=mysqli_query($connect,$query);
	if($result)
		{
			$data=[];
			while($row=mysqli_fetch_assoc($result))
			{
				$data[]=$row;
			}

			$myObj = (object)array();
			$myObj -> data = $data;
			echo json_encode(array($myObj));
		}

}
//selection of user ,delievered from checks.php
else if(isset($_POST['userId'])&& empty($_POST['date']) && empty($_POST['selectedDate']))
{
	session_start();
	$query="SELECT date,sum(po.Quantity*products.price) as Amount from orders INNER JOIN products_orders po INNER JOIN products on orders.order_id=po.order_id AND po.product_id=products.product_id WHERE user_id=".$_POST['userId']." and Date(date) >= '".$_SESSION['fromDate']."' and Date(date) <= '".$_SESSION['toDate']."' GROUP by date";
	$result=mysqli_query($connect,$query);
	if($result)
	{
		$data=[];
		while($row=mysqli_fetch_assoc($result))
		{
			$data[]=$row;
		}

		$myObj = (object)array();
		$myObj -> data = $data;
		echo json_encode(array($myObj));
	}
}
//selection of date and user ,delievered from checkOrders.php
else if(isset($_POST['userId'])&& isset($_POST['selectedDate']))
{
	$sql = 'SELECT p.product_image,p.product_name,p.price,po.Quantity,o.order_id 
    FROM orders o 
    INNER JOIN products_orders po 
    on o.order_id = po.order_id 
    INNER JOIN products p 
    on po.product_id = p.product_id 
    WHERE o.date =("'. $_POST['selectedDate'] .'") AND o.user_id =' . $_POST['userId'];
    // echo $sql;
    $orderDetails = mysqli_query($connect, $sql);
     if ($orderDetails) {
        $data = [];
        while ($row = mysqli_fetch_assoc($orderDetails)) {
            $data[] = $row;
            
        }
        // var_dump($data);
        $myObj = (object) array();
        $myObj->data = $data;
        echo json_encode(array($myObj));
    }
}
?>