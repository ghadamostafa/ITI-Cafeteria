<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <style>
        body {
            background-image: url("../assets/Images/bg.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            color: white;
        }

        .order-spread {
            display: none;
        }

        .display-block {
            display: block;
        }

        .display-none {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    include 'userNavBar.php';
    ?>
        <section class="container">
            <h1>My Orders</h1>
            <!--        Start of Date Picker-->
            <form action="" method="POST">
                <div class="row">
                    <div class="from-group col-5">
                        <label for="start">Date from:</label>
                        <input type="date" class="form-control start" name="start" />
                    </div>
                    <div class="form-group col-5">
                        <label for="end">Date to:</label>
                        <input type="date" class="form-control end" name="end" />
                    </div>
                    <div class="col-2 mt-4 p-2">
                    <input type="submit" value="Show" name="showOrders" class="btn btn-block" style="background-color: brown;">
                    </div>

                </div>
            </form>
        </section>
        <!--        End of Date Picker-->
        <section class="container">
        <table class="table" style="background-color:white" >
                <thead class="thead" style="background-color: brown;">
                    <tr>
                        <th scope="col">Order Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php



                    if (isset($_POST["showOrders"])) {
                        require("../Models/dbConnection.php");
                        require("../Controllers/ordersController.php");
                        $startDate = $_POST["start"];
                        $endtDate = $_POST["end"];
                        $userOrders = showUserOrders($startDate, $endtDate);
                        // var_dump($userOrders);

                        while ($row = mysqli_fetch_assoc($userOrders)) {
                    ?>
                            <tr class="order-row">
                                <td>
                                    <span><?php echo $row["date"]; ?></span>
                                    <i class="fa fa-plus"></i>
                                </td>
                                <td><?php echo $row["status"]; ?></td>
                                <td><span><?php echo $row["amount"]; ?></span> EGP</td>
                                <!-- <span hidden class="orderID"><?php echo $row["order_id"]; ?></span> -->
                                <td>
                                    <?php
                                    if (strtolower($row["status"]) == "processing") {
                                    ?>
                                        <button id="<?php echo $row["order_id"]; ?>" class="btn btn-danger cancel">CANCEL</button>

                                    <?php
                                    } ?>




                                </td>
                            </tr>
                            <!-- ! Row 1 Spread -->

                            <!-- ! End of Row 1 Spread -->
                    <?php
                        }
                    } ?>
                </tbody>
            </table>
        </section>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script scr="../assets/js/JQuery-3.3.1.min.js"></script> -->
    <script scr="../assets/js/bootstrap.min.js"></script>
    <script scr="../assets/js/popper.js"></script>
    <script src="../assets/js/Orders.js"></script>

</html>