<!DOCTYPE html>
<html>
    <head>
        <title>
            Ingredients of Ragi Dosa
        </title>
        <style>
            h1{
                background-color: lightpink;
                text-align: center;
                color: purple;
            }
            .flip-card {
               background-color: transparent;
               width: 400px;
               height: 400px;
               perspective: 1000px;
            }

            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                
                transition: transform 0.6s;
                transform-style: preserve-3d;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front, .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .flip-card-front {
                background-color: rebeccapurple;
                color: black;
            }

            .flip-card-back {
                background-color: azure;
                color:black;
                transform: rotateY(180deg);
            }
            body{
                background-image: url("https://cdn.pixabay.com/photo/2017/02/15/10/39/food-2068217_1280.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <h1>Ingredients of Ragi Dosa</h1>
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
        <img src="https://apollosugar.com/wp-content/uploads/2018/12/Ragi-Dosa.jpg" alt="Ragi Dosa" width="400px" height="400px">
        </div>
        <div class="flip-card-back">
        <h2>Ingredients list</h2>
        <ul>
            <li>Ragi Flour</li>
            <li>Rice Flour</li>
            <li>Sour Curd</li>
            <li>Curry Leaves</li>
            <li>Ginger</li>
            <li>Salt</li>
            <li>Onion</li>
            <li>Green chill</li>
            <li>Carrot</li>
            <li>Corriander</li>
            <li>Ghee</li>
            <li>Cumin Seeds</li>
            <li>Mustard Seeds</li>
        </ul>
        </div>
        </div>
        </div>
        <a href="#top" id="link" style="text-align: center;display: inline;background-color: blanchedalmond;border: 1px solid grey;border-radius: 10px;padding: 10px;position: absolute;left:46%;top: 100%;text-decoration: none;">Back to top</a>
        <footer style="background-color: rgba(243, 230, 255, 0.8);padding-left: 20px; padding-bottom: 0px;padding-right: 20px;padding-top: 20px;position: absolute;top: 110%;">
            <div style="float: right;margin-left: 500px;">Quick link access: 
            <nav>
                <a href="http://localhost/html%20project/cookingportalhome.php" style="text-decoration: none;color: darkgreen;">Home</a>|
                <a href="http://localhost/html%20project/login.php" style="text-decoration: none;color: darkgreen;">Log in</a>|
                <a href="http://localhost/html%20project/ingofblackcurrent.php" style="text-decoration: none;color: darkgreen;">Black Currant</a>|
                <a href="http://localhost/html%20project/Htips.php" style="text-decoration: none;color: darkgreen;">Health Tips</a>|
            </nav></div>
            <address style="float: left;margin-right: 500px;">
                Topic: Login page for cooking portal<br>
                Author: Anjana<br>
                Contact details: <a href="mailto:abc@gmail.com" style="text-decoration: none;color: darkgreen;">Through mail</a>
            </address>
        </footer>
    </body>
</html>