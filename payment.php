<?php
include('includes/connect.php')
?>
<?php
include('functions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
     <!--bootstrap css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .img{
        width:70%;
    }
    
</style>

</head>

<body>
    <?php
    //php code to access user id
    $user_ip= getIPAddress();
    $get_user1="select * from user where user_ip='$user_ip'";
    $result1=mysqli_query($con,$get_user1);
    $run_query=mysqli_fetch_array($result1);
    $user_id=$run_query['user_id'];
    
    ?>
   <div class="container">
    <h2 class="text-center" style="color:#7b70b7">Payment Options</h2>
    <div class="row d-flex justify-content-center align-items-center my-5">

        <div class="col-md-6">
        <a href="https://www.paypal.com/" target="_blank"><img src="./images/pay1.jpg" alt=" " class=img></a>
        </div>
        <div class="col-md-6">
        <a href="order.php?user_id=<?php echo $user_id?>" ><img src="./images/pay2.jpg" alt="" class=img></a>
        </div>

    </div>
    



   </div>
</body>
</html>