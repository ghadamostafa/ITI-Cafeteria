<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">P_Name</th>
      <th scope="col">Price_$</th>
      <th scope="col">QuanTity</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../Models/dbConnection.php';
    $result2 = mysqli_query($connect, "SELECT a.Quantity ,b.product_name,b.price,b.product_image FROM products_orders a INNER JOIN products b ON a.product_id = b.product_id WHERE a.order_id=" . $order_id);
    if ($result2) {
      while ($row2 = mysqli_fetch_assoc($result2)) { // var_dump($row2);echo '<hr>'; 
    ?>
        <tr>
          <td><img style="width:100px;height:100px;" class="card-img-top" src="../assets/images/<?php echo $row2['product_image']; ?>" alt="Card image cap">
          </td>
          <td><?php echo $row2['product_name']; ?></td>
          <td><?php echo $row2['price']; ?></td>
          <td><?php echo $row2['Quantity']; ?></td>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
</table>