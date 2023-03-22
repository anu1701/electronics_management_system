<?php
include('includes/header.php');
?>
<style>
  body{
    overflow-x:"hidden";
  }
</style>
<?php
if(isset($_POST['contact']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
   $phone=$_POST['phone'];
   $message=$_POST['message'];
  $insert_query="insert into feedback (fname,lname,email,phone,message) values (' $fname','$lname','$email','$phone','$message')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('thanks for keeping in touch')</script>";
        echo "<script>window.open('contact_us.php','_self')</script>";
    }
     
}
?>


 <link rel="stylesheet" href="stylecontact.css">
 <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form to know about exciting offers</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="tel:0824-2456845">0824-2456845</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:TheGadgetWorld@gmail.com">TheGadgetWorld@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">TheGadgetWorld.com</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="#" method="post">
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname" placeholder="First Name" name="fname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="lname" placeholder="Last Name"  name="lname">
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" placeholder="Mail"  name="email">
                        </div>
                        <div class="form-group">
                        <input name="phone" type="tel"  title="Please enter 10 digits only" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter your phone number"required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" placeholder="Write your message"></textarea>
                        </div>
                     </div><!--<a href="mailto:gadgetworld@gmail.com" class="submit-button"> -->
                    <input type="submit" value="Send Message"  class="submit-button" name="contact" > 
                </form>
            </div>
        </div>
    </section>
 
<?php
include('./includes/footer.php');
?>