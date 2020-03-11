<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <title>Document</title>
</head>
<style>
    .bloc_left_price {
        color: #c01508;
        text-align: center;
        font-weight: bold;
        font-size: 150%;
    }

    .category_block li:hover {
        background-color: #007bff;
    }

    .category_block li:hover a {
        color: #ffffff;
    }

    .category_block li a {
        color: #343a40;
    }

    .add_to_cart_block .price {
        color: #c01508;
        text-align: center;
        font-weight: bold;
        font-size: 200%;
        margin-bottom: 0;
    }

    .add_to_cart_block .price_discounted {
        color: #343a40;
        text-align: center;
        text-decoration: line-through;
        font-size: 140%;
    }

    .product_rassurance {
        padding: 10px;
        margin-top: 15px;
        background: #ffffff;
        border: 1px solid #6c757d;
        color: #6c757d;
    }

    .product_rassurance .list-inline {
        margin-bottom: 0;
        text-transform: uppercase;
        text-align: center;
    }

    .product_rassurance .list-inline li:hover {
        color: #343a40;
    }

    .reviews_product .fa-star {
        color: gold;
    }

    .pagination {
        margin-top: 20px;
    }

    footer {
        background: #343a40;
        padding: 40px;
    }

    footer a {
        color: #f8f9fa !important
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
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
                            <option>Hall-102</option>
                            <option>Hall-103</option>
                            <option>Hall-104</option>
                            <option>Hall-105</option>
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

    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>About</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5>Informations</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="">Link 1</a></li>
                        <li><a href="">Link 2</a></li>
                        <li><a href="">Link 3</a></li>
                        <li><a href="">Link 4</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                    <h5>Others links</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="">Link 1</a></li>
                        <li><a href="">Link 2</a></li>
                        <li><a href="">Link 3</a></li>
                        <li><a href="">Link 4</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h5>Contact</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home mr-2"></i> My company</li>
                        <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
                        <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
                        <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">
                    <p class="float-left">
                        <a href="#">Back to top</a>
                    </p>
                    <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>t-php</i></a> | <span>v. 1.0</span></p>
                </div>
            </div>
        </div>
    </footer>
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