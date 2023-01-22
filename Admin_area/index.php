<!-- connect file -->
<?php
include('../includes/connect.php');
// include('../functions/common_functions.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- css file  -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image{
    width: 100px;
    object-fit:contain;
    }
    .footer{
        position: absolute;
        bottom: 0;
    }
    body{
        overflow-x:hidden;
        
    }
    .product_img{
        width:100px;
        height: 75px;
        object-fit: contain;
    }
    .btnb{
        margin-left: 10px; 
        margin-top:10px;
        width:720px;
        height:30px;
       }
       th{
        width:100vh;
        height:15vh;
        justify-content:center;
       
       }
    
    </style>

</head>
<body>
    <!-- navbar -->
    <div class="container-fluid px-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#D09CFA;">
            <div class="container-fluid">
                <img src="../images/logo0.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child -->
        <!-- <div class="row">
            <div class="col-md-12 p-5 px-5 py-5 d-flex align-items-center" style="background-color:#D09CFA"> -->
                <!-- <div class="p-3">
                    <a href="#"><img src="../images/admin.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div> -->
                <!-- <div class="button text-center" style="margin-left:40px;">
                    <button class="btnb" ><a href="insert_product.php" class="nav-link text-light  " style="background-color:#4F3B78">Insert Products</a></button>
                    <button class="btnb"><a href="index.php?view_products" class="nav-link text-light  " style=background-color:#4F3B78>View Products</a></button>
                    <button class="btnb"><a href="index.php?insert_category" class="nav-link text-light " style=background-color:#4F3B78>Insert Categories</a></button>
                    <button class="btnb"><a href="index.php?view_categories" class="nav-link text-light " style=background-color:#4F3B78>View Categories</a></button>
                    <button class="btnb"><a href="index.php?insert_brand" class="nav-link text-light " style="background-color:#4F3B78">Insert Brands</a></button>
                    <button class="btnb"><a href="index.php?view_brands" class="nav-link text-light " style=background-color:#4F3B78>View Brands</a></button>
                    <button class="btnb"><a href="index.php?list_orders" class="nav-link text-light " style=background-color:#4F3B78>All Orders</a></button>
                    <button class="btnb"><a href="index.php?list_payments" class="nav-link text-light " style=background-color:#4F3B78>All Payments</a></button>
                    <button class="btnb"><a href="index.php?list_users" class="nav-link text-light " style=background-color:#4F3B78>List Users</a></button>
                    <button class="btnb"><a href="admin_logout.php" class="nav-link text-light" style=background-color:#4F3B78>Logout</a></button>
                </div>
        </div>
    </div> -->
     <div class="row">
          <div class="col-md-12 " >
                <!-- <div class="p-3">
                    <a href="#"><img src="../images/admin.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div> -->

                <div class=" text-center m-auto">
                <table class="table table-bordered mt-5"><thead class="nav-link text-light  " style="background-color:#4F3B78"><tr>
                   <th><a href="insert_product.php" class="nav-link text-light  " >Insert Products</a></th> 
                   <th><a href="index.php?view_products" class="nav-link text-light  " >View Products</a></th> 
                  <th><a href="index.php?insert_category" class="nav-link text-light " >Insert Categories</a></th>  
                   <th> <a href="index.php?view_categories" class="nav-link text-light " >View Categories</a></th>
                   <th><a href="index.php?insert_brand" class="nav-link text-light " >Insert Brands</a></th> 
                    <th><a href="index.php?list_orders" class="nav-link text-light " >All Orders</a></th>
                    <th><a href="index.php?list_payments" class="nav-link text-light " >All Payments</a></th>
                    <th><a href="index.php?list_users" class="nav-link text-light ">List Users</a></th>
                   <th><a href="admin_logout.php" class="nav-link text-light" >Logout</a>
                   </th>
                     </tr>
                   </thead>
                </table>
                </div>
        </div>
    </div>

    <!-- fourth child -->
    <div class="container my-3">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if (isset($_GET['insert_brand'])) {
            include('insert_brands.php');
        }
        if(isset($_GET['view_products'])){
                include('view_products.php');
        }
        if (isset($_GET['edit_products'])) {
            include('edit_products.php');
        }
        if (isset($_GET['delete_product'])) {
            include('delete_product.php');
        }
        if (isset($_GET['view_categories'])) {
            include('view_categories.php');
        }
        if (isset($_GET['view_brands'])) {
            include('view_brands.php');
        }
        if (isset($_GET['edit_category'])) {
            include('edit_category.php');
        }
        if (isset($_GET['edit_brands'])) {
            include('edit_brands.php');
        }
        if (isset($_GET['delete_category'])) {
            include('delete_category.php');
        }
        if (isset($_GET['delete_brands'])) {
            include('delete_brands.php');
        }
        if (isset($_GET['list_orders'])) {
            include('list_orders.php');
        }
        if (isset($_GET['list_payments'])) {
            include('list_payments.php');
        }
        if (isset($_GET['list_users'])) {
            include('list_users.php');
        }

        ?>
    </div>

    <!-- last child -->
    <!-- include footer -->
    <!-- <div class="bg-info p-3 text-center footer">
        <p>Copyright © 2023 All rights reserved | This template is made with  by Aanchal&Anusha</p>
    </div> -->
</div>
 <!--bootstrap js link--> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     
</body>
</html>