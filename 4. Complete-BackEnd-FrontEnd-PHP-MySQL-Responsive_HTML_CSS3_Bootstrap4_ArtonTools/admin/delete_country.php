<?php 
    session_start();
    if (isset($_SESSION['user_name']) && $_SESSION['user_name'] != '') {
        require_once('config.php');
        $fileToDelete =  $_GET['file'];
        $fetch = "SELECT `country_img` FROM `country_data` WHERE `id` = '$fileToDelete'";
        $fetched = mysqli_query($conn, $fetch);
        $img = mysqli_fetch_assoc($fetched);
        $deleteQuery = "DELETE FROM `country_data` WHERE `id` = '$fileToDelete'";
        $run = mysqli_query($conn, $deleteQuery);
        if ($run == 1) {
            unlink("../assets/uploads/".$img['country_img']);
            echo
            '<script language="javascript">
            window.location.href="countries.php"
            </script>';
        }
        else {
            echo
            '<script language="javascript">
            alert("Database Error! Contact Us for help!");
            window.location.href="countries.php"
            </script>';
        }
    }
    else {
        echo
        '<script language="javascript">
        alert("Please Login to Access AdminPanel");
        window.location.href="login.php"
        </script>';
    }
?>