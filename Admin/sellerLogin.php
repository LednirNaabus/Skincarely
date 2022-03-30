<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Login</title>

    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >

    <style>
        html{
            box-sizing: border-box;
            font-size: 100%;
        }
        *:before,
        *:after{
        box-sizing:inherit;
        }
        body{
            background-color: #F3F2F0;
            margin: 0;
            padding: 0;
        }
        .wrapper{
            display:flex;
            flex-direction: column;
            height: 100vh;
        }
        .header{
            background-color: #F3F2F0 ;
            height: 90px;
            color: #6F645E;
            font-family: Calistoga;
        }
        .app{
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;
        }
        form{
            border-radius: 10px;
            background-color: white;
            text-align: center;
            width: 360px;
            border: 1px solid #dadce0;
            display: flex;
            flex-direction: column;
			padding: 30px;
            font-family: Poppins;

        }
        .login-title{
            font-size: 24px;
            margin-bottom: 32px;
            font-family: Poppins;
        }
        input, button{
            padding: 13px 15px;
			border: 1px solid #dadce0;
			border-radius: 4px;
			font-size: 16px;
			margin-bottom: 24px;
            font-family: Poppins;
        }
        button{
            background-color: #8C5652;
            color: white;
        }
        a{
            text-decoration: none;
        }
        
    </style>
</head>
<body>


    <div class="wrapper">
        <div class="header" style="text-align: center;">
            <h1>SKINCARELY</h1>
    </div>

        <div class="app">

            <form name="vendorlogin" action = "authentication.php" onsubmit = "return validation()" method = "POST">
                <div class="login-title">Login to Seller Centre</div>
                <input type="text" placeholder="Username" id ="user" name  = "user">
                <input type="password" placeholder="Password" style="margin-bottom: 2%;" id ="pass" name  = "pass">
                <label style="text-align: right; margin-bottom:5%; font-size:small"><a href="resetPassword.php" style="color: #4B4B4B;"><u>Forgot Password?</u></a></label>
                <button type="submit" id = "btn">Log In</button>
                <div>New to Skincarely? <a href="sellerSignUp.php" style="text-decoration: none; color:#4B4B4B"><u>Create an account!</u></a></div>
            </form>

        </div>

        <script>  
            function validation()  
            {  
                var id=document.vendorlogin.user.value;  
                var ps=document.vendorlogin.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

    </div>
</body>
</html>