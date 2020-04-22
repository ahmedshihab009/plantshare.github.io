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
    <div id="product-grid-new">
        <div class="txt-heading-new">Find Your Favorite Plant</div>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "plant");
        $db = mysqli_select_db($conn, 'plant');

        $product_array = "select * from post";

        $query = mysqli_query($conn, $product_array);

        while ($res = mysqli_fetch_array($query)) {
            ?>

            <div class="product-item-new">
                <form method="post">
                    <div class="product-tile-footer">
                        <div class="product-title"><label>Title: </label><?php echo $res['title']; ?></div>
                        <div class="product-title"><label>Detail: </label><?php echo $res["detail"]; ?></div>
                        <div class="product-title"><label>Categories: </label><?php echo $res["categories"]; ?></div>
                        <div class="product-title"><label>Price: </label><?php echo $res["price"]; ?><text> Taka</text></div>
                        <div class="product-title"><label>Quantity: </label><?php echo $res["quantity"]; ?></div>
                        <div class="product-title"><label>Phone: +8801*********</label></div>
                    </div>
                </form>
            </div>

            <?php
        }
        ?>
    </div>

</body>
</html>
