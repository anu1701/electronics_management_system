<?php
include('includes/connect.php');
include ('functions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget World-Cart Details</title>
    <link rel="stylesheet" href="style.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
  <nav class="navbar navbar-expand-lg navbar-light "  style="background-color: #D09CFA;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./images/logo0.png"alt="" width=50 height=50></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">  
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact_us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item-2">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping fa-lg" ></i>
          <sup>
            <?php
              cart_item();
            ?>
          </sup>
        </a>
        </li>
      </ul>
    </div>
   </div>
  </div>
</nav>
   </div>

    <!-- calling cart function -->
<?php
cart();
?>

   <!--second child-->
   <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #4F3B78">
       <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
       </ul> 
  </nav>

  <!-- third child -->
  <div class="bg-light">
    <h3 class="text-center">Cart Details</h3>
  </div>

  <!-- fourth child -->
  <div class="container">
        <div class="row">
            <table class="table table-bordered text-center">
                <thread>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th>Operations</th>
                    </tr>
                </thread>
                <tbody>
                    <tr>
                        <td>TV</td>
                        <td><img src="./images/arrival-1.jpg" alt=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td>25000</td>
                        <td><input type="checkbox"></td>
                        <td>
                            <p>Update</p>
                            <p>Remove</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- subtotal -->
            <div class="d-flex mb-5">
                <h4 class="px-3">Subtotal:<strong>25000/-</strong></h4>
                <a href="products.php" class='btn btn-light px-3 py-3 border-0 mx-3' style='background-color:#810CA8'>Continue Shopping</a>
                <a href="#" class='btn btn-light px-3 py-3 border-0 mx-3' style='background-color:#810CA8'>Checkout</a>
            </div>
        </div>
  </div>
  <?php
  include('includes/footer.php');
  ?>



  