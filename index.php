<?php
session_start();
if(isset($_SESSION["customer"])){
    header("location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Menu</title>
    <link rel="stylesheet" href="project.css">
</head>
    <body>
        <div class="baner">
            <div class="navbar">
                <img src="Images/3.png" class="logo">
                <ul>
                    <button class="loginbtn">LOG IN</button>
                </ul>
            </div>
            <div class="content">
                <h1>THE MENU</h1>
                <h2>We'll be there even before you know it.</h2>
                <p>Enjoy convinient and fast ordering of food from our own bakeries countrywide.</p>
            </div>
            <div class="wrapper">
                
                <span class="icon-close"><ion-icon
                name="close"></ion-icon></span>
                <div class="form login">
                    <?php
                    if (isset($_POST["login"])){
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                        require_once "database.php";

                    $sql = "SELECT * FROM customers WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($user>0){
                        if (password_verify($password, $user["password"])){
                            session_start();
                            $_SESSION["customer"] = "yes";
                            header("location: home.php");
                            die();
                        }else{
                                echo"<div class='alert alert-danger'>Password does not match</div>";
                            }
                    }else{
                        echo"<div class='alert alert-danger'>Email does not match</div>";
                    }
                    }
                    ?>
                    <h2>Login</h2>
                    <form action="index.php" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon
                                name="mail"></ion-icon></span>
                            <input type="email"required  id="mail" name="email">
                            <Label for="email">Email</Label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon
                                name="lock"></ion-icon></span>
                            <input type="password"required  id="pasword" name="password">
                            <Label for="password">Password</Label>
                        </div>
                        <div class="rem">
                            <label><input type="checkbox">Remember Me</label>
                            <a href="#">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn" id="loginButton" name="login">LOG IN</button>
                        <div class="reg">
                            <p>Dont't have an account?
                                <a href="#" class="reg-link">Register</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="form register">
                    <?php
                if (isset($_POST["submit"])){
                    $firstname = $_POST["first"];
                    $lasttname = $_POST["last"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $cpassword = $_POST["cpass"];

                    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                    $errors = array();

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        array_push($errors,"Email is not valid");
                    }
                    if (strlen($password)<8){
                        array_push($errors,"Password must be atleast 8 characters");
                    }
                    if (($password)!==($cpassword)){
                        array_push($errors,"Password does not match");
                    }
                    
                    require_once "database.php";
                    $sql = "SELECT * FROM customers WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $rowcount = mysqli_num_rows($result);
                    if ($rowcount>0){
                        array_push($errors,"Email alredy exist");
                    }


                    if (count($errors)>0){
                        foreach($errors as $error){
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    }else{
                        
                        $sql = "INSERT INTO customers (first_name, last_name, email, password) VALUES(?,?,?,?)";
                        $stmt = mysqli_stmt_init($conn);
                        $preparestmt = mysqli_stmt_prepare($stmt,$sql);
                    if($preparestmt){
                        mysqli_stmt_bind_param($stmt,"ssss",$firstname,$lasttname,$email,$passwordhash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>Registration successful.</div>";
                    }else{
                        die("Something went wrong");
                    }
                    }
                }
                ?>
                    <h2>Register</h2>
                    <form action="index.php" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon
                                name="person"></ion-icon></span>
                            <input type="text" required id="first" name="first">
                            <Label>First Name</Label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon
                                name="person"></ion-icon></span>
                            <input type="text" required id="last-name" name="last">
                            <Label>Last Name</Label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="email" required id="email" name="email">
                            <Label>Email</Label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock"></ion-icon></span>
                            <input type="password" required id="password" name="password" >
                            <Label>Enter Password</Label >
                        </div>
                         <div class="input-box">
                            <span class="icon"><ion-icon name="lock"></ion-icon></span>
                            <input type="password" required id="cpass" name="cpass">
                            <Label>Confirm Password</Label>
                        </div>
                        <div class="rem">
                            <label><input type="checkbox" name="check" required>I agree with the terms & conditions.</label>
                        </div>
                        <button type="submit" class="btn" id="registerbutton" name="submit">REGISTER</button>
                        <div class="reg">
                            <p>Already have an account?
                                <a href="#" class="login-link">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    </body>
</html>