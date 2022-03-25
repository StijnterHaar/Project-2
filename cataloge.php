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
            <ul class="Login-list">
                <a class="catolag-list-items" onclick="openForm()">Login</a>
            </ul>
            <ul class="catalog-list">
                <a href=index.html class="catolag-list-items">Home</a>
                <a class="catolag-list-items active">Pizza</a>
                <a class="catolag-list-items">Specials</a>
                <a class="catolag-list-items">Info</a>

            </ul>
            <div class="logo">
                <div class="p-header__logo"><img src="images/logo.png"></div>
            </div>
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
                <div class="product-box">
                    <div class="display-box"><img src="images/1647263736793.jpg" alt="" class="item-image"></div>
                    <div class="display-name">Hawaii</div>
                    <div class="footer-box">
                        <div class="display-price">Vanaf <a style="font-weight: bold;">1,95€</a></div>
                        <div class="display-button">+</div>
                    </div>
                </div>
                <div class="product-box">
                    <div class="display-box"><img src="images/1647263736793.jpg" alt="" class="item-image"></div>
                    <div class="display-name">Margherita</div>
                    <div class="footer-box">
                        <div class="display-price">Vanaf <a style="font-weight: bold;">3,95€</a></div>
                        <div class="display-button">+</div>
                    </div>
                </div>
                <div class="product-box">
                    <div class="display-box"><img src="images/1647263736793.jpg" alt="" class="item-image"></div>
                    <div class="display-name">Dirk (Met extra saus)</div>
                    <div class="footer-box">
                        <div class="display-price">Vanaf <a style="font-weight: bold;">4,95€</a></div>
                        <div class="display-button">+</div>
                    </div>
                </div>
                <div class="product-box">
                    <div class="display-box"><img src="images/1647263736793.jpg" alt="" class="item-image"></div>
                    <div class="display-name">Pizza</div>
                    <div class="footer-box">
                        <div class="display-price">Vanaf <a style="font-weight: bold;">5,95€</a></div>
                        <div class="display-button">+</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right-fixed">
                <div class="shopping-card">
                    <h2 style="margin-top: 10px; margin-left: 10px;">Winkelmand</h2>
                    <div class="delivery-option"></div>
                    <div class="totaal">
                        <span style="margin-left: 10px;">Totaal</span>
                        <span class="cart-total">0,00€</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/login.js"></script>

</body>

</html>