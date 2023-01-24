<?php
    // Logging out by unsetting user data from session
    session_start();
    unset($_SESSION['user']);
    header('Location: index.php');