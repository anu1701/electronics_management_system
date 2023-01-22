<?php
include ('./functions/common_functions.php');
session_start();
include('includes/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget World</title>
   
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  body{
    overflow-x:"hidden";
  }
</style>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
  <nav class="navbar navbar-expand-lg "  style="background-color: #000000">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./images/logo0.png"alt="" width=50 height=50></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">  
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active navbar-light" style="color:#7b70b7" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-light" style="color:#7b70b7" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-light" style="color:#7b70b7" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-light" style="color:#7b70b7" href="contact_us.php">Contact Us</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link navbar-light" style="color:#7b70b7" href="user_login.php">Register</a>
        </li> -->
        <li class="nav-item-2">
          <a class="nav-link navbar-light" style="color:#7b70b7" href="cart.php"><i class="fa-solid fa-cart-shopping fa-lg" ></i>
          <sup>
            <?php
              cart_item();
            ?>
          </sup>
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-light" style="color:#7b70b7" style="color:#7b70b7" href="#">Total Price:<?php total_cart_price(); ?>/-</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
       <!-- <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="submit">
                  <i class="fa fa-search"></i>
                    </button>-->
                    <!-- <input type="submit" value=search> -->
                    <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                    <input type="submit" value="Search" class="btn" style="color:#7b70b7" name="search_data_product">


      </form>
    </div>
   </div>
  </div>
</nav>
   </div>


   <!--second child-->
   <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #4F3B78">
       <ul class="navbar-nav me-auto">
        
        <?php
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link' href='#'>Welcome Guest</a>
        </li>
          ";
        }else{
          echo " <li class='nav-item'>
          <a class='nav-link' href='profile.php'>Welcome ".$_SESSION['username']." </a>
        </li>";

        }
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link' href='user_login.php'>Login</a>
        </li>
          ";
        }else{
          echo " <li class='nav-item'>
          <a class='nav-link' href='logout.php'>Logout</a>
        </li>";

        }
        ?>
       </ul> 
  </nav>

  <!-- calling cart function -->
<?php
cart();
?>