<!DOCTYPE html>
<html>
    <head lang="en">
        <title>Extracurricular activities in school</title>
        <style>
            body {
                background-image: url("regional\ food\ bg.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            #northindian {
                background-color: rgba(255, 255, 204, 0.9);
                max-width: 500px;
                float: left;
                padding: 40px;
                margin: 15px;
                text-align: center;
            }
            #southindian {
                background-color: rgba(255, 255, 204, 0.9);
                max-width: 500px;
                float: right;
                padding: 30px;
                margin: 15px;
                text-align: center;
            }
            #foodnorth, #foodsouth {
                color: darkmagenta;
                font-size: 15px;
            }
            #btn1, #btn2 {
                background-color: plum;
                padding: 20px;
                margin: 10px;
                border: none;
                font-size: 15px;
                color:cornsilk;
            }
        </style>
    </head>
    <body>
        <div id="northindian">
            <h1 style="color: palevioletred;font-size: 40px;">North Indian Food </h1>
            <a href="http://localhost/html%20project/North%20Indian%20Foods.php"><img src="north indian food.jpg" style="width: 350px;height: 300px;"></a><br>
            <input type="button" id="btn1" onclick="showtext1()" value="North Indian Food">
            <div id="foodnorth"></div>
        </div>
        <div id="southindian">
            <h1 style="color: palevioletred;font-size: 40px;">South Indian Food </h1>
            <div id="foodsouth"></div>
            <a href="http://localhost/html%20project/South%20Indian%20Foods.php"><img src="south indian food.jpg" style="width: 350px;height: 300px;"></a><br>
            <input type="button" id="btn2" onclick="showtext2()" value="South Indian Food">
        </div>
        <a href="#top" id="link" style="text-align: center;display: inline;background-color: blanchedalmond;border: 1px solid grey;border-radius: 10px;padding: 10px;position: absolute;left:46%;top: 100%;text-decoration: none;">Back to top</a>
        <footer style="background-color: rgba(243, 230, 255, 0.8);padding-left: 20px; padding-bottom: 0px;padding-right: 20px;padding-top: 20px;position: absolute;top: 120%;">
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
        <script>
            function showtext1() 
            {
                document.getElementById("foodnorth").innerHTML = "North Indian curries usually have thick, moderately spicy and creamy gravies. The use of dried fruits and nuts is fairly common even in everyday foods. Dairy products like milk, cream, cottage cheese, ghee (clarified butter) and yogurt play an important role in the cooking of both savory and sweet dishes.";
            }
            function showtext2()
            {
                document.getElementById("foodsouth").innerHTML = "South Indian food have medicinal properties. South Indian food has rice and coconut as its main ingredient. Basically the dishes are very tasty as well as healthy as they do not contain much oil.By and large, South Indian cuisine is perhaps the hottest of all Indian food. Meals are centered around rice or rice-based dishes. South Indians are great lovers of coffee, which is usually a special type made with chicory.";
            } 
        </script>
    </body>
</html>