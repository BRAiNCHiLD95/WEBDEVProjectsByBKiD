<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC | Program Check</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style>
        tbody:before {
            content: "-";
            display: block;
            line-height: 2em;
            color: transparent;
        }
        table tbody tr td {
            font-weight: bold;
        }
        select {
            border: 1px solid #cc9966 !important;
        }
        .table_values {
            background-color: #f4f4f4;
            border-right: 4px solid #ffffff;
            border-left: 4px solid #ffffff;
        }
        .prog_criteria {
            padding-right: 15px;
            text-align: right;
            font-weight: bold;
            font-size: 0.8rem;
            line-height: 1rem;
        }
    </style>
</head>

    <body>
    <?php include('header.php'); ?>
        <div style="background: #F4F4F4; margin: 0px;">
            <div class="col-md-8 pb-5 offset-md-2 text-center">
                <img class="mt-5 pt-5" src="assets/images/arton.png">
                <h1>PROGRAM <span class="font-weight-bold">CHECK</span></h1>
                <h5 style="color: #CC9966;" class="font-italic">Select various programs and compare their unique features.</h5>
            </div>
        </div>
        <div id="check_cont" class="container">
            <div class="compare-flex-wrapper">
                <table width="100%" class="programs-table my-5">
                    <thead class="text-center">
                        <th width="20%" class="labels"></th>
                        <th width="20%" id="img1"><img src="flags/placeholder-icon.svg" height="100px" width="100px"></th>
                        <th width="20%" id="img2"><img src="flags/placeholder-icon.svg" height="100px" width="100px"></th>
                        <th width="20%" id="img3"><img src="flags/placeholder-icon.svg" height="100px" width="100px"></th>
                        <th width="20%" id="img4"><img src="flags/placeholder-icon.svg" height="100px" width="100px"></th>
                    </thead>
                    <tbody> 
                        <tr class="text-center">
                            <td></td>
                            <td>
                                <select class="form-control" id="sel1">
                                    <option selected value="0">-- Select Program --</option>
                                    <?php
                                        require('admin/config.php');
                                        $fetchCountries = "SELECT `programs`.`type`,`program_id`, `country_data`.`name` FROM `programs` JOIN `country_data` ON `programs`.`country` = `country_data`.`id` ORDER BY `name` ASC";
                                        $countries = mysqli_query($conn, $fetchCountries);
                                        while ($data = mysqli_fetch_assoc($countries)) {
                                    ?>
                                        <option value="<?php echo $data['program_id']; ?>"><?php echo $data['name']; echo " ".$data['type']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="sel2">
                                    <option selected value="0">-- Select Program --</option>
                                    <?php
                                        require('admin/config.php');
                                        $fetchCountries = "SELECT `programs`.`type`,`program_id`, `country_data`.`name` FROM `programs` JOIN `country_data` ON `programs`.`country` = `country_data`.`id` ORDER BY `name` ASC";
                                        $countries = mysqli_query($conn, $fetchCountries);
                                        while ($data = mysqli_fetch_assoc($countries)) {
                                    ?>
                                        <option value="<?php echo $data['program_id']; ?>"><?php echo $data['name']; echo " ".$data['type']; ?></option>
                                    <?php
                                        }
                                    ?>                                
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="sel3">
                                    <option selected value="0">-- Select Program --</option>
                                    <?php
                                        require('admin/config.php');
                                        $fetchCountries = "SELECT `programs`.`type`,`program_id`, `country_data`.`name` FROM `programs` JOIN `country_data` ON `programs`.`country` = `country_data`.`id` ORDER BY `name` ASC";
                                        $countries = mysqli_query($conn, $fetchCountries);
                                        while ($data = mysqli_fetch_assoc($countries)) {
                                    ?>
                                        <option value="<?php echo $data['program_id']; ?>"><?php echo $data['name']; echo " ".$data['type']; ?></option>
                                    <?php
                                        }
                                    ?>                                    
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="sel4">
                                    <option selected value="0">-- Select Program --</option>
                                    <?php
                                        require('admin/config.php');
                                        $fetchCountries = "SELECT `programs`.`type`,`program_id`, `country_data`.`name` FROM `programs` JOIN `country_data` ON `programs`.`country` = `country_data`.`id` ORDER BY `name` ASC";
                                        $countries = mysqli_query($conn, $fetchCountries);
                                        while ($data = mysqli_fetch_assoc($countries)) {
                                    ?>
                                        <option value="<?php echo $data['program_id']; ?>"><?php echo $data['name']; echo " ".$data['type']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>CURRENCY:</p></td>
                            <td id="curr1" class="text-center table_values">--</td>
                            <td id="curr2" class="text-center table_values">--</td>
                            <td id="curr3" class="text-center table_values">--</td>
                            <td id="curr4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>PERSONAL NET WORTH:</p></td>
                            <td id="net1" class="text-center table_values">--</td>
                            <td id="net2" class="text-center table_values">--</td>
                            <td id="net3" class="text-center table_values">--</td>
                            <td id="net4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>CONTRIBUTION AMOUNT:</p></td>
                            <td id="contrib1" class="text-center table_values">--</td>
                            <td id="contrib2" class="text-center table_values">--</td>
                            <td id="contrib3" class="text-center table_values">--</td>
                            <td id="contrib4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>ASSET(S):</p></td>
                            <td id="assets1" class="text-center table_values">--</td>
                            <td id="assets2" class="text-center table_values">--</td>
                            <td id="assets3" class="text-center table_values">--</td>
                            <td id="assets4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>INVESTMENT GUARANTEES:</p></td>
                            <td id="invest1" class="text-center table_values">--</td>
                            <td id="invest2" class="text-center table_values">--</td>
                            <td id="invest3" class="text-center table_values">--</td>
                            <td id="invest4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>FINANCING OPTIONS:</p></td>
                            <td id="financing1" class="text-center table_values">--</td>
                            <td id="financing2" class="text-center table_values">--</td>
                            <td id="financing3" class="text-center table_values">--</td>
                            <td id="financing4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>GOVERNMENT FEES<sup><strong>1</strong></sup>:</p></td>
                            <td id="govt1" class="text-center table_values">--</td>
                            <td id="govt2" class="text-center table_values">--</td>
                            <td id="govt3" class="text-center table_values">--</td>
                            <td id="govt4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>TIME TO RESIDENCE:</p></td>
                            <td id="ttr1" class="text-center table_values">--</td>
                            <td id="ttr2" class="text-center table_values">--</td>
                            <td id="ttr3" class="text-center table_values">--</td>
                            <td id="ttr4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>REQUIRED PHYSICAL RESIDENCE:</p></td>
                            <td id="physical1" class="text-center table_values">--</td>
                            <td id="physical2" class="text-center table_values">--</td>
                            <td id="physical3" class="text-center table_values">--</td>
                            <td id="physical4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>TIME TO CITIZENSHIP:</p></td>
                            <td id="ttc1" class="text-center table_values">--</td>
                            <td id="ttc2" class="text-center table_values">--</td>
                            <td id="ttc3" class="text-center table_values">--</td>
                            <td id="ttc4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>VISA-FREE TRAVEL:</p></td>
                            <td id="visa1" class="text-center table_values">--</td>
                            <td id="visa2" class="text-center table_values">--</td>
                            <td id="visa3" class="text-center table_values">--</td>
                            <td id="visa4" class="text-center table_values">--</td>
                        </tr>
                        <tr>
                            <td class="prog_criteria"><p>ARTON INDEX SCORE:</p></td>
                            <td id="aindex1" class="text-center table_values">--</td>
                            <td id="aindex2" class="text-center table_values">--</td>
                            <td id="aindex3" class="text-center table_values">--</td>
                            <td id="aindex4" class="text-center table_values">--</td>
                        </tr>
                    </tbody>
                </table>
                <p id="fine_print"><sup><strong>1</strong></sup>Government fees shown are estimated for a family of four (main applicant, spouse and two dependents between 12 and 17 years of age). For exact quotes based on your family configuration, please contact us.</p>
            </div>
        </div>
        </section>
        <?php include('footer.php'); ?>
        <script>
            $(document).ready(function(){
                $(document).on('change', '#sel1', function(){
                    $id = $(this).val();
                    if ($id == 0){
                        $('#img1').html('<img src="flags/placeholder-icon.svg" height="100px" width="100px">');
                        $('#curr1').html('--');
                        $('#net1').html('--');
                        $('#contrib1').html('--');
                        $('#assets1').html('--');
                        $('#invest1').html('--');
                        $('#financing1').html('--');
                        $('#govt1').html('--');
                        $('#ttr1').html('--');
                        $('#physical1').html('--');
                        $('#ttc1').html('--');
                        $('#visa1').html('--');
                        $('#aindex1').html('--');
                    }
                    else {
                        $.ajax({
                            url: "fetch.php",
                            data: "id="+$id,
                            method:"POST",
                            datatype:"JSON",
                            success: function(res) {
                                $program = JSON.parse(res);
                                console.log($program);
                                $('#img1').html('<img src="assets/uploads/'+$program.country_img+'" height="100px" width="100px">');
                                $('#curr1').html($program.currency);
                                $('#net1').html(Number($program.net_worth).toLocaleString());
                                $('#contrib1').html(Number($program.contrib_amt).toLocaleString());
                                $('#assets1').html($program.assets);
                                $('#invest1').html($program.invest_guarantee);
                                $('#financing1').html($program.financing);
                                if($program.govt_fees == 0){
                                    $program.govt_fees = "Included in professional fees";
                                }
                                else {
                                    $program.govt_fees = Number($program.govt_fees).toLocaleString();
                                }
                                $('#govt1').html($program.govt_fees);
                                $('#ttr1').html($program.tt_residence);
                                $('#physical1').html($program.physical_residence);
                                $('#ttc1').html($program.tt_citizenship);
                                $('#visa1').html($program.visa_free);
                                $('#aindex1').html($program.aindex);
                            }
                        });
                    }
                });
                $(document).on('change', '#sel2', function(){
                    $id = $(this).val();
                    if ($id == 0){
                        $('#img2').html('<img src="flags/placeholder-icon.svg" height="100px" width="100px">');
                        $('#curr2').html('--');
                        $('#net2').html('--');
                        $('#contrib2').html('--');
                        $('#assets2').html('--');
                        $('#invest2').html('--');
                        $('#financing2').html('--');
                        $('#govt2').html('--');
                        $('#ttr2').html('--');
                        $('#physical2').html('--');
                        $('#ttc2').html('--');
                        $('#visa2').html('--');
                        $('#aindex2').html('--');
                    }
                    else {
                        $.ajax({
                            url: "fetch.php",
                            data: "id="+$id,
                            method:"POST",
                            datatype:"JSON",
                            success: function(res) {
                                $program = JSON.parse(res);
                                console.log($program);
                                $('#img2').html('<img src="assets/uploads/'+$program.country_img+'" height="100px" width="100px">');
                                $('#curr2').html($program.currency);
                                $('#net2').html(Number($program.net_worth).toLocaleString());
                                $('#contrib2').html(Number($program.contrib_amt).toLocaleString());
                                $('#assets2').html($program.assets);
                                $('#invest2').html($program.invest_guarantee);
                                $('#financing2').html($program.financing);
                                if($program.govt_fees == 0){
                                    $program.govt_fees = "Included in professional fees";
                                }
                                else {
                                    $program.govt_fees = Number($program.govt_fees).toLocaleString();
                                }
                                $('#govt2').html($program.govt_fees);
                                $('#ttr2').html($program.tt_residence);
                                $('#physical2').html($program.physical_residence);
                                $('#ttc2').html($program.tt_citizenship);
                                $('#visa2').html($program.visa_free);
                                $('#aindex2').html($program.aindex);
                            }
                        });
                    }
                });
                $(document).on('change', '#sel3', function(){
                    $id = $(this).val();
                    if ($id == 0){
                        $('#img3').html('<img src="flags/placeholder-icon.svg" height="100px" width="100px">');
                        $('#curr3').html('--');
                        $('#net3').html('--');
                        $('#contrib3').html('--');
                        $('#assets3').html('--');
                        $('#invest3').html('--');
                        $('#financing3').html('--');
                        $('#govt3').html('--');
                        $('#ttr3').html('--');
                        $('#physical3').html('--');
                        $('#ttc3').html('--');
                        $('#visa3').html('--');
                        $('#aindex3').html('--');
                    }
                    else {
                        $.ajax({
                            url: "fetch.php",
                            data: "id="+$id,
                            method:"POST",
                            datatype:"JSON",
                            success: function(res) {
                                $program = JSON.parse(res);
                                console.log($program);
                                $('#img3').html('<img src="assets/uploads/'+$program.country_img+'" height="100px" width="100px">');
                                $('#curr3').html($program.currency);
                                $('#net3').html(Number($program.net_worth).toLocaleString());
                                $('#contrib3').html(Number($program.contrib_amt).toLocaleString());
                                $('#assets3').html($program.assets);
                                $('#invest3').html($program.invest_guarantee);
                                $('#financing3').html($program.financing);
                                if($program.govt_fees == 0){
                                    $program.govt_fees = "Included in professional fees";
                                }
                                else {
                                    $program.govt_fees = Number($program.govt_fees).toLocaleString();
                                }
                                $('#govt3').html($program.govt_fees);
                                $('#ttr3').html($program.tt_residence);
                                $('#physical3').html($program.physical_residence);
                                $('#ttc3').html($program.tt_citizenship);
                                $('#visa3').html($program.visa_free);
                                $('#aindex3').html($program.aindex);
                            }
                        });
                    }
                });
                $(document).on('change', '#sel4', function(){
                    $id = $(this).val();
                    if ($id == 0){
                        $('#img4').html('<img src="flags/placeholder-icon.svg" height="100px" width="100px">');
                        $('#curr4').html('--');
                        $('#net4').html('--');
                        $('#contrib4').html('--');
                        $('#assets4').html('--');
                        $('#invest4').html('--');
                        $('#financing4').html('--');
                        $('#govt4').html('--');
                        $('#ttr4').html('--');
                        $('#physical4').html('--');
                        $('#ttc4').html('--');
                        $('#visa4').html('--');
                        $('#aindex4').html('--');
                    }
                    else {
                        $.ajax({
                            url: "fetch.php",
                            data: "id="+$id,
                            method:"POST",
                            datatype:"JSON",
                            success: function(res) {
                                $program = JSON.parse(res);
                                console.log($program);
                                $('#img4').html('<img src="assets/uploads/'+$program.country_img+'" height="100px" width="100px">');
                                $('#curr4').html($program.currency);
                                $('#net4').html(Number($program.net_worth).toLocaleString());
                                $('#contrib4').html(Number($program.contrib_amt).toLocaleString());
                                $('#assets4').html($program.assets);
                                $('#invest4').html($program.invest_guarantee);
                                $('#financing4').html($program.financing);
                                if($program.govt_fees == 0){
                                    $program.govt_fees = "Included in professional fees";
                                }
                                else {
                                    $program.govt_fees = Number($program.govt_fees).toLocaleString();
                                }
                                $('#govt4').html($program.govt_fees);
                                $('#ttr4').html($program.tt_residence);
                                $('#physical4').html($program.physical_residence);
                                $('#ttc4').html($program.tt_citizenship);
                                $('#visa4').html($program.visa_free);
                                $('#aindex4').html($program.aindex);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>