<?php

include 'includes/connect.php';

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($connect, "DELETE FROM products WHERE id = $id");
   header('location:adminpage.php');
};

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
            </div>
        </div>
        <div class="topbar">
            <div class="box2"></div>
            <div class="box2"></div>
            <div class="box2"></div>
            <div class="box2"></div>
        </div>
        <div class="middlecontainer">
            <div class="middlebar1">
                <form action="php/createProduct.php" method="post" enctype="multipart/form-data">
                    <h3>add a new product</h3>
                    <input type="text" placeholder="enter product name" name="product_name" class="" required>
                    <input type="number" placeholder="enter product price" name="product_price" class="" required>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="" required>
                    <input type="submit" class="btn" name="add_product" value="add product">
                </form>>
            </div>
            <div class="middlebar2">
                <?php

   $select = mysqli_query($connect, "SELECT * FROM products");
   
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
                        <?php while($row = mysqli_fetch_assoc($select)){ ?>
                        <tr>
                            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>$
                                <?php echo $row['price']; ?>/-
                            </td>
                            <td>
                                <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i
                                        class="fas fa-edit"></i> bewerk </a>
                                <a href="adminpage.php?delete=<?php echo $row['id']; ?>" class="btn"> <i
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