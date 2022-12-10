<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/admin-auth-assets/css/styles.css">
    <title>Login</title>
    <style>
        .Section{
            background-image: url("{{asset('/')}}admin/admin-auth-assets/img/1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="Section">

    <div class="wrapper">
        <div class="title">
            Login
        </div>


        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="input_field">
                <input type="text" name="email" placeholder="Email" class="input" id="email" onkeyup="validateEmail()">
                <i class="fas fa-envelope"></i>
                <samp id="email-error"></samp>
            </div>
            <div class="input_field">
                <input type="password" name="password" placeholder="Password" class="input" id="password" onkeyup="validatePass()" >
                <i class="fas fa-lock"></i>
                <samp id="Pass-error"></samp>
            </div>
            <div class="forget">
                <a href="{{route('register')}}">Forgot your password?</a>
            </div>

            <div>
                <input  class="btn text-white" type="submit" value="Login"  onclick="return validation()">
            </div>
        </form>

        <div class="or">-- or connect with --</div>

        <div class="social_media">
            <div class="item">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="item">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="item">
                <i class="fab fa-google-plus-g"></i>
            </div>
        </div>
        <div class="newAccount"><p>Create a <a href="{{route('register')}}"> New Account</a> </p>
        </div>
    </div>
</div>

<script src="{{asset('/')}}admin/admin-auth-assets/js/scripts.js"></script>
</body>


</html>
