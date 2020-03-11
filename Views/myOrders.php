<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <style>
        .order-spread {
            display: none;
        }

        .display-block {
            display: block;
        }
    </style>
</head>
<body>
    <section class="container">
        <h1>My Orders</h1>
        <form action="">
            <div class="row">
                <div class="from-group col-6">
                    <label for="start">Date from:</label>
                    <input type="date" class="form-control start" name="start" />
                </div>
                <div class="form-group col-6">
                    <label for="end">Date to:</label>
                    <input type="date" class="form-control end" name="end" />
                </div>
            </div>
        </form>
    </section>
    <section class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="order-row">
                    <td>
                        <span>2015/02/02 10.30 AM</span>
                        <i class="fa fa-plus"></i>
                    </td>
                    <td>Processing</td>
                    <td><span>55</span> EGP</td>
                    <td><button class="btn btn-danger">CANCEL</button></td>
                </tr>
                <!-- ! Row 1 Spread -->
                <tr class="order-spread">
                    <td>
                        <div class="row">
                            <!-- Item -->
                            <div class="col-3">
                                <div>
                                    <img src="../assets/Images/cup.png" width="100px" height="100px" alt="">
                                    <p>Tea</p>
                                    <span>5 LE</span>
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <!-- Item -->
                            <div class="col-3">
                                <div>
                                    <img src="../assets/Images/cup.png" width="100px" height="100px" alt="">
                                    <p>Tea</p>
                                    <span>5 LE</span>
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <!-- Item -->
                            <div class="col-3">
                                <div>
                                    <img src="../assets/Images/cup.png" width="100px" height="100px" alt="">
                                    <p>Tea</p>
                                    <span>5 LE</span>
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <!-- Item -->
                            <div class="col-3">
                                <div>
                                    <img src="../assets/Images/cup.png" width="100px" height="100px" alt="">
                                    <p>Tea</p>
                                    <span>5 LE</span>
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>2015/02/01 10.30 AM</span>
                        <i class="fa fa-plus"></i>
                    </td>
                    <td>Out for delivery</td>
                    <td><span>20</span> EGP</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span>2015/01/01 10.35 AM</span>
                        <i class="fa fa-minus"></i>
                    </td>
                    <td>Done</td>
                    <td><span>29</span> EGP</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script scr="../assets/js/bootstrap.min.js"></script>
<script scr="../assets/js/popper.js"></script>
<script src="../assets/js/Orders.js"></script>
</html>