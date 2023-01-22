<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete account</title>
</head>
<style>
        .img{
            width:150px;
            height:150px;
            object-fit:contain;
        }
    </style>
<body>
    <h3 class="text-danger text-center mb-4 mt-4">Delete Account <img src="images/delete.png" alt="" class="img"></h3>
    <form action="" method="post"  class="text-center mt-5">
    <div class="form-outline mb-4">
        <input type="submit" class="form-control w-50 m-auto" value="Delete Account" name="delete">
    </div>
    <div class="form-outline mb-4">
        <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="Dont Delete Account">
    </div>
    </form>
    <?php
    $username_session=$_SESSION['username'];
    if(isset($_POST['delete'])){
        $delete_query="Delete from user where user_name='$username_session'";
        $result=mysqli_query($con,$delete_query);
        if($result){
            session_destroy();
            echo"<script>alert('Account Deleted Succesfully')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }

    }
    if(isset($_POST['dont_delete'])){
        echo "<script>window.open('profile.php','_self')</script>";
    }
    ?>
</body>
</html>