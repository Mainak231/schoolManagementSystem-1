<?php 
    session_start();
    session_destroy();
    //Takes back to the page from where the logout has been called
    header('Location: ./index.php');
    //header('Location: ./main.php')
?>