<?php
include('includes/connect.php')
?>
<?php
include('functions/common_functions.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics Shop</title>
    <link rel="stylesheet" href="stylesloginregister.css">
    
    <!--font awesome cdn-->
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
</head>
<body>
    
    <!--form-->
    <div class="container1">
      <div class="card1">
        <div class="inner-box" id="card">
            <div class="card-front">
                <h2 class="h2">LOGIN</h2>
                <form  action="" method="post">
                    <input type="text" class="input-box" placeholder="name" name="name" required>
                    <input type="password" class="input-box" placeholder="password" required name="password">
                    <button type="submit" class="submit-btn" name="user_login">Submit</button>
                    <input type="checkbox"><span>Remember me</span>
                </form>
                <button type="button" class="btn1" onclick="openSignup()">I'm New Here</button>
                <a href="">Forgot Password ?</a>
            </div>
                <div class="card-back">
                    <h2 class="h2">SIGN UP</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" class="input-box" placeholder="Name" required="required" autocomplete="off" name="user_username">
                        <input type="tel" class="input-box" placeholder=" phone number" required="required" autocomplete="off"  name="user_phone">
                           <button> <label for="file">image
                            <input type="file" class="input-box" placeholder=" image" required="required" autocomplete="off" name="image"></label></button>
                      
                        <input type="email" class="input-box" name="user_email" placeholder=" Email Id" required="required" autocomplete="off">
                        <input type="text" class="input-box" placeholder="Address" required="required" autocomplete="off" name="user_address">
                        <input type="password" class="input-box" placeholder=" password" required="required" autocomplete="off"  name="user_password">
                        <input type="password" class="input-box" placeholder=" Confirm password" required="required" autocomplete="off"  name="user_confirmpassword">
                        <button type="submit" class="submit-btn" name="user_register">Submit</button>
                        <input type="checkbox"><span>Remember me</span>
                    </form>
                    <button type="button" class="btn1" onclick="openLogin()">Already a User</button>
                    <a href="">Forgot Password ?</a>
                
            </div>
        </div>
      </div>
    </div>
    <script>
    var card=document.getElementById("card");
    function openSignup(){
        card.style.transform="rotateY(-180deg)";
    }
    function openLogin(){
        card.style.transform="rotateY(0deg)";
    }
    
        </script>
</body>
</html>
<!--php code-->
<?php
if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_phone=$_POST['user_phone'];
    $user_email=$_POST['user_email'];
    $user_address=$_POST['user_address'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $user_confirmpassword=$_POST['user_confirmpassword'];
    $user_image=$_FILES['image']['name'];
    $user_image_tmp=$_FILES['image']['tmp_name'];
    $user_ip=getIPAddress();
   //select query
   $select_query1="select * from user where  user_name= '$user_username' or user_email='$user_email'";
   $result=mysqli_query($con,$select_query1);
   $rows_count=mysqli_num_rows($result);
   if($rows_count>0){
    echo "<script>alert('username and email aready exists!!')</script>";
   }else if($user_password!= $user_confirmpassword){
    echo "<script>alert('passwords do not match')</script>";
   }
   else{
    echo "<script>alert('registration successfull')</script>";
    //folder for image
    move_uploaded_file($user_image_tmp,"user_images/ $user_image");
    //insert query
    $insert_query="insert into user(user_name,user_email,user_password,user_image,user_ip,user_address,	user_mobile)
    values('$user_username','$user_email','$hash_password',' $user_image','  $user_ip','$user_address',' $user_phone')";
    $sql_execute=mysqli_query($con,$insert_query);
}
    
 //selecting cart items
 $select_cart_items="select * from cart_details where ip_address=' $user_ip'"  ;
 $result_cart=mysqli_query($con,$select_cart_items);
 $rows_count=mysqli_num_rows($result_cart);
 if($rows_count>0){
    $_SESSION['username']=$user_username;
    echo "<script>alert('you have items in your cart')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
 }else{
    echo "<script>window.open('index.php','_self')</script>";
 }
}
?>
<?php
if(isset($_POST['user_login'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $select_query="select * from user where 
    user_name='$name' ";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    $user_ip=getIPAddress();
    //cartitem
    $select_query_cart="select * from cart_details where 
    ip_address='$user_ip'";
    $select_cart=mysqli_query($con,$select_query_cart);
     $rows_count_cart=mysqli_num_rows($select_cart);
    if($row_count>0){
        if(password_verify($password,$row_data['user_password'])){
          //  echo "<script>alert('You have logged in successfully')</script>";
          if($row_count==1 and $row_count_cart==0){
          echo "<script>alert('You have logged in successfully')</script>";
          echo "<script>window.open('profile.php','_self')</script>";
          
        }else{
            echo "<script>alert('You have logged in successfully')</script>";
          echo "<script>window.open('payment.php','_self')</script>";
        }
     } else{
            echo "<script>alert('invalid credentials')</script>";
        }

    }else{
        echo "<script>alert('invalid credentials')</script>";
    }

}
?>