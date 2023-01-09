<?php
//include connect file
include('./includes/connect.php');
//get products
function getproducts(){
      global $con;
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


}?>
