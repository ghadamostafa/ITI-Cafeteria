<?php  echo '<h1>helo</h1>';?>


<?php 
echo '<h1>helo</h1>';

include '../Models/dbConnection.php';
$result = mysqli_query($connect, "SELECT user_id, name FROM users
");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) { 
?>
               
             <option value="../Views/processorder.php?id=<?php echo $row['user_id'];?>">
                <?php echo $row['name'];?>
          
                </option>
  <?php   }
}else{

    echo 'no res';
  

}




?>

