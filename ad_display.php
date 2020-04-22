<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ad_display</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
    </head>
</head>
<body>
    <div class="top">
        <img class="logo" src="image/7.png" alt="logo">
        <h4>PlantShare.com</h4>
        <ul class="nav">
            <li><a href="ad_display.php">My All Ads</a></li>
            <li><a href="mypage.php">Post Ads</a></li>
            <li><a href="test.php">About</a></li>     
        </ul>
        <div class="btn_grp">
            <a href="index.php"><button class="three">Log Out</button> </a>
        </div>
    </div>
    <div id="product-grid">
        <div class="txt-heading">My Ads</div>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "plant");
        $db = mysqli_select_db($conn, 'plant');

        $product_array = "select * from post order by id ";

        $query = mysqli_query($conn, $product_array);

        while ($res = mysqli_fetch_array($query)) {
            ?>
            <div class="product-item">
                <form method="post">
                    <div class="product-tile-footer">
                        <div class="product-title"><label>Title: </label><?php echo $res['title']; ?></div>
                        <div class="product-title"><label>Detail: </label><?php echo $res["detail"]; ?></div>
                        <div class="product-title"><label>Categories: </label><?php echo $res["categories"]; ?></div>
                        <div class="product-title"><label>Price: </label><?php echo $res["price"]; ?><text> Taka</text></div>
                        <div class="product-title"><label>Quantity: </label><?php echo $res["quantity"]; ?></div>
                    </div>
                </form>
            </div>
            <?php
        }
        ?>
    </div>

</body>
</html>
