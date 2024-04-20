<?php 
    setcookie('flag', 'abc', time()-10, '/');
    header('location: ../view/login.php');
    setcookie('reservation_message', '', time()-3600, '/');
    
    
?>