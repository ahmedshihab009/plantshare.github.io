<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>All Ads</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
    </head>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "plant");
    $db = mysqli_select_db($conn, 'plant');

    if (isset($_POST['ad'])) {
        $title = $_POST['title'];
        $detail = $_POST['detail'];
        $categories = $_POST['categories'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];


        if (!empty($title) && !empty($detail) && !empty($categories) && !empty($price) && !empty($quantity)) {


            $q = "insert into post (title, detail, categories, price, quantity) values ('$title','$detail','$categories','$price','$quantity')";
            $q2 = mysqli_query($conn, $q);

            echo '<script language="javascript">';
            echo 'alert("Ad Post Successful")';
            echo '</script>';
            echo '<script>window.location.href = "ad_display.php";</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("AD POST ERROR")';
            echo '</script>';
            echo '<script>window.location.href = "mypage.php";</script>';
        }
    }
    ?>
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
            <li><a href="ad_display.php">My All Ads</a></li>
            <li><a href="test.php">About</a></li>     
        </ul>
        <div class="btn_grp">
            <a href="index.php"><button class="three">Log Out</button> </a>
        </div>
    </div>
    <br><br>

    <div class="new">
        <h1 class="part"> Post Your Ad of Plant <br>

        </h1>
    </div><br>

    <form class="next" method="post">

        <label> Title: </label>
        <input type="text" name="title" class="input" placeholder="Give a Tittle"> <br>

        <label> Detail: </label> 
        <textarea cols="25" name="detail" row="5" placeholder="Give some detail about your plant" ></textarea><br>

        <label> Categories: </label>
        <select class="input" name="categories" >
            <option value="Fruit Plant">Fruit Plant</option>
            <option value="Flower Plant">Flower Plant</option>
            <option value="Herbal Plants">Herbal Plants</option>
            <option value="Vegetable Plant">Vegetable Plant</option>
            <option value="Trees">Trees</option>
            <option value="Others">Others</option>
        </select>

        <label> Price: </label>
        <input type="number" name="price" class="input" placeholder="Give price in BDT"> <br>

        <label> Quantity: </label>
        <input type="text" name="quantity" class="input" placeholder="How much do you want to sell?"> <br>

        <input class="submit" name="ad" type="submit" value="Post">

    </form>


</body>
</html>
