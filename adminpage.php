<?php

include 'includes/connect.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header("Location:cataloge.php");
}
 
// Check if the user is logged in, if not then redirect him to login pag
?>



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
    <title>Admin</title>
    <script src="https://kit.fontawesome.com/cfd87a559f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="rightbar">
        <div class="leftbar">
            <a style="margin-left: 20px; color: white;">Admin Page</a>
            <div class="line"></div>
            <div class="leftitems">
                <i class="fa-solid fa-house-chimney"><a style="color: white; margin-left: 5px;"
                        href="cataloge.php">Home</a></i>
                <i class="fa-solid fa-envelope"
                    style="background-color: #db2068; box-shadow: -0.55rem 0 0 #db2068, 3.35rem 0 0 #db2068; padding: .18em 0;"><a
                        style="color: white; margin-left: 5px;">Dashboard</a></i>
                <i class="fa-solid fa-cart-flatbed"><a style="color: white; margin-left: 5px;">Products</a></i>
                <i class="fa-solid fa-lock-open" style="margin-top: 350px;"><a style="color: white; margin-left: 5px;"
                        href="php/logout.php">logout</a></i>
            </div>
        </div>
        <div class="topbar">
            <div class="box2">
                <div class="boxh" style="background-color: red;"></div>
                <div class="boxd">View Details</div>
            </div>
            <div class="box2"></div>
            <div class="box2"></div>
            <div class="box2"></div>
        </div>
        <div class="middlecontainer">
            <div class="middlebar1">
                <form action="php/createProduct.php" method="post" enctype="multipart/form-data">
                    <div class="adminbox">
                    <h3 style="margin-top: 20px;">add a new product</h3>
                    <input type="text" placeholder="enter product name" name="product_name" class="product-name" required>
                    <input type="number" placeholder="enter product price" name="product_price" class="product-price" required>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="product-image" required>
                    <input type="submit" class="submitbtn" name="add_product" value="add product">
                    </div>
                </form>
            </div>
            <div class="middlebar2">
                <?php

            $sql = "SELECT * FROM products";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
   
   ?>
                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>product foto</th>
                                <th>product naam</th>
                                <th>product prijs</th>
                                <th>actie</th>
                            </tr>
                        </thead>
                        <?php foreach($result as $product){ ?>
                        <tr>
                            <td><img src="uploaded_img/<?php echo $product['image']; ?>" height="50" alt=""></td>
                            <td>
                                <?php echo $product['name']; ?>
                            </td>
                            <td>$
                                <?php echo $product['price']; ?>/-
                            </td>
                            <td>
                                <a href="product_update.php?edit=<?php echo $product['id']; ?>" class="btn"> <i
                                        class="fas fa-edit"></i> bewerk </a>
                                <a href="php/deletepage.php?delete=<?php echo $product['id']; ?>" class="btn"> <i
                                        class="fas fa-trash"></i> verwijder </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>


</body>

</html>