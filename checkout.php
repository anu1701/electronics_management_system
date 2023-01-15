<?php
 include('includes/connect.php')  
?>
  <div class="row px-1">
  <div class="col-md-12">
    <!-- products -->
    <div class="row">
        <?php
      if(!isset($_SESSION['username'])){
      include('user_login.php') ; 
      }
      else{
        include('payment.php') ; 
      }
    ?>
    </div>
</div>
</div>
  

