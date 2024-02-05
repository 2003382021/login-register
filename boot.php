<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="form register">
                    <?php
                if (isset($_POST["submit"])){
                    $firstname = $_POST["first"];
                    $lasttname = $_POST["last"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $cpassword = $_POST["cpass"];
                    $errors = array();
                    if (empty($firstname) OR empty($lastname) OR empty($email) OR empty($password) OR empty($cpassword)){
                        array_push($errors,"All fields are required");
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        array_push($errors,"Email is not valid");
                    }
                    if (strlen($password)>1 AND ($password)<8){
                        array_push($errors,"Password must be atleast 8 characters");
                    }
                    if (($password)!==($cpassword)){
                        array_push($errors,"Password does not match");
                    }
                    if (count($errors)>0){
                        foreach($errors as $error){
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    }else{
                        //submit
                    }
                }
                ?>
                    <h2>Register</h2>
                    <form action="boot.php" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon
                                name="person"></ion-icon></span>
                            <input type="text" id="first" name="first">
                            <Label>First Name</Label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon
                                name="person"></ion-icon></span>
                            <input type="text" id="last-name" name="last">
                            <Label>Last Name</Label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="email" id="email" name="email">
                            <Label>Email</Label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock"></ion-icon></span>
                            <input type="password" id="password" name="password" >
                            <Label>Enter Password</Label >
                        </div>
                         <div class="input-box">
                            <span class="icon"><ion-icon name="lock"></ion-icon></span>
                            <input type="password" id="cpass" name="cpass">
                            <Label>Confirm Password</Label>
                        </div>
                        <div class="rem">
                            <label><input type="checkbox">I agree with the terms & conditions.</label>
                        </div>
                        <input type="submit" class="btn" value="register" name="submit">
                        <div class="reg">
                            <p>Already have an account?
                                <a href="#" class="login-link">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
    </div>
</body>
</html>