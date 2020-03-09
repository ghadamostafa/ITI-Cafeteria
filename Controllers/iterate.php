
                
                    <!-- <div class="myproduct col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a></h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                   <a class="btn btn-success btn-block" onclick="addproduct(this,'cola',6,888,'/img')">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->


                    
<?php 


$conn = mysqli_connect("localhost","root","","iti_cafeteria");
if($conn){
// echo 'conected ';

$result= mysqli_query($conn,"
SELECT * from products");

if($result){

while($row=mysqli_fetch_assoc($result)){ 
    $product_name=$row["product_name"];
    $product_id=$row["product_id"];
    $product_price=$row["price"];
    $product_image=$row["product_image"];
    
    

    // echo '<hr>';
    // echo "///$product_id.$product_name.$product_price///";
    // var_dump($row);
    ?>

       <div class="myproduct col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../assets/images/<?php echo $product_image;?>" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product"><?php echo $product_name;?></a></h4>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block"><?php echo $product_price;?>$</p>
                                    </div>
                                    <div class="col">
                                   <a class="btn btn-success btn-block" onclick="addproduct(this,'<?php echo $product_name;?>',<?php echo $product_price;?>,<?php echo $product_id;?>)">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 




<?php } ?>



<?php
}

}else{
    echo 'data corupted';
}

?>