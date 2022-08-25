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
                    <li><a href="">About</a> </li>
                    <li><a href="">Contact</a> </li>
                    <li><a href="account.php">Account </a></li>
    
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>

      
    </div>
    <!-----------cart item details--------->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/yellow top.jpeg" alt="">
                    <div>
                        <p>Yellow Crop Top</p>
                        <small>Price: Nrs.350only</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
                </td>

                <td> <input type="number" value="1"></td>
                <td>Nrs.350 only</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/boyfriend jeans.jpeg" alt="">
                    <div>
                        <p>Boyfriend Jeans</p>
                        <small>Price: Nrs.500only</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
                </td>

                <td> <input type="number" value="1"></td>
                <td>Nrs.500 only</td>
            </tr>


            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/bioderma.jpeg" alt="">
                    <div>
                        <p>Bioderma Soothing Care</p>
                        <small>Price: Nrs.1700only</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
                </td>

                <td> <input type="number" value="1"></td>
                <td>Nrs.1700 only</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Sub-total</td>
                    <td>Nrs.350 only</td>
                </tr>

                <tr>
                    <td>Delivery Charge</td>
                    <td>Nrs.100 only</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>Nrs.450 only</td>
                </tr>
            </table>
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