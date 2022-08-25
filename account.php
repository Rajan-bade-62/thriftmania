<?php
// session_start();
// if (!isset($_SESSION['email'])){
//     header("Location:../account.php");
// }
//Database Connection

 if(isset ($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $db = mysqli_connect('localhost','root','','thriftmania');

$sql = "insert into register 
(username, email, phone, password)
value ('$username', '$email', '$phone', '$password')";

$res = mysqli_query($db, $sql);
if ($res){
    header('Location:account.php');
  //  echo "success";
}
else{
    echo "Insert failed";
}
}
?>

<?php

 if(isset ($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = mysqli_connect('localhost','root','','thriftmania');

$sql = "insert into login 
(username, password)
value ('$username', '$password')";

$res = mysqli_query($db, $sql);
if ($res){
    header('Location:index.php');
  //  echo "success";
}
else{
    echo "Insert failed";
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products-Thrift Mania</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
</head>
<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/thrift.jpg" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="product.php">Products</a> </li>
                    <li><a href="">About </a> </li>
                    <li><a href="contact.php">Contact </a></li>
                    <li><a href="account.php">Account </a></li>
    
                </ul>
            </nav>
            <a href="cart.php">  <img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>
    </div>

     <!------------account page--------------->
     <div class="account-page">
        <div class="container">
            <div class="row">
                
                <div class="col-2">
                    <img src="images/shopping.png" alt="" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="" method="post">
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="submit" name="submit" class="btn">Login</button>
                            <a href="">Forget Password</a>
                        </form>

                        <form id="RegForm" action="" method="post">
                            <input type="text" name="username" placeholder="Username" >
                            <input type="email" name="email" placeholder="Email" >
                            <input type="number" name="phone" placeholder="Phone Number" >
                            <input type="password" name="password" placeholder="Password" >
                            <button type="submit" class="btn" name="register">Register</button>
                        </form>
                    </div>
                </div>
    
            </div>
         </div>
     </div>
     

    <!----footer----->
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="footer-col-1">
                    <img src="images/thrift.jpg" alt="">
                    <p>Our main motto is to create eco-friendly and sustainable environment.</p>
                </div>


                <div class="footer-col-2">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Tiktok</li>

                    </ul>
                </div>

            </div>
            <hr>
            <p class="copyright">Copyright 2022 Thrift Mania</p>
        </div>
    </div>

    <!----------js for toggle menu---------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if( MenuItems.style.maxHeight= "0px")
            {
                MenuItems.style.maxHeight= "200px";
            }
            else{
                MenuItems.style.maxHeight= "0px";
            }
        }
    </script>
    <!----------js for toggle form---------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register(){

            RegForm.style.transform="translateX(0px)";
            LoginForm.style.transform="translateX(0px)";
            Indicator.style.transform="translateX(100px)";


        }

        function login(){

            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";

        }
    </script>


</body>
</html>