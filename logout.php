<?php
    require_once('functions/function.php');
    needtologin();
    
    session_destroy();
    header('Location: index.php');
    
?>