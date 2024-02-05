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
    <div class="help-banner">
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
           <h1>Need Help?</h1>
    </div> 

    <section class="help">


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