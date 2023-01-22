<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY orders</title>
</head>
<body>
    <?php
    $user_name=$_SESSION['username'];
    $get_users="select * from user where user_name='$user_name' ";
    $result=mysqli_query($con,$get_users);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['user_id'];
 

    ?>
<h3 class="text-center">All My Orders</h3>
<table class="table table-bordered mt-5">
    <thead style="background-color:#A555EC">
    <tr>
        <th>SL.No</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
  <?php
  $get_order_details="select * from user_orders where user_id=$user_id";
  $result_orders=mysqli_query($con,$get_order_details);
  $number=1;
  while($row_orders=mysqli_fetch_assoc($result_orders)){
    $order_id=$row_orders['order_id'];
    $amount_due=$row_orders['amount_due'];
    $invoice_number=$row_orders['invoice_number'];
    $total_products=$row_orders['total_products'];
    $date=$row_orders['order_date'];
    $status=$row_orders['order_status'];
    if($status=='pending'){
        $status='Incomplete';
    }else{
        $status='Complete';
    }
    
    echo "
    <tr>
            <td> $number</td>
            <td> $amount_due</td>
            <td> $total_products</td>
            <td> $invoice_number</td>
            <td>$date</td>
            <td> $status</td>";
            ?>
            <?php
            if($status=='Complete'){
                echo "<td>Paid</td>";
            }else{
                echo "<td><a href='confirm_payment.php?order_id=$order_id' style='text-decoration:none; color: #000;'>Confirm</a></td>
                </tr>";
            }
            
            
       
        $number++;
    
  }
  ?>
        
    </tbody>
</table>


</body>
</html>
