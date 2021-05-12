<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="btn-box">
                <div id="btn" class="btn"></div>
                <button type="button" class="btnn" onclick="login()">Login</button>
                <button type="button" class="btnn" onclick="register()">Register</button>
            </div>
            <form action="" id="login" class="input-grp">
                <input type="text" class="input-field" placeholder="User Id" required>
                <input type="text" class="input-field" placeholder="Password" required>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <form action="" id="register" class="input-grp">
                <input type="text" class="input-field" placeholder="User Id" required>
                <input type="email" class="input-field" placeholder="Email Id" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x= document.getElementById('login');
        var y= document.getElementById('register');
        var z= document.getElementById('btn');

        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>
</body>
</html>