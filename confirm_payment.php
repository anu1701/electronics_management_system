<?php
include('includes/connect.php');
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    $select_data="select * from user_orders where order_id=$order_id";
    $result=mysqli_query($con,$select_data);
    $row_fetch=mysqli_fetch_assoc($result);
    $invoice_number=$row_fetch['invoice_number'];
    $amount_due=$row_fetch['amount_due'];
  
}
if(isset($_POST['confirm_payment']))
{
    $invoice_number=$_POST['invoice_number'];
  $amount=$_POST['amount'];
   $payment_mode=$_POST['payment_mode'];
  $insert_query="insert into user_payments (order_id,invoice_number,amount,payment_mode) values($order_id, $invoice_number,$amount,'$payment_mode')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<h3 class='text-center'>Successfully Completed THe Payment<h3>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders="update user_orders set order_status='Complete' where order_id=$order_id ";
    $result_orders=mysqli_query($con,$update_orders);
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paymentpage</title>
   <!--bootstrap css-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color:#000">
    <div class="container my-5">
        <h1 class="text-center" style="color:#D09CFA">Confirm Payment</h1>
        <form action="" method="post">
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number?>" style="color:#301E67">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-light">Amount</label>
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $amount_due?>" style="color:#301E67">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                  <select name="payment_mode" class="form-select w-50 m-auto" style="color:#301E67">
                    <option >Select Payment Mode</option>
                    <option >UPI</option>
                    <option >Net Banking</option>
                    <option >Paypal</option>
                    <option>Cask on Delivery</option>
                    <option>Pay Offline</option>
                  </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="py-2 px-3 border-0" value="confirm_payment" name="confirm">
            </div>
        </form>
    </div>
    
</body>
</html>
