<?php
  require_once('functions/function.php');
  needtologin();     

  if(!empty($_POST))
  {

    $current_password=md5($_POST['current_password']);
    $new_password=md5($_POST['new_password']);
    $confirm_new_password=md5($_POST['confirm_new_password']);
    
    if($_SESSION['role_id']=='1'){

      $password=$_SESSION['sa_password'];
      $update="UPDATE super_admin SET sa_password='$new_password'";
    }else{
      $password=$_SESSION['password'];
      $slug=$_SESSION['slug'];   
      $update="UPDATE user SET password='$new_password' WHERE slug='$slug'";
    }
  
    if($password==$current_password){
      
      if($new_password==$confirm_new_password){
        
        $Q=mysqli_query($con,$update);
        $_SESSION['success_alert']='10';
        header('Location: change-password.php');
        
      }else{
        $_SESSION['success_alert']='8';
        header('Location: change-password.php');
      }

    }else{
      $_SESSION['success_alert']='9';
      header('Location: change-password.php');

    }
    
} 


?>
