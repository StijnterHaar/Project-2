<?php
    include '../includes/connect.php';

    if(isset($_POST['add_product'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_img/'.$product_image;

        if(empty($product_name) || empty($product_price) || empty($product_image)){
            header('Location: ../adminpage.php');
            exit();
        }else{
            $sql = "INSERT INTO products(name, price, image) VALUES (:name, :price, :image)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':name', $product_name);
            $stmt->bindParam(':price', $product_price);
            $stmt->bindParam(':image', $product_image);
            $stmt->execute();

            move_uploaded_file($product_image_tmp_name, $product_image_folder);

            header('Location: ../adminpage.php');
            exit();
        }

    } else {
        header('Location: ../login.php');
        exit();
    }
?>