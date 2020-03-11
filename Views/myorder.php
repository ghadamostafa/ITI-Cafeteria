<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/orderStyle.css">
</head>

<body>
    <?php
    include 'userNavBar.php';
    ?>
    <div class="container" style="margin-top: 45px">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Your Order</div>
                    <div class="card-body">
                        <table>
                            <tr class="d-none trcopy">
                                <td>cola</td>
                                <td><input min="0" max="30" onchange="quantity_change(event)" class="input_quantuty" name="quantity[]" style="width: 40px;" type="number" value="1"></td>
                                <td><label id="uprice">5</label></td style="margin-left: 10px;">
                                <td class="tprice">0</td style="margin-left: 15px;">
                            </tr>
                        </table>
                        <table style="text-align: center;">
                            <th>name</th>
                            <th>Q</th>
                            <th>U_price</th>
                            <th>T_price</th>
                            <form action="../Controllers/orderpost.php" method="POST">
                                <hr id="rowscopy">
                                <tbody class="tablebody">
                                </tbody>
                                <input id="total_price" type="hidden" name="total_price" value="0" />
                        </table>
                        <hr>
                        <h1>Total Price: <p id="totalprice" class="bloc_left_price">0</p>
                        </h1>
                        <lable>Place :</lable>
                        <select name="order_place" id="">
                        <?php
                        // DB connection
                        include '../Models/dbConnection.php';
                        $result = mysqli_query($connect, "select * from users ");
                        while ($row = mysqli_fetch_assoc($result)) {
                           echo "<option>{$row['room_no']}</option>";
                        }
                        
                        ?>
                        </select>

                        <input type="text" name="order_comment" placeholder="Order  notes" value="" />
                        <button type="submit" onclick="submitdata(event)" name="orders">submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="row">
                    <?php include '../Controllers/iterate.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/JQuery-3.3.1.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/myorder.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script scr="../assets/js/bootstrap.min.js"></script>
    <script scr="../assets/js/popper.js"></script>
    <script src="../assets/js/Orders.js"></script>
</body>

</html>