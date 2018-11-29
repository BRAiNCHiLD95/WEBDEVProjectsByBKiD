<?php

$obj = $_POST['data'];
$data =  $obj;

require_once ('admin/config.php');
$query = "";
$query .= "SELECT DISTINCT `name`, `country_img` FROM `country_data` JOIN `programs` ON `country_data`.`id` = `programs`.`country`";

if (isset($data['net_worth'])) {
    $net_worth = $data['net_worth'];
    $query .= " && `programs`.`net_worth` >= '$net_worth'";
}

if (isset($data['contrib_amt'])) {
    $contrib_amt = $data['contrib_amt'];
    $query .= " && `programs`.`contrib_amt` >= '$contrib_amt'";
}

if (isset($data['contrib_type'])) {
    $contrib = "";
    foreach($data['contrib_type'] as $type) {
        $contrib .= "`programs`.`assets` LIKE '%".$type."%' OR ";
    }
    $contrib = substr($contrib, 0, -4);
    $query .= " && (".$contrib.")";
}

if (isset($data['financing'])) {
    $query .= " && `programs`.`financing`= '".$data['financing']."'";
}

if (isset($data['speed'])) {
    $val = $data['speed'];
    if ($val == 'None') {
        $query .=" && (`programs`.`tt_residence` = '$val' OR `programs`.`tt_residence` = '3-6 months' OR `programs`.`tt_residence` = '4-6 months')";
    }
    else if ($val == '6-12 months') {
        $query .=" && `programs`.`tt_residence` = '$val'";
    }
    else if ($val == '36 months') {
        $query .=" && (`programs`.`tt_residence` = '$val' OR `programs`.`tt_residence` = '12-18 months')";
    }
}

if (isset($data['relocation'])){
    $relocaton = $data['relocation'];
    if ($relocaton == 'Yes') {
        $query .= " && `programs`.`physical_residence` != 'No'";
    }
    else {
        $query .= " && `programs`.`physical_residence` = 'No'";
    }
}

if (isset($data['simplicity'])) {
    $simplicity = $data['simplicity'];
    $query .= " && `country_data`.`simplicity` >= '$simplicity'";
}

if (isset($data['life'])) {
    $life = $data['life'];
    $query .= " && `country_data`.`life` >= '$life'";
}

$query .=" LIMIT 5";

$fetchMatch = mysqli_query($conn, $query);
$countries = [];
while($fetched = mysqli_fetch_assoc($fetchMatch)) {
    array_push($countries, $fetched);
}

echo json_encode($countries);
?> 