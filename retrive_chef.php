<!DOCTYPE html>
<html>
    <head lang="en">
        <title>Cooking Portal and Calorie Counter Account Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="description" content="Cooking portl and calorie counter login">
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                background-image: url("retrive_chefhome.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }
            table, th, td {
                border: 1px solid grey;
                border-collapse: collapse;
                padding: 40px;
                max-width: 500px;
                font-size: 16px;
            }
            th {
                background-color: thistle;
            }
            tr:hover {
                background-color: lavender;
            }
            #cheftable {
                position: absolute;
                top: 5%;
                right: 10%;
                max-width: 500px;
                background-color: rgba(230, 230, 255, 0.9);
            }
            #form_container {
                position: relative;
                top: 10%;
                margin: 100px;
                max-width: 350px;
                padding: 20px;
                background-color:white;
                visibility: hidden;
            }
            #chname, #reg, #chcon {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background-color:rgba(245, 245, 239, 0.8);
            }

            #chname:focus, #reg:focus, #chcon:focus {
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
            #btn1 {
                background-color:forestgreen;
                color: white;
                padding: 16px 20px;
                border: none;
                width: 20%;
                opacity: 0.9;
            }
        </style>
    </head>
    <body>
    <h2 style="color: ivory;">Do you want to add chefs' details to the portal ?</h2>
    <button id="btn1" onclick="myFunction()">Add Chef Details</button>
    <form id="form_container" action="chef_insertion.php" method="POST">
        <h1>Insert Chef Details</h1>
        <label for="chname"><b>Chef name</b></label><br>
        <input type="text" id="chname" name="chname" placeholder="Name" required><br>
        <label for="reg"><b>Region</b></label><br>
        <input type="text" id="reg" name="reg" placeholder="Region of origin" required><br>
        <label for="chcon"><b>Contact details</b></label><br>
        <input type="text" id="chcon" name="chcon" placeholder="Mobile No." required><br>
        <input type="submit" id="btn" value="Submit">
    </form>
    <script>
        function myFunction() {
          document.getElementById("form_container").style.visibility = "visible";
        }
    </script>
        <table id="cheftable">
            <tr>
                <th>Chef Id</th>
                <th>Chef name</th>
                <th>Region</th>
                <th>Contact</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "cooking portal");
            if ($conn-> connect_error) {
                die("Connection failed:". $conn-> connect_error);
            }

            $sql = "SELECT chef_id, name, region, contact FROM chef_details";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["chef_id"] . "</td><td>". $row["name"] . "</td><td>". $row["region"] . "</td><td>". $row["contact"] . "</td></tr>";
                }
                echo "</table>";
            }
            else {
                echo "0 result";
            }

            $conn-> close();
            ?>
        </table>
    </body>
</html>