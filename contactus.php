<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactus</title> 
    
   
    <link rel="stylesheet" href="contactus.css">
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
                    <li><a href="">About </a></li>
                    <li><a href="contactus.php">Contact </a></li>
                    <li><a href="account.php">Account</a> </li>
    
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>

      
    </div>



     <div class="contactusContainer">
        <div class="title">
          <h2>Get In Touch</h2>
       </div>
        
       <div class="box">
          <div class="contact form">
            <h3>Send a Message</h3>
            <form>
              <div class="formbox">
                <div class="row50">
                 <div class="input-group">
                     <span>First Name</span>
                     <input type="text" placeholder="First Name" >

                  </div>
                  <div class="input-group">
                     <span>Last Name</span>
                     <input type="text" placeholder="Last Name" >
                  </div>
               </div> 
               <div class="row50"> 
                  <div class="input-group">
                    <span>Email Address</span>
                    <input type="email" placeholder="Email Address">
                  </div>  
               
                  <div class="input-group">
                    <span>Mobile Number</span>
                    <input type="text" placeholder="Mobile Number" >
                  </div>
               </div> 
               <div class="row100">
                   <div class="input-group">
                      <span>Message</span>
                      <textarea placeholder="Write your message...." ></textarea>
                    </div>
               </div>
               <div class="row100">
                 <div class="input-group">
                    <input type="submit" value="Send">
                     
                  </div>
               </div>  
               
              </div>
                    
            </form>
         </div>
         <div class="contact info">
           <h3>Contact Info</h3>
           <div class="infobox">
            <div>
              <span><ion-icon name="location-outline"></ion-icon></span>
              <p>Baneshwor, Kathmandu <br>Nepal</p>
            </div>
            <div>
               <span><ion-icon name="mail-outline"></ion-icon></span>
               <a href="mail to:reenamhrjn@gmail.com">thriftmania@gmail.com</a>
             </div>
            <div>
              <span><ion-icon name="call-outline"></ion-icon></span>
              <a href="tel:9861784356">9861784356</a>
            </div>
            <ul class="sci">
               <li><a href="#"></a><ion-icon name=logo-facebook></ion-icon></li>
             
               <li><a href="#"></a><ion-icon name=logo-instagram></ion-icon></li>
               <li><a href="#"></a><ion-icon name="logo-twitter"></ion-icon></li>
              
               <li><a href="#"></a><ion-icon name="logo-whatsapp"></ion-icon></li>
           </ul>
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
       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>      
    
  </body>
</html>