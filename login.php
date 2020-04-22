<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "plant");
        $db = mysqli_select_db($conn, 'plant');

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['pass'];


            if (!empty($email) && !empty($password)) {

                $p = "select * from registration where email='$email' && password='$password'";

                $run = mysqli_query($conn, $p);
                $num = mysqli_num_rows($run);

                if ($num == 1) {
                    echo '<script language="javascript">';
                    echo 'alert("Login Successfuly")';
                    echo '</script>';
                    echo '<script>window.location.href = "mypage.php";</script>';
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("You are Not Register")';
                    echo '</script>';
                    echo '<script>window.location.href = "registration.php";</script>';
                }
            }
        }
        ?>
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
        <br><br>

        <div class="few">
            <h1 class="part"> Login <br>

            </h1>
        </div><br>

        <form class="newnext" method="post">


            <input type="text" name="email" class="inputnew" placeholder="Enter Your Email"> 


            <input type="password" name="pass" class="inputnew" placeholder="Enter Password"> 



            <input class="newsubmit" name="submit" type="submit" value="Login">



        </form>
    </body>
</html>
