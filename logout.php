<?php
    include 'redirection.php';
    session_start();
    unset( $_SESSION['role'] );
    unset( $_SESSION['username'] );
    redirect('index.php');
?>
<!-- Developed by Kaushik and Ranjit for CS590 Blockchain -->
