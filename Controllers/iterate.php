<?php
include '../Models/dbConnection.php';
$result = mysqli_query($connect, "SELECT * from products");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $product_name = $row["product_name"];
        $product_id = $row["product_id"];
        $product_price = $row["price"];
        $product_image = $row["product_image"];
?>
        <div class="myproduct col-12 col-md-6 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $product_image; ?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $product_name; ?></h4>
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-danger btn-block"><?php echo $product_price; ?>$</p>
                        </div>
                        <div class="col">
                            <a class="btn btn-success btn-block" onclick="addproduct(this,'<?php echo $product_name; ?>',<?php echo $product_price; ?>,<?php echo $product_id; ?>)">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }
}
?>