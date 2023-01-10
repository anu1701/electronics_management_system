<?php
include('includes/connect.php');

 ?>
<?php
 include('includes/header.php')
?>
<?php
 include('functions/common_functions.php')
?>
 <link rel="stylesheet" href="stylesproducts.css">
<!-- fourth child -->
<div class="row">
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
      <!--fetching products-->
     <?php
     getproducts();
     get_unique_categories();
     get_unique_brands();
      ?>
    </div>
</div>
  <div class="col-md-2 p-0">
    <!-- brands to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item" style="background-color:#B8B5FF">
        <a href="#" class="nav-link text-dark"><h4>Delivery Brands</h4></a>
      </li>
      <?php
      getbrands();
      ?>
    </ul>

    <!-- categories to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item" style="background-color:#B8B5FF">
        <a href="#" class="nav-link text-dark" ><h4>Categories</h4></a>
      </li>
      <?php
      getcategories();
      ?>
    </ul>
  </div>
</div>

<?php
 include('includes/footer.php')
?>

