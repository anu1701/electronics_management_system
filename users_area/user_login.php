<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics Shop</title>
    <link rel="stylesheet" href="stylesloginregister.css">
</head>
<body>
    <div class="container1">
      <div class="card1">
        <div class="inner-box" id="card">
            <div class="card-front">
                <h2 class="h2">LOGIN</h2>
                <form >
                    <input type="email" class="input-box" placeholder=" Email Id" required>
                    <input type="password" class="input-box" placeholder="password" required>
                    <button type="submit" class="submit-btn">Submit</button>
                    <input type="checkbox"><span>Remember me</span>
                </form>
                <button type="button" class="btn1" onclick="openSignup()">I'm New Here</button>
                <a href="">Forgot Password ?</a>
            </div>
                <div class="card-back">
                    <h2 class="h2">SIGN UP</h2>
                    <form >
                        <input type="text" class="input-box" placeholder="Name" required>
                        <input type="tel" class="input-box" placeholder=" phone number" required>
                        <input type="email" class="input-box" placeholder=" Email Id" required>
                        <input type="password" class="input-box" placeholder=" password" required>
                        <input type="password" class="input-box" placeholder=" Confirm password" required>
                        <button type="submit" class="submit-btn">Submit</button>
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