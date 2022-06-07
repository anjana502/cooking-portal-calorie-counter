<!DOCTYPE html>
<html>
    <head lang="en">
        <title>Cooking Portal and Calorie Counter Account Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="description" content="Cooking portl and calorie counter login">
        <style>
            body, html {
                height: 100%;
                font-family: Arial, Helvetica, sans-serif;
            }
            * {
                box-sizing: border-box;
            }
            .bg-img {
                background-image: url("login\ page.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }
            .container {
                position: relative;
                top: 10%;
                left: 30%;
                margin: 100px;
                max-width: 300px;
                padding: 16px;
                background-color:white;
            }

            #email1, #psw {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background-color:rgba(245, 245, 239, 0.8);
            }

            #email1:focus, #psw:focus {
                background-color: #ddd;
                outline: none;
            }
            #btn {
                background-color:forestgreen;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }
            #btn:hover {
                opacity: 1;
            }
            #signup {
                text-decoration: none;
                font-size: 15px;
                color: olivedrab;
            }
            #signup:active,  #signup:hover{
                color: midnightblue;
                font-size: 15px;
            }
            #quote {
                background-color:rgba(221, 255, 204, 0.8);
                text-align: center;
                color:rgb(153, 51, 51);
                padding: 10px;
                font-size: 20px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-style: italic;
                font-weight: bold;
            }
        </style>
    </head>
    <body class="bg-img">
        <div id="quote">
            <p>Good food is the foundation of genuine happiness</p>
        </div>
        <div>
            <form class="container" name="login" action="loginauthentication.php" onsubmit="return validation()" method="POST">
                <h1>Login</h1>
                <label for="email1"><b>Email</b></label>
                <input type="email" id="email1" name="email1" placeholder="abc@gmail.com" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" id="psw" name="psw" placeholder="password" required>
                <a href="file:///C:/xampp/htdocs/html%20project/cookingPortalHome.html"><input type="submit" id="btn" value="Login"></a>
            </form>
            <br>
            <p style="background-color: white; padding:10px; color:sienna;position:absolute;left: 37.5%;right: 55%;bottom: 8%; width:22.5%">New User, joining the portal <a href="http://localhost/html%20project/signup.php" id="signup">Sign Up</a></p>
        </div>
        <a href="#top" id="link" style="text-align: center;display: inline;background-color: blanchedalmond;border: 1px solid grey;border-radius: 10px;padding: 10px;position: absolute;left:46%;top: 94%;text-decoration: none;">Back to top</a>
        <footer style="background-color: rgba(243, 230, 255, 0.8);padding-left: 20px; padding-bottom: 0px;padding-right: 20px;padding-top: 20px;">
            <div style="float: right;">Quick link access: 
            <nav>
            <a href="http://localhost/html%20project/cookingportalhome.php" style="text-decoration: none;color: darkgreen;">Home</a>|
                <a href="http://localhost/html%20project/login.php" style="text-decoration: none;color: darkgreen;">Log in</a>|
                <a href="http://localhost/html%20project/ingofblackcurrent.php" style="text-decoration: none;color: darkgreen;">Black Currant</a>|
                <a href="http://localhost/html%20project/Htips.php" style="text-decoration: none;color: darkgreen;">Health Tips</a>|
            </nav></div>
            <address>
                Topic: Login page for cooking portal<br>
                Author: Anjana<br>
                Contact details: <a href="mailto:abc@gmail.com" style="text-decoration: none;color: darkgreen;">Through mail</a>
            </address>
        </footer>
        <script>
            function validation()  
            {  
                var email=document.login.email1.value;  
                var psw1=document.login.psw.value;  
                if(email.length=="" && psw1.length=="") {  
                    alert("Email and Password fields can not empty");  
                    return false;  
                }  
                else  
                {  
                    if(email.length=="") {  
                        alert("Email field can not be empty");  
                        return false;  
                    }   
                    if (psw1.length=="") {  
                    alert("Password field can not be empty");  
                    return false;  
                    }  
                }                             
            }
        </script>
    </body>
</html>