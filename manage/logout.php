<?php
    # Log out the user by removing session data, then return to login screen
    session_start();
    if (isset($_SESSION['user'])) {
        session_destroy();
    }
    header('Location:../login');
?>
