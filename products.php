<?php
 include('includes/connect.php') 
 
?>
<?php
 include('includes/header.php')
?>
 <link rel="stylesheet" href="stylesproducts.css">
<!-- fourth child -->
<div class="row">
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
      <!--fetching products-->
      <?php
      $select_query="select * from products order by rand()";
      $result_query=mysqli_query($con,$select_query);
      //$row=mysqli_fetch_assoc($result_query);
     // echo $row['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
          echo "<div class='col-md-4 mb-2'>
          <div class='card shadow' style='width:20rem'>
            <img src='./Admin_area/product_images/$product_image1'class='card-img-top' alt=' $product_title'>
               <div class='card-body text-center'>
                 <h5 class='card-title'> $product_title</h5>
                    <p class='card-text'>$product_description</p>
                          <a href='#' class='btn btn-light' style='background-color:#810CA8'>Add to cart</a>
                         <a href='#' class='btn btn-secondary'>View more</a>
               </div>
           </div>
        </div>";
          }
      ?>
      <!--<div class="col-md-4 mb-2">
       <div class="card">
          <img src="./images/watch.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <a href="#" class="btn btn-light" style="background-color:#810CA8">Add to cart</a>
                      <a href="#" class="btn btn-secondary">View more</a>
            </div>
        </div>
     </div>-->
    </div>
</div>
  <div class="col-md-2 p-0">
    <!-- brands to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item" style="background-color:#B8B5FF">
        <a href="#" class="nav-link text-dark"><h4>Delivery Brands</h4></a>
      </li>
      <?php
      $select_brands="Select * from brands";
      $result_brands=mysqli_query($con,$select_brands);
      //$row_data=mysqli_fetch_assoc($result_brands);
      //echo $row_data['brand_title'];
        while($row_data=mysqli_fetch_assoc($result_brands)){
          $brand_title=$row_data['brand_title'];
          $brand_id=$row_data['brand_id'];
          echo "<li class='nav-item'>
          <a href='products.php?brand=$brand_id' class='nav-link text-dark' style='background-color:#F3F1F5'>$brand_title</a>
        </li>";
        }
      ?>
      
      
    </ul>

    <!-- categories to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item" style="background-color:#B8B5FF">
        <a href="#" class="nav-link text-dark" ><h4>Categories</h4></a>
      </li>
      <?php
      $select_categories="Select * from categories";
      $result_categories=mysqli_query($con,$select_categories);
      //$row_data=mysqli_fetch_assoc($result_brands);
      //echo $row_data['brand_title'];
        while($row_data=mysqli_fetch_assoc($result_categories)){
          $category_title=$row_data['category_title'];
          $category_id=$row_data['category_id'];
          echo "<li class='nav-item'>
          <a href='products.php?categories=$category_id' class='nav-link text-dark' style='background-color:#F3F1F5'>$category_title</a>
        </li>";
        }
      ?>
    </ul>
  </div>
</div>

<?php
 include('includes/footer.php')
?>

