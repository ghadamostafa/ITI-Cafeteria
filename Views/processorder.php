<!doctype html>
<html lang="en">

<head>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <script src="../assets/js/JQuery-3.3.1.js"></script>
  <script src="../assets/js/popper.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/myorder.js"></script>
  <script scr="../assets/js/bootstrap.min.js"></script>
  <script scr="../assets/js/popper.js"></script>
  <script src="../assets/js/Orders.js"></script>
  <link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body>
  <?php
  include 'adminNavBar.php';
  if (isset($_GET)) {
    if (!empty($_GET['done'])) {
      if ($_GET['done'] == 1) {
  ?>
        <div class="alert  alert-dismissible fade show alert-success" role="alert">
          <strong>MS/Shimaa !</strong> the order has been confirmed
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  <?php    }
    }
  }
  ?>
  

  <div class="container">
                <!--  -->
               <span><h1>specific user:</h1></span> 
             
                      <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="browser-default custom-select custom-select-lg mb-3">
                <option disabled selected>chose specific user</option>
                <option value="../Views/processorder.php" >ALL user</option>

                   <?php include '../Controllers/iterateuser.php'; ?>
                        </select>
    

                        

                <!--  -->
                
    <?php include '../Controllers/iterateprocess.php'; ?>
  </div>
</body>
<script>

$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

</html>