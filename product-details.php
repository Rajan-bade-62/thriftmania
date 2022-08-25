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
               <a href="index.php"> <img src="images/thrift.jpg" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="product.php">Products</a> </li>
                    <li><a href="">About </a></li>
                    <li><a href="">Contact</a> </li>
                    <li><a href="account.php">Account </a></li>
    
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>

      
    </div>
    <!------Single products details------->
    <div class="small-container single-product">
        <div class="row">

            <div class="col-2">
                <img src="images/yellow top.jpeg" width="100%" id="ProductImg" alt="">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/yellow top.jpeg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="images/yellow top.jpeg" width="100%" class="small-img"  alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="images/yellow top.jpeg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="images/yellow top.jpeg" width="100%" class="small-img" alt="">
                    </div>
                </div>



            </div>
            <div class="col-2">
            <p>Home / Top</p>
            <h1>Yellow Crop Top</h1>
            <h4>Nrs: 350 only</h4>
            <select name="" id="">
                <option value="">Select Size</option>
                <option value="">XXL</option>
                <option value="">XL</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn">Add To Cart</a>
            <h3>Product Details</h3>
            <br>
            <p>Give your Summer Wardrobe a style with this cute yellow crop top</p>
            </div>

        </div>
    </div>
    <!-------- title-------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>

        </div>
    </div>




    <!-------- products-------->
    <div class="small-container">


        <div class="row">
            <div class="col-4">
                <img src="images/yellow top.jpeg" alt="">
                <h4>Cami Top</h4>
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
    <!----js for  product gallery----->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg =document.getElementsByClassName("small-img");
        SmallImg[0].onclick= function(){
            ProductImg.src =SmallImg[0].src;
        }
        SmallImg[1].onclick= function(){
            ProductImg.src =SmallImg[1].src;
        }
        SmallImg[2].onclick= function(){
            ProductImg.src =SmallImg[2].src;
        }
        SmallImg[3].onclick= function(){
            ProductImg.src =SmallImg[3].src;
        }
    </script>


</body>
</html>