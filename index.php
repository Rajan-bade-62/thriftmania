<?php
session_start();

$_SESSION;




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thrift Mania</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
</head>
<body>

    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/thrift.jpg" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="product.php">Products</a> </li>
                    <li><a href="">About </a></li>
                    <li><a href="contactus.php">Contact </a></li>
                    <li><a href="account.php">Account </a></li>
    
                </ul>
            </nav>
           <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a> 
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>

        <div class="row">
            <div class="col-2">
                <h1>Give Your Wadrobe<br> New Style!</h1>
                <p>Reuse. Renew.Recycle</p>
                <a href="product.php" class="btn"> Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/shopping.png">
            </div>

        </div>
    </div>
</div>
    <!--------featured categories-------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/necklace.jpeg" alt="">
                </div>
    
                <div class="col-3">
                    <img src="images/boots.jpeg" alt="">
                </div>
    
                <div class="col-3">
                    <img src="images/earring.jpeg" alt="">
                </div>
            </div>
        </div>
       
    </div>
    <!--------featured products-------->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-details.php"><img src="images/yellow top.jpeg" alt=""></a>
                <a href="product-details.php"><h4>Cami Top</h4></a>
                <p>Color: Yellow</p>
                <p>Size: Free</p>
                <p>Used: Once</p>
                <div class="rating">
                    Condition:<i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Available Price: Nrs.350 only</p>
            </div>
    
            <div class="col-4">
                <img src="images/boyfriend jeans.jpeg" alt="">
                <h4>Boyfriend Jeans</h4>
                <p>Color: Light Blue</p>
                <p>Size: Large</p>
                <p>Used: Twice</p>
                <div class="rating">
                    Condition:<i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Available Price: Nrs.599 only</p>
            </div>
    
            <div class="col-4">
                <img src="images/bronzer.jpeg" alt="">
                <h4>Elf Baked Bronzer</h4>
                <p>Shade: St.Lucia</p>
                <p>Brand: Elf</p>
                <p>Used: Never</p>
                <div class="rating">
                   Condition: <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Available Price: Nrs.250 only</p>
            </div>
    
            <div class="col-4">
                <img src="images/bioderma.jpeg" alt="">
                <h4>Bioderma Soothing Care</h4>
                <p>Brand: Bioderma</p>
                <p>Bought Price: Nrs. 1900 only</p>
                <p>Used: Once</p>
                <div class="rating">
                   Condition: <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Available Price: Nrs.1799 only</p>
            </div>
        </div>
  
    </div>

<!----offer----->
    <div class="offer">
        <div class="small-container">
            <div class="row">

                <div class="col-2">
                    <img src="images/combo.jpeg" class="offer-img" alt="">
                </div>

                <div class="col-2">
                    <p>Exclusively Available Combo Set On Thrift Mania </p>
                    <h1>Long Outer and Cross Body Top</h1>
                    <a href="product-details.php" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>


    <!--------testimonial--------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">

                <div class="col-3">
                    <i class="fa fa-quote-left" ></i>
                    <p>I have bought so many products through thrift mania and i really love their products as well as their motto i.e. Renew. Reuse. Recycle</p>
                    <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <img src="images/sam.jpg" alt="">
                     <h3>Samikshya Baskota</h3>
                </div>


                <div class="col-3">
                    <i class="fa fa-quote-left" ></i>
                    <p>I have bought so many products through thrift mania and i really love their products as well as their motto i.e. Renew. Reuse. Recycle</p>
                    <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <img src="images/sam.jpg" alt="">
                     <h3> Samikshya Baskota</h3>
                </div>
                
                <div class="col-3">
                    <i class="fa fa-quote-left" ></i>
                    <p>I have bought so many products through thrift mania and i really love their products as well as their motto i.e. Renew. Reuse. Recycle</p>
                    <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <img src="images/sam.jpg" alt="">
                     <h3>Samikshya Baskota</h3>
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

    <!----js for toggle menu----->
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
</body>
</html>