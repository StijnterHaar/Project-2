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
                <a href=cataloge.php class="catolag-list-items">Pizza</a>
                <a class="catolag-list-items">Specials</a>
                <a href=info.php class="catolag-list-items active" style="font-weight: bold;">Info</a>
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
            <div class="items">
            <h1> Welkom op onze website! </h1>
                <div class="info-items">
                    <a>Deze website is opgericht door aanleiding van een project op ROC nijmegen voor de opleiding software developer.</a>
                    <a>Hierbij zijn de volgende dingen aan gewerkt of nog in development :</a>
                </div>
            <h1> Over Ons </h1>
            <div class="info-items">
                <a>Deze website is opgericht door aanleiding van een project op ROC nijmegen voor de opleiding software developer.</a>
                <a>Hierbij zijn de volgende dingen aan gewerkt of nog in development :</a>
            </div>
            <h1 id="locatie"> Personeel </h1>
                <div class="info-items">
                <div class="carousel-container">
                    <div class="slides">
                    <div class="mySlides animate">
                        <img src="https://media.istockphoto.com/photos/successful-customer-service-rep-picture-id177299559?k=20&m=177299559&s=612x612&w=0&h=C8lL2lVuJYefbv4fftNWNCWZTHVhR1UGSAUfCNgwYKw=" alt="slide" />
                        <div class="number">1 / 3</div>
                        <div class="text">Hassan can (Manager)</div>
                    </div>

                    <div class="mySlides animate">
                        <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F6%2F2018%2F09%2Fgordon-ramsay-hells-kitchen-02-2000.jpg&q=60" alt="slide" />
                        <div class="number">2 / 3</div>
                        <div class="text">Mike Wazowski (Chef)</div>
                    </div>

                    <div class="mySlides animate">
                        <img src="https://i.ytimg.com/vi/kFMGpDwntHM/maxresdefault.jpg" alt="slide" />
                        <div class="number">3 / 3</div>
                        <div class="text">Mohhamed de vries (Bezorger)</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="prevSlide()">&#10094;</a>
                    <a class="next" onclick="nextSlide()">&#10095;</a>

                    <!-- The dots/circles -->
                    <div class="dots-container">
                        <span class="dots" onclick="currentSlide(1)"></span>
                        <span class="dots" onclick="currentSlide(2)"></span>
                        <span class="dots" onclick="currentSlide(3)"></span>
                        <span class="dots" onclick="currentSlide(4)"></span>
                        <span class="dots" onclick="currentSlide(5)"></span>
                    </div>
                    </div>
                    </div>
                </div>
            <h1 id="contact"> Contact </h1>
            <div class="info-items">
                <a>Deze website is opgericht door aanleiding van een project op ROC nijmegen voor de opleiding software developer.</a>
                <a>Hierbij zijn de volgende dingen aan gewerkt of nog in development :</a>
            </div>
            <h1 id="locatie"> Locatie </h1>
            <div class="info-items">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39464.937686030564!2d5.812589379101563!3d51.81422540000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c70895135f19ff%3A0x4d4f0d9582f91bc4!2sNew%20York%20Pizza!5e0!3m2!1sen!2snl!4v1650444830641!5m2!1sen!2snl" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
        </div>
        <div class="right">
            <div class="right-fixed">
                <div class="shopping-card">
                    <h2 style="margin-top: 10px; margin-left: 10px;">Winkelmand</h2>
                    <div class="delivery-option">EMPTY</div>
                    <div class="totaal">
                        <span style="margin-left: 10px;">Totaal</span>
                        <span class="cart-total">0,00€</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script 
    src="scripts/login.js"></script>

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