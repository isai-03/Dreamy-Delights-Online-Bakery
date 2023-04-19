<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=login.css>
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="fb.png">
                <img src="tw.png">
                <img src="gp.png">
            </div>
            <form id="login" class="input-group" action="validation.php" method="post">
                <input type="text" class="input-field" name="user"placeholder="User Id"required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password"required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form id="register" class="input-group"action="registration.php" method="post">
                
                <input type="text" class="input-field" name="user" placeholder="User Id"required>
                <input type="email" class="input-field" name="email" placeholder="Email Id"required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password"required>
                <input type="checkbox" class="check-box"><span>I agree to Terms and Conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";
        }
        </script>
</body>
</html>