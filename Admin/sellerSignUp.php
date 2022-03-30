<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Sign Up</title>

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
            border-radius: 4px;
            background-color: white;
            text-align: center;
            width: 360px;
            border: 1px solid #dadce0;
            display: flex;
            flex-direction: column;
			padding: 30px;

        }
        .login-title{
            font-size: 24px;
            margin-bottom: 32px;
            font-family: Poppins;
        }
        .name-container{
            display: flex;
            justify-content: space-between;

        }
        input, button{
            padding: 13px 15px;
			border: 1px solid #dadce0;
			border-radius: 4px;
			font-size: 16px;
			margin-bottom: 24px;
            font-family: Poppins;
        }
        .name-input{
            width: 40%;
        }
        button{
            background-color: #8C5652;
            color: white;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper">
            <div class="header" style="text-align: center;">
                <h1><a href="skincarely.php" style="text-decoration: none; color: #6F645E">SKINCARELY</a></h1>
        </div>

        <div class="app">

            <form name="vendorregister" action = "creation.php" onsubmit = "return validation()" method = "POST">
                <div class="login-title">Create an account</div>
                <div class="name-container">
                    <input type="text" placeholder="First name" class="name-input" id ="firstname" name  = "firstname">
                    <input type="text" placeholder="Last name" class="name-input" id ="lastname" name  = "lastname">
                </div>
                <input type="text" placeholder="Username" class="name-input" id ="username" name  = "username" style="width: auto;">
                <input type="email" placeholder="Email" id ="email" name  = "email">
                <input type="text" placeholder="New password" id ="pass" name  = "pass">
                <button type="submit">Sign Up</button>
            </form>

        </div>

        <script>  
            function validation()  
            {  
                var id=document.vendorregister.email.value;  
                var ps=document.vendorregister.pass.value;  
                var pu=document.vendorregister.username.value; 
                var fn=document.vendorregister.firstname.value;  
                var ln=document.vendorregister.lastname.value; 
                if(id.length=="" && ps.length=="" && fn.length=="" && ln.length=="" && pu.length=="") {  
                    alert("User Name, Password, First Name, and Last Name fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Email Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                    if (pu.length=="") {  
                    alert("Username field is empty");  
                    return false;  
                    }  
                    if(fn.length=="") {  
                        alert("First Name is empty");  
                        return false;  
                    }   
                    if (ln.length=="") {  
                    alert("Last Name field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

    </div>
</body>
</html>
