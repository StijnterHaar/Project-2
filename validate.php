<?php
session_start();
  
include_once('includes/connect.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if (isset($_POST["adminname"])) {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $connect->prepare("SELECT * FROM adminlogin WHERE adminname = :adminname AND function = 'admin'");
    $stmt->bindParam(':adminname', $adminname);
    $stmt->execute();
    $user = $stmt->fetch();

    
    if($user['adminname'] == $adminname && 
        $user['password'] == $password) {
            $_SESSION['login_user']=$adminname; 
            $_SESSION['loggedin'] = true;
            header("Location: adminpage.php");
            exit();
    }
    else {
        $_SESSION['loggedin'] = false;
        echo '<script type="text/javascript">'; 
        echo 'alert("The information you used to login is false or you are not an admin!");'; 
        echo 'window.location.href = "cataloge.php";';
        echo '</script>';
        exit();
    }
}
  
?>