<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
        <title>Plant Share</title>
    </head>
    <body>
        <div class="top">
            <img class="logo" src="image/7.png" alt="logo">
            <h4>PlantShare.com</h4>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="allads.php">All Ads</a></li>
                <li><a href="test.php">About</a></li>     
            </ul>
            <div class="btn_grp">
                <a href="login.php"><button class="one">Log In</button> </a>
                <a href="registration.php"><button class="two">Sign UP</button> </a>
            </div>
        </div>
        <br>
        <br>
        <div>
        <img class="image2" id="image2" src="image/p1.jpg" alt="" >
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/script.js"></script>
        </div>
        <br>
        <br>
        
        <div class="any"><h3>FAQ</h3></div>
        <div class="any"><h3>Rules & Condition</h3></div>
        <div class="any"><h3>Facebook</h3></div>
        <div class="any"><h3>Twitter</h3></div>
        <div class="any"><h3>Youtube</h3></div>
        <br>
        <br>    

        <?php
        $conn = mysqli_connect("localhost", "root", "", "plant");
        $db = mysqli_select_db($conn, 'plant');
        ?>          
    </div

</body>
</html>
