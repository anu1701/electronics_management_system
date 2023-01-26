<?php
if(isset($_GET['edit_account'])){
    $user_session_name=$_SESSION['username'];
    $select_query="select * from user where user_name='$user_session_name'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc( $result_query);
    $user_id=$row_fetch['user_id'];
    $user_name=$row_fetch['user_name'];
    $user_email=$row_fetch['user_email'];
    $user_address=$row_fetch['user_address'];
    $user_image=$row_fetch['user_image'];
    $user_mobile=$row_fetch['user_mobile'];
}
    if(isset($_POST['user_update'])){
        $update_id=$user_id;
        $user_name=$_POST['user_username'];
        $user_email=$_POST['user_email'];
        $user_address=$_POST['user_address'];
        $user_image=$_FILES['user_image']['name'];
        $user_image_tmp=$_FILES['user_image']['tmp_name'];
        $user_mobile=$_POST['user_mobile'];
        move_uploaded_file($user_image_tmp,"user_images/$user_image");
        //update query
        $update_data="update user set user_name='$user_name',user_email='$user_email',user_mobile='$user_mobile',user_address='$user_address',user_image='$user_image' where user_id=' $update_id'";
        $result_query_update=mysqli_query($con,$update_data);
        if($result_query_update){
            echo "<script>alert('Data updated successfully')</script>";
            echo "<script>window.open('profile.php','_self')</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit account</title>
    <!--font awesome cdn-->
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
     <!--bootstrap css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .pff{
            width:100px;
            height:100px;
            object-fit:contain;
        }
    </style>
</head>

<body>
<h3 class="text-center mb-4">Edit Account</h3>
<form action="" method="post" enctype="multipart/form-data" class="text-center">
    <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_name?>" name="user_username">
    </div>
    <div class="form-outline mb-4">
        <input type="email" class="form-control w-50 m-auto" name="user_email" value="<?php echo $user_email?>">
    </div>
    <div class="form-outline mb-4 d-flex w-50 m-auto">
        <input type="file" class="form-control m-auto "  name="user_image" value="?<php echo $user_image?>" >
        <img src="user_images/<?php echo $user_image?>" alt="" class="pff">
    </div>
    <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_address?>"name="user_address">
    </div>
    <div class="form-outline mb-4">
        <input type="tel" class="form-control w-50 m-auto" name="user_mobile" value="<?php echo $user_mobile?>">
    </div>
  
        <input type="submit"  name="user_update" value="Update" style="background-color:#7b70b7" class="py-2 px-3 border-0" >
 
</form>
</body>
</html>
