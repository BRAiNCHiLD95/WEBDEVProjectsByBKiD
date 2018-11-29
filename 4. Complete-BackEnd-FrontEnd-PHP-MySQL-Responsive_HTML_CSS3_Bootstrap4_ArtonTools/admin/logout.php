<?php
    session_start();
    if (isset($_SESSION['user_name']) && $_SESSION['user_name'] !== '') {
        session_destroy();
        echo
        '<script language="javascript">
        alert("Logout Successful!");
        window.location.href="login.php"
        </script>';
    }
    else {
        echo
        '<script language="javascript">
        alert("You are not logged in!");
        window.location.href="login.php"
        </script>';
    }
?>