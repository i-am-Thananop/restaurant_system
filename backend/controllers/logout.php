<?php
    session_start();
    session_destroy();
    header('location: ../../frontend/view/login/login.php');
?>