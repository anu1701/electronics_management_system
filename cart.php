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
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
    <style>
        .cart_image{
        width: 80px;
        height: 80px;
        object-fit: contain;
        }
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
    </style>
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
            <form action="" method="post">
            <table class="table table-bordered text-center">
               
                    <!-- php code to display dynamic data -->
                    <?php
                        
                        $get_ip_add = getIPAddress();
                        $total_price = 0;
                        $cart_query = "Select * from cart_details where ip_address='$get_ip_add'";
                        $result=mysqli_query($con, $cart_query);
                        $result_count=mysqli_num_rows($result);
                        if($result_count>0){
                             echo "  <thead>
                             <tr>
                                 <th>Product Title</th>
                                 <th>Product Image</th>
                                 <th>Quantity</th>
                                 <th>Total Price</th>
                                 <th>Select</th>
                                 <th colspan='2'>Operations</th>
                             </tr>
                         </thead>
                         <tbody>";
                        
                        while($row=mysqli_fetch_array($result)){
                            $product_id = $row['product_id'];
                            $select_products = "Select * from products where product_id='$product_id'";
                            $result_products = mysqli_query($con, $select_products);
                            while($row_product_price=mysqli_fetch_array($result_products)){
                                $product_price = array($row_product_price['product_price']);
                                $price_table = $row_product_price['product_price'];
                                $product_title=$row_product_price['product_title'];
                                $product_image1=$row_product_price['product_image1'];
                                $product_values = array_sum($product_price);
                                $total_price+=$product_values;
                    ?>
                    <tr>
                        <td><?php echo $product_title ?></td>
                        <td><img src="./images/<?php echo $product_image1 ?>" alt="" class="cart_image"></td>
                        <td><input type="text" name="qty" class="form-input w-50"></td>
                        <?php
                          $get_ip_add = getIPAddress();
                          if(isset($_POST['update_cart'])){
                            $quantities = $_POST['qty'];
                            //$quantities = (int) $quantities;
                            $update_cart = "update cart_details set quantity=$quantities where ip_address='$get_ip_add'";
                            $result_products_quantity = mysqli_query($con, $update_cart);
                            $total_price = $total_price * $quantities;
                          }
                        ?>
                        <td><?php echo $price_table ?>/-</td>
                        <td><input type="checkbox" name="removeitem[]" value="<?php
                        echo $product_id
                        ?>"></td>
                        <td>
                            <!-- <button class='btn btn-light px-3 py-2 border-0 mx-3' style='background-color:#810CA8'>Update</button> -->
                            <input type="submit" value="Update Cart" class="btn btn-light px-3 py-2 border-0 mx-3" style='background-color:#810CA8' name="update_cart">
                           <!-- <button class='btn btn-light px-3 py-2 border-0 mx-3' style='background-color:#810CA8'>Remove</button>-->
                           <input type="submit" value="Remove" class='btn btn-light px-3 py-2 border-0 mx-3' style='background-color:#810CA8' name="remove_cart">
                        </td>
                    </tr>

                    <?php
                         }
                         }}
                         else{
                          echo " <h2 class='text-center text-danger'>Cart is empty 
                          </h2> <img src='images/empty-cart.webp' alt='cart empty' class='center'>"
                          ;
                         }
                    ?>
            
                </tbody>
            </table>
            <!-- subtotal -->
            <div class="d-flex mb-5">
              <?php $get_ip_add = getIPAddress();
                        $cart_query = "Select * from cart_details where ip_address='$get_ip_add'";
                        $result=mysqli_query($con, $cart_query);
                        $result_count=mysqli_num_rows($result);
                        if($result_count>0){
                         echo " <h4 class='px-3'>Subtotal:<strong> $total_price /-</strong></h4>
                         <input type='submit' value='Continue Shopping' class='btn btn-light px-3 py-2 border-0 mx-3' style='background-color:#810CA8' name='continue_shopping'>
                         <a href='#'><button class='btn btn-light px-3 py-2 border-0 mx-3' style='background-color:#810CA8'>Checkout</button></a>";
                         }
                         else {
                          echo "<input type='submit' value='Continue Shopping' class='btn btn-light px-3 py-2 border-0 mx-3' style='background-color:#810CA8' name='continue_shopping'>";
                         }
                         if(isset($_POST['continue_shopping'])){
                          echo "<script>window.open('products.php','_self')</script>";
                         }
                         ?>
                
            </div>
        </div>
  </div>
  </form>
  <!--function to remove items-->
  <?php
  function remove_cart_item(){
    global $con;
    if(isset($_POST['remove_cart'])){
      foreach($_POST['removeitem'] as $remove_id){{
        echo $remove_id;
        $delete_query="Delete  from cart_details where product_id=$remove_id";
        $run_delete=mysqli_query($con,$delete_query);
        if($run_delete){
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }}
    }
  }
  echo $removeitem= remove_cart_item();
  ?>

  <!-- include footer -->
  <?php
  include('includes/footer.php');
  ?>



  