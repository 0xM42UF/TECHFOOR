<?php
    require_once('functions/function.php');
    needtologin();
    admin();
    $slug=$_GET['d'];
    $delete="DELETE FROM search_engine_data WHERE slug='$slug'";
    
    if(mysqli_query($con,$delete)){
        $_SESSION['success_alert']='3';
        
        header('Location: all-index-website.php');
    }else{
        
        header('Location: all-index-website.php');
    } 
?>

