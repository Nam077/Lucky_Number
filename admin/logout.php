<?php
session_start();
    
unset($_SESSION['username_admin']);
   
    header('Location:http://localhost/vqmm/admin/login/');
?>
