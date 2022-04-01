<?php
  
include_once('includes/connect.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $connect->prepare("SELECT * FROM adminlogin WHERE adminname = :adminname");
    $stmt->bindParam(':adminname', $adminname);
    $stmt->execute();
    $user = $stmt->fetch();

    
    if($user['adminname'] == $adminname && 
        $user['password'] == $password) {
            header("Location: adminpage.php");
            exit();
    }
    else {
        echo "<script language='javascript'>";
        echo "alert('WRONG INFORMATION')";
        echo "</script>";
        die();
    }
}
  
?>