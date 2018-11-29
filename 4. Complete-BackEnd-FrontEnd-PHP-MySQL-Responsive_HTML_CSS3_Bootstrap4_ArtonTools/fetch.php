<?php
    require ('admin/config.php');
    $id = $_POST['id'];
    $fetch = "SELECT `programs`.* , `country_data`.`country_img`,`aindex` FROM `programs` JOIN `country_data` ON `programs`.`country` = `country_data`.`id` && `programs`.`program_id`='$id'";
    $data = mysqli_query($conn, $fetch);
    $program = mysqli_fetch_assoc($data);
    echo json_encode($program);
?>