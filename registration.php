<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "plant");
        $db = mysqli_select_db($conn, 'plant');

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['pass'];
            $repassword = $_POST['repass'];


            if (!empty($name) && !empty($email) && !empty($phone) && !empty($password)) {

                $p = "select * from registration where email='$email' or phone='$phone'";

                $run = mysqli_query($conn, $p);
                $num = mysqli_num_rows($run);

                if ($password == $repassword) {
                    if ($num> 0) {
                        echo '<script language="javascript">';
                        echo 'alert("Duplicate Email or Phone No.")';
                        echo '</script>';
                        echo '<script>window.location.href = "registration.php";</script>';
                    } else {
                        $q = "insert into registration (name, email, phone, password) values ('$name','$email','$phone','$password')";
                        $q2 = mysqli_query($conn, $q);
                        echo '<script language="javascript">';
                        echo 'alert("Registration Successful")';
                        echo '</script>';
                        echo '<script>window.location.href = "login.php";</script>';
                    }
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("Password Mismatched")';
                    echo '</script>';
                    echo '<script>window.location.href = "registration.php";</script>';
                }
            } else {
                echo '<script language="javascript">';
                echo 'alert("All Field Must Be Filled!")';
                echo '</script>';
                echo '<script>window.location.href = "registration.php";</script>';
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

        <div class="new">
            <h1 class="part"> Registration <br>

            </h1>
        </div><br>

        <form class="next" method="post">


            <input type="text" name="name" class="input" placeholder="Enter Your Name"> 


            <input type="text" name="email" class="input" placeholder="Enter Your Email"> 


            <input type="text" name="phone" class="input" placeholder="Enter Your Phone No."> 


            <input type="password" name="pass" class="input" placeholder="Enter Password"> 


            <input type="password" name="repass" class="input" placeholder="Retype Password"> <br>

            <input class="submit" name="submit" type="submit" value="Register">



        </form>
    </body>
</html>
