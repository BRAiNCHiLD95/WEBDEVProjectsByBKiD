<?php 
    require('config.php');
    $id = $_POST['c_id'];
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $speed = $_POST['speed'];
    $mobility = $_POST['mobility'];
    $life = $_POST['life'];
    $simplicity = $_POST['simplicity'];
    $aindex = $_POST['aindex'];
    $file = $_FILES['country_img']['name'];
    $arrayExtension = explode('.', $file);
    $extension = $arrayExtension[count($arrayExtension)-1];
    $img_name = $name."_flag";
    $country_img = $img_name.".".$extension;
    $source=$_FILES['country_img']['tmp_name'];
    $destination="../assets/uploads/".$country_img;
    $updateDB = "UPDATE `country_data` SET `name` = '$name', `cost` = '$cost', `speed` = '$speed', `mobility` = '$mobility', `life` = $life, `simplicity` = $simplicity, `aindex` = '$aindex', `country_img` = '$country_img' WHERE `id`= $id";
    $update = mysqli_query($conn, $updateDB);
    if ($update == 1) {
        move_uploaded_file($source,$destination);
        echo
        '<script language="javascript">
        window.location.href="countries.php";
        </script>';
    }
    else {
        echo
        '<script language="javascript">
        alert("ERROR");
        window.location.href="countries.php";
        </script>';
    }
?>