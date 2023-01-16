<!--connect file-->
<?php
 include('includes/connect.php')  
?>
<!--connect file-->
<?php
 include('includes/header.php')  
?>
 <link rel="stylesheet" href="style.css">
 <style>
    #hero{
    min-height: 100vh;
    background: linear-gradient(rgba(6, 0, 6, 0.766),rgba(96, 7, 121, 0.673),rgba(171, 17, 148, 0.716)),url(./images/store\ hero.jpg);
    background-position: center;
    background-size: cover;
    display: grid;
    place-content: center;
    text-align: center;
    }
    #hero h1{
        color:#d8d8dfe7;
        text-align:center; 
        font-size: 3.7rem;
        }
    .heading-3{
        font-size: 1.7rem;
        text-align: justify;
        color:rgb(26, 158, 145)
    }
 </style>
 <div id="hero">
        <div class="container">
            <h1 class="heading-1"><span id="hero-title"></span>
               </h1>
               <p><h3 class="heading-3">We provide you with quality gadgets at its finest!!</h3>
    
               
                    <a href="products.php"><button class="btn">shop now
                    </button></a>
                </p>
                
        </div>
</div>
   <?php
 include('includes/footer.php')  
?> 




