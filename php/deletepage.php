<?php
    include '../includes/connect.php';

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        header('Location: ../adminpage.php');
        exit();
        }
?>