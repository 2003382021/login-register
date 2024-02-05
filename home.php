<?php
session_start();
if(!isset($_SESSION["customer"])){
    header("location: index.php");
}

?>
<!DOCTYPE html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        THE MENU
    </title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div class="banner">
        
            <div class="navbar">
                <img src="Images/3.png" class="logo">
                <ul class="blue">
                    <li><a href="home.php">Home</a></li>
                   <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Call Us</a></li>
                    <li><a href="help.php">Help</a></li>
                    <li><a href="logout.php">Log Out</a></li>

                <section>
                    <div class="anime-frame">
                        <div class="anime">Xcharmine</div>
                        <div class="anime1"></div>
                        <div class="anime2"></div>
                        <div class="anime3"></div>
                        <div class="anime4"></div>
                        <div class="anime5"></div>
                        <div class="anime6"></div>
                        <div class="anime7"></div>
                        <div class="anime8"></div>
                    </div>
                </section>
            </ul>
                <img src="images/back.png" alt="close" id="close" class="close">
                <img src="images/menu.png" alt="menu" id="menu" class="menu">
               </div>
             <div class="content">
                <h1>THE MENU</h1>
                <h2>We'll be there even before you know it.</h2>
                <p>Enjoy convinient and fast ordering of food from our own bakeries countrywide.</p>
            </div>
         
    </div>
   <div class="overview">
        <h1>Variety of Products we bake</h1>
        <div class="cart"><img src="Images/cart.png" alt=""><p id="count">0</p></div>
        <p>click to view details then <br>specify the delivery and payment medhod to complete the order.</p>
        <div class="arrow">
        <h3>Cakes<ion-icon name="arrow-dropright" class="right"></ion-icon></h3>
        <div class="drop">
            <ul>
                <li><a href="#">Butter cake</a></li>
               <li><a href="#">Red velvet cake</a></li>
                <li><a href="#">Lemon yoghurt cake</a></li>
                <li><a href="#">Flourless orange cake</a></li>
            </ul>
        </div>
    </div>
        <ion-icon name="arrow-dropdown-circle" class="drop"></ion-icon>
        

     <div class="row">
        <div class="happy" id="1">
            <img src="Images/cream.jpeg" name="product_image" alt="Vanilla Cake.jpg">
            <h2 name="product_name">Cream Pie Cakes</h2>
            <h5>Each 1kg at ksh <span name="product_price">800</span></h5>
            <p>A mouthwatering blend of creamy<br>goodness with a melt-in-your-mouth expirience.</p>
            <h4 class="header" name="add_to_cart">ADD TO CART </h4>
        </div>
        <div class="happy" data-id="2" >
            <img src="Images/chocolate cake.jpg" alt="cake">
            <h2>Birthday & Wedding Cakes</h2>
            <h5>Each 1kg at ksh 999</h5>
            <p>A Birthday masterpiece, an edible work<br>of art bursting with rich chocolate goodness.</p>
            <h4 class="header">ADD TO CART </h4>
        </div>
        <div class="happy" data-id="3" >
            <img src="Images/italian.jpeg" alt="cake">
            <h2>Italian Berry Cakes</h2>
            <h5>Each 1kg at ksh 1200</h5>
            <p>A multi-layered cake, each tier more enticing than<br>the last with Sweet, floral undertones from fresh berries.</p>
            <h4 class="header" data-id="1">ADD TO CART </h4>
        </div>
    </div>
    <div class="cupcakes">
        <div class="arrow">
            <h3>Cupcakes<ion-icon name="arrow-dropright" class="right"></ion-icon></h3>
            <div class="drop">
                <ul>
                    <li><a href="#">Butter cake</a></li>
                   <li><a href="#">Red velvet cake</a></li>
                    <li><a href="#">Lemon yoghurt cake</a></li>
                    <li><a href="#">Flourless orange cake</a></li>
                </ul>
            </div>
        </div>
    
     <div class="row">
        <div class="happy" data-id="4">
            <img src="Images/red.jpeg" alt="Red Velvet Cupcake.jpg">
            <h2>Red Velvet Cupcake</h2>
            <h5>Each piece at ksh 100</h5>
            <p>A vibrant red cupcake with a subtle cocoa flavor,<br>topped with velvety cream cheese frosting and red velvet cake crumbs.</p>
            <h4 class="header">ADD TO CART </h4>
            
            
        </div>
        <div class="happy" data-id="5">
            <img src="Images/vanilla.jpeg" alt="Vanilla Cupcake.jpg">
            <h2>Classic Vanilla Cupcake</h2>
            <h5>Each piece at ksh 120</h5>
            <p>A simple, moist vanilla cupcake topped<br>with creamy vanilla buttercream frosting and colorful sprinkles</p>
            <h4 class="header">ADD TO CART </h4>
       
        </div>
        <div class="happy" data-id="6">
            <img src="Images/choc.jpeg" alt="Chocolate Lover's Cupcake.jpg">
            <h2>Chocolate Lover's Cupcake</h2>
            <h5>Each piece at ksh 100</h5>
            <p>Rich and decadent chocolate<br>cupcake with a dark chocolate ganache drizzle,<br>chocolate shavings, and a chocolate truffle on top.</p>
            <h4 class="header" >ADD TO CART </h4>

        </div>
    </div>
    </div>
    <div class="donuts">
        <div class="arrow">
            <h3>Doughnut<ion-icon name="arrow-dropright" class="right"></ion-icon></h3>
            <div class="drop">
                <ul>
                    <li><a href="#">Butter cake</a></li>
                   <li><a href="#">Red velvet cake</a></li>
                    <li><a href="#">Lemon yoghurt cake</a></li>
                    <li><a href="#">Flourless orange cake</a></li>
                </ul>
            </div>
        </div>
    
     <div class="row">
        <div class="happy">
            <img src="Images/doughnut.jpeg" alt="Vanilla Cake.jpg">
            <h2>Cream Filled Doughnut</h2>
            <h5>Each piece at ksh 80</h5>
            <p>coated with cream cheese frosting<br>to give yoa a burst of sweetness to each bite.</p>
            <h4 class="header" >ADD TO CART </h4>
           
        </div>
        <div class="happy">
            <img src="Images/donut3.jpeg" alt="Vanilla Cake.jpg">
            <h2>Sugary Iced Glazed Doughnut</h2>
            <h5>Each piece at ksh 100</h5>
            <p>Sweet and sugary flavor<br>often coated in icing or powdered sugar.</p>
            <h4 class="header">ADD TO CART </h4>
            
        </div>
        <div class="happy">
            <img src="Images/donut.jpeg" alt="Vanilla Cake.jpg">
            <h2>Sprinkled Lover Doughnut</h2>
            <h5>Each piece at ksh 100</h5>
            <p>Fried donut holes filled with<br>cream and sprinkled making it the romantic type.</p>
            <h4 class="header" >ADD TO CART </h4>
       
        </div>
    </div>
    </div>
    <div class="buger">
        <div class="arrow">
            <h3>Burger<ion-icon name="arrow-dropright" class="right"></ion-icon></h3>
            <div class="drop">
                <ul>
                    <li><a href="#">Butter cake</a></li>
                   <li><a href="#">Red velvet cake</a></li>
                    <li><a href="#">Lemon yoghurt cake</a></li>
                    <li><a href="#">Flourless orange cake</a></li>
                </ul>
            </div>
        </div>
    
     <div class="row">
        <div class="happy">
            <img src="images/burger-2.jpg" alt="Red Velvet Cupcake.jpg">
            <h2>Red Velvet Cupcake</h2>
            <h5>Each piece at ksh 350</h5>
            <p>A vibrant red cupcake with a subtle cocoa flavor,<br>topped with velvety cream cheese frosting and red velvet cake crumbs.</p>
            <h4 class="header" >ADD TO CART </h4>
           
        </div>
        <div class="happy">
            <img src="Images/burger.jpg" alt="Vanilla Cupcake.jpg">
            <h2>Classic Vanilla Cupcake</h2>
            <h5>Each piece at ksh 250</h5>
            <p>A simple, moist vanilla cupcake topped<br>with creamy vanilla buttercream frosting and colorful sprinkles</p>
            <h4 class="header" >ADD TO CART </h4>
           
        </div>
        <div class="happy">
            <img src="Images/burg.jpg" alt="Chocolate Lover's Cupcake.jpg">
            <h2>Chocolate Lover's Cupcake</h2>
            <h5>Each piece at ksh 300</h5>
            <p>Rich and decadent chocolate<br>cupcake with a dark chocolate ganache drizzle,<br>chocolate shavings, and a chocolate truffle on top.</p>
            <h4 class="header">ADD TO CART </h4>
        
        </div>
    </div>
    </div>
   </div>
   <div class="bottom">
    <div class="cta">
        <h1>For customer-based orders contact our branches 
            <div class="country">
                <div>24/7.</div>
                <div>countrywide.</div>
                <div>nationwide.</div>
            </div>
        </h1>
        <a href="contact.html" class="loginbtn">CONTACT US</a>
    </div>
    <div class="footer">
        <h4>About Us</h4>
        <p>The Menu is food-act licensed bakery dedicated<br>to the fast delivery of quality baked products from our bakeries round the clock.</p>
    </div>
    <div class="icons">
        <p>Folllow us on:</p>
        <ion-icon
        name="logo-facebook"></ion-icon>
        <span><ion-icon
        name="logo-instagram"></ion-icon></span>
        <span><ion-icon
        name="logo-twitter"></ion-icon></span>
        <span><ion-icon
        name="logo-linkedin"></ion-icon></span>
        <p>Made by Xcharmine</p>
    </div>
    </div>
    <script src="script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
</body>
</html>                                                                         