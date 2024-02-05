<?php
session_start();
if(!isset($_SESSION["customer"])){
    header("location: index.php");
}
$from ="Demo<Demo@gmail.com>";
$sendto = "Demo<githinjij825@gmail.com>";
$subject="New message from contact form";
$fields =array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');
$okMessage ="Contact submited";
$errorMessage ="There was an error.";


error_reporting(0);

try{
    if(count($_POST) == 0) throw new \Exception("Form is Empty.");

    $emilText = "Nem message from demo contact form.\n";

    foreach($_POST as $key => $value){
        if(isset($fields[$key])){
            $emailText .= "$fields[$key] : $value\n";
        }
    }

    $headers = array('Content-Type: text/plain; charset= "UTF-8";',
    'From:' . $from,
    'Reply-To:' .$from,
    'Return-Path:' .$from
);

mail($sendTo, $subject, $emailText, implode("\n", $headers));
$responseArray = array("type" => "success", "message" => $okMessage);


}catch(Exception $ex){
    $responseArray = array("type" => "danger", "message" => $errorMessage);
}

if(!empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == 'xmlhttprequest'){
    $encode = json_encode($responseArray);
    header('Content-Type: application/json');
    echo $encoded;
}else $responseArray['message'];


?>
<!DOCTYPE html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        THE MENU
    </title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div class="contact-banner">
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
           <h1>Get In Touch With Us</h1>
    </div>


    <section class="block">
        <form action="contact.php" medhod="post" role="form">
            <div class="message">

            </div>
        <div class="comment">
            <div class="names">
                <div class="name-box">
                    <span class="icon"><ion-icon
                        name="mail"></ion-icon></span>
                        <Label for="text">First Name</Label>
                    <input type="text" required id="name" name="name">
                </div>
                <div class="name-box">
                    <span class="icon"><ion-icon
                        name="mail"></ion-icon></span>
                        <Label for="text">Second Name</Label>
                    <input type="text" required id="name" name="surname">
                </div>
            </div>
            <div class="email-box">
                <span class="icon"><ion-icon
                    name="mail"></ion-icon></span>
                    <Label for="text">Email</Label>
                <input type="email" required id="email" name="email">
            </div>
            <div class="message-box">
                <span class="icon"><ion-icon
                    name="mail"></ion-icon></span>
                    <Label for="text">Message</Label>
                <input type="text" required id="name" name="message">
            </div>
            <button type="submit" class="sendbtn">Send</button>
        </div>
        </form>
        <div class="frame">
            <div class="email">
                <h1>Reach Us Via:-</h1>
                <div class="space">
                    <img src="images/email.png" alt="ICON">
                    <div class="inter">
                        <h2>PHONE</h2>
                         <p>+254 722 400 600</p>
                    </div>
                </div>
                <div class="space">
                    <img src="images/email.png" alt="ICON">
                    <div class="inter">
                        <h2>MOBILE</h2>
                         <p>+254 722 400 600</p>
                    </div>
                </div>
                <div class="space">
                    <img src="images/email.png" alt="ICON">
                    <div class="inter">
                        <h2>EMAIL</h2>
                         <p>themenu@gmail.com</p>
                    </div>
                </div>
                <div class="space frost">
                    <img src="images/email.png" alt="ICON">
                    <div class="inter">
                        <h2>ADDRESS</h2>
                         <p>Nakuru<span>Utali Building Opposite Naivas Supermarket</span></p>
                         <p>Thika<span>300 Metres From Clean Shelf Supermarket</span></p>
                         <p>Nairobi<span>Main Stage Opposite 4NTE Sacco</span></p>
                         <p>Nyahururu<span>5th Avenue Near Jamaa Supermarket</span></p>
                         <p>Chuka<span>5 Blocks From Chuka General Hospital </span></p>
                         <p>Nanyuki<span>Nyali Plaza 1st Floor</span></p>
                         <p>Eldoret<span>500 Metres From Moi University</span></p>
                         <p>Mombasa<span>Pwani Resort Opposte Fargo Company</span></p>
                         <p>Bomet<span>1Km From Majani Tea Leaves Company</span></p>
                    </div>
                </div>
                <div class="space">
                    <div class="inter">
                        <ion-icon
            name="logo-facebook"></ion-icon>
           <ion-icon
            name="logo-instagram"></ion-icon>
            <ion-icon
            name="logo-twitter"></ion-icon>
            <ion-icon
            name="logo-linkedin"></ion-icon>
                    </div>
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
           <ion-icon
            name="logo-instagram"></ion-icon>
            <ion-icon
            name="logo-twitter"></ion-icon>
            <ion-icon
            name="logo-linkedin"></ion-icon>
            <p>Made by Xcharmine</p>
        </div>
        </div>
        <script>
            $(function(){
    $('#contact-form').validator();
    $('#contact-form').on('submit', function(e){
        if(!e.isDefaultPrevented()){
            var url ="email.php";

            $ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                successful: function(data){
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert '+ messageAlert +' alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&items;</button>' + messageText +'</div>';

                    if(messageAlert && messageText){
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    });
})
        </script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
</body>
</html>                                                                         