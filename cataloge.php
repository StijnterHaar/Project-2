

<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <title>catalogue</title>
</head>

<body>
    <div class="top-header2">
        <div class="catalog-nav">
            <div class="logo">
                <a href="dino.html"><div class="p-header__logo"><img src="images/logo.png" ></div></a>
            </div>
            <ul class="catalog-list">
                <a href=index.php class="catolag-list-items">Home</a>
                <a href=cataloge.php class="catolag-list-items active" style="font-weight: bold;">Pizza</a>
                <a class="catolag-list-items">Specials</a>
                <a href=info.php class="catolag-list-items">Info</a>
                <form action="#" method="" class="search-form">
                <input type="text" name="search" placeholder="Search..">
                </form>
            </ul>
            <ul class="Login-list">
                            <?php
                include('validate.php'); // Includes Login Script
                if(isset($_SESSION['login_user']))
                echo "<a href='adminpage.php' style='color:white; padding-top: 15px; font-size: 15px;'>","Ingelogd als:  " . $_SESSION['login_user'] . "</a>";
            else
                echo '<a class="catolag-list-items" onclick="openForm()">Login</a>';
                ?> 
            </ul>
        </div>
    </div>
    <div class="form-popup" id="myForm">
        <form action="validate.php" method="post">
            <div class="login-box">
                <h1>Login</h1>

                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Adminname" name="adminname" value="">
                </div>

                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="password" value="">
                </div>

                <input class="button" type="submit" name="login" value="Sign In">
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </div>
        </form>
    </div>
    <div class="middle-container2">
        <div class="left">
            <div class="product-items">
                <?php 
                @include 'includes/connect.php';
                if (isset($_GET['search'])) {
                    $zoekvraag = '%'.$_GET['search'].'%';
                    $select = "SELECT * FROM products WHERE name LIKE :zoekvraag";
                    $stmt = $connect->prepare($select);
                    $stmt->bindParam('zoekvraag', $zoekvraag);
                } else {
                    $select = "SELECT * FROM products";
                    $stmt = $connect->prepare($select);
                }
                 $stmt->execute();
                 $result = $stmt->fetchAll();

                 foreach ($result as $product){
           ?>
                
                <div class="product-box">
                    <div class="display-box"><img src="uploaded_img/<?php echo $product['image']; ?>" height="100" alt="100"></div>
                    <div class="display-name"><?php echo $product['name']; ?></div>
                    <div class="footer-box">
                        <div class="display-price">Vanaf <a style="font-weight: bold;"><?php echo $product['price']; ?> €</a></div>
                        <div class="display-button">+</div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="right">
            <div class="right-fixed">
                <div class="shopping-card">
                    <h2 style="margin-top: 10px; margin-left: 10px; font-size: 20px;">Winkelmand</h2>
                    <div class="delivery-option"></div>
                    <div class="totaal">
                        <span style="margin-left: 10px; font-size: 20px;">Totaal</span>
                        <span class="cart-total" style="font-size: 20px;">0,00€</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/login.js"></script>

</body>

<footer>
    <div class="footer-middle">
        <ul class="footer-ul">
            <a href="info.php#contact">Contact</a>
            <a href="info.php">Info</li>
            <a>Privacy policy</a>
            <a>Algemene voorwaarden</a>
        </ul>
        <div class="credits">© 2022 Stijn ter Haar</div>
    </div>
</footer>

</html>