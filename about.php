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
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div class="s-banner">
         <div class="navbar">
            <img src="Images/3.png" class="logo">
            <ul class="blue">
                <li><a href="home.php">Home</a></li>
               <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="help.php">Help</a></li>
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
           <h1>About Us</h1>
    </div>

    <section class="about">


    <div class="row">
        <div class="col">
            <h1>More About Us</h1>
            <p>Steps used to design a user-centered website. This is focused on creating one for an e-commerce platform that sells sustainable clothing. 
                Step 1: Define who it's for: We first want to figure out who we’re targeting. To do this, we’ll understand the main group of users like environmentally conscious consumers interested in sustainable fashion.
                Step 2: Understand user needs: This is where research comes in. We’ll use surveys, interviews, and market research to gain insights on their preferences when buying clothes and any pain points they have. 
                Step 3: Personify the user: When you can picture your target audience, you can see what they
            <br> used to design a user-centered website. This is focused on creating one for an e-commerce platform that sells sustainable clothing. Step 1: Define who it's for: We first want to figure out who we’re targeting. 
            To do this, we’ll understand the main group of users like environmentally conscious consumers interested in sustainable fashion. Step 2: Understand user needs: This is where research comes in. We’ll use surveys, interviews, 
            and market research to gain insights 
            on their preferences when buying clothes and any pain points they have. Step 3: Personify the user: When you can picture your target audience, you can see what they 
            <br>Steps used to design a user-centered website.
             This is focused on creating one for an e-commerce platform that sells
             sustainable clothing.
             Step 1: Define who it's for: We first want to figure out who we’re targeting. To do this, we’ll understand the main group of users like environmentally conscious consumers interested in sustainable fashion. Step 2: 
            Understand user needs: This is where research comes in. We’ll use surveys, interviews, and market research to gain insights on their preferences when buying clothes and any pain points they have
            . Step 3: Personify the user: When you can picture your target audience, you can see what they</p>
                <a href="home.html" class="loginbtn red">Order
                    <div class="abouts">
                        <div class="now">Now.</div>
                        <div>Fast.</div>
                        <div class="quality">Quality.</div>
                    </div>
                </a>
        </div>
        <div class="col colon">
            <div class="slider">
            <div><img src="Images/chef.jpg" alt="Chef Elaine.jpg"></div><br>
            <div><img src="Images/cupcake.jpg" alt="Chef Elaine.jpg"></div>
            </div>
        </div>
    </div>

   </section>

    <div class="bottom">
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