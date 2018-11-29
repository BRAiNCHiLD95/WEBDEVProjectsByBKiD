<?php
    session_start();
    require_once ('config.php');
    if (isset($_POST['submit'])) {
        $country = $_POST['country'];
        $type = $_POST['type'];
        $currency = $_POST['currency'];
        $net_worth = $_POST['net_worth'];
        $contrib_amt = $_POST['contrib_amt'];
        $assets = $_POST['assets'];
        $invest_guarantee = $_POST['invest_guarantee'];
        $financing = $_POST['financing'];
        $govt_fees = $_POST['govt_fees'];
        $tt_residence = $_POST['tt_residence'];
        $interview = $_POST['interview'];
        $physical_residence = $_POST['physical_residence'];
        $tt_citizenship = $_POST['tt_citizenship'];
        $visa_free = $_POST['visa_free'];
        $checkDB = "SELECT * FROM `programs` WHERE `country` = '$country' && `type` = '$type'";
        $fetch = mysqli_query($conn, $checkDB);
        if (mysqli_num_rows($fetch) == 0) {
            $insert = "INSERT INTO `programs` (`country`, `type`, `currency`, `net_worth`, `contrib_amt`, `assets`, `invest_guarantee`, `financing`, `govt_fees`, `tt_residence`, `interview`, `physical_residence`, `tt_citizenship`, `visa_free`) VALUES ('$country', '$type', '$currency', '$net_worth', '$contrib_amt', '$assets', '$invest_guarantee', '$financing', '$govt_fees', '$tt_residence', '$interview', '$physical_residence', '$tt_citizenship', '$visa_free')";
            $addProgram = mysqli_query($conn, $insert);
            if ($addProgram == 1) {
                echo 
                '<script language="javascript">
                alert("Program Added Succesfully!");
                window.location.href="programs.php"
                </script>';
            }
            else {
                echo
                '<script language="javascript">
                alert("Database Error! Contact Us for help!");
                window.location.href="add_program.php"
                </script>';
            }
        }
        else {
            echo
            '<script language="javascript">
            alert("Program Already Exists in Database!");
            window.location.href="program.php"
            </script>';
        }
    }
    
    else if (isset($_GET['id'])) {
        require_once('config.php');
        $id=$_GET['id'];
        $select="SELECT `aindex` FROM `country_data` where `id`='$id'";
        $query=mysqli_query($conn,$select);
        $res=mysqli_fetch_assoc($query);
        echo json_encode($res);       
    }

    else if (isset($_SESSION['user_name']) && $_SESSION['user_name'] != '') {
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ArtonPanel | Add Program</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/admin.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require('common.php'); ?>
        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Progams</a>
                    </li>
                    <li class="breadcrumb-item active">Add Program</li>
                </ol>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-11 my-5 card shadow font-weight-bold" style="background:#CC9966;">
                        <form action="add_program.php" method="POST">
                            <div class="form-row my-3">
                                <div class="col-md-4">
                                    <label for="country" class="ml-1"> Country Name:</label>
                                    <select id="country_name" class="form-control" name="country" required>
                                        <option selected disabled hidden>Select a Country</option>
                                        <?php
                                            $fetchCountries = "SELECT `id`,`name`,`aindex` FROM `country_data` ORDER BY `name` ASC";
                                            $countries = mysqli_query($conn, $fetchCountries);
                                            while ($data = mysqli_fetch_assoc($countries)) {
                                        ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="aindex" class="ml-1"> Arton Index:</label>
                                    <input class="form-control" id="aindex" readonly placeholder="Select country first">
                                </div>
                                <div class="col-md-4">
                                    <label for="type" class="ml-1"> Program Type:</label>
                                    <select class="form-control" name="type" required>
                                        <option selected disabled hidden>Select Program Type</option>
                                        <option value=" ">Normal</option>
                                        <option value="Fast Track">Fast Track</option>
                                        <option value="Donation">Donation</option>
                                        <option value="Real Estate">Real Estate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col-md-4">
                                    <label for="currency" class="ml-1"> Currency:</label>
                                    <input class="form-control" type="text" name="currency" required placeholder="Currency (EUR, USD, CAD)">
                                </div>
                                <div class="col-md-4">
                                    <label for="net_worth" class="ml-1"> Personal Net Worth:</label>
                                    <input class="form-control" type="text" name="net_worth" required placeholder="Personal Net Worth">
                                </div>
                                <div class="col-md-4">
                                    <label for="contrib_amt" class="ml-1"> Contribution Amount:</label>
                                    <input class="form-control" type="text" name="contrib_amt" required placeholder="Contribution Amount">
                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col-md-4">
                                    <label for="assets" class="ml-1"> Assets:</label>
                                    <input class="form-control" type="text" name="assets" required placeholder="Assets">
                                </div>
                                <div class="col-md-4">
                                    <label for="invest_guarantee" class="ml-1"> Investment Guarantee:</label>
                                    <input class="form-control" type="text" name="invest_guarantee" required placeholder="Investment Guarantee">
                                </div>
                                <div class="col-md-4">
                                    <label for="financing" class="ml-1"> Financing Options:</label>
                                    <input class="form-control" type="text" name="financing" required placeholder="Financing Options">
                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col-md-4">
                                    <label for="govt_fees" class="ml-1"> Government Fees:</label>
                                    <input class="form-control" type="text" name="govt_fees" required placeholder="Government Fees">
                                </div>
                                <div class="col-md-4">
                                    <label for="tt_residence" class="ml-1"> Time To Residence:</label>
                                    <input class="form-control" type="text" name="tt_residence" required placeholder="Time To Residence">
                                </div>
                                <div class="col-md-4">
                                    <label for="interview" class="ml-1"> Interview Required:</label>
                                    <input class="form-control" type="text" name="interview" required placeholder="Interview Required">
                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col-md-4">
                                    <label for="physical_residence" class="ml-1"> Required Physical Residence:</label>
                                    <input class="form-control" type="text" name="physical_residence" required placeholder="Required Physical Residence">
                                </div>
                                <div class="col-md-4">
                                    <label for="tt_citizenship" class="ml-1"> Time To Citizenship:</label>
                                    <input class="form-control" type="text" name="tt_citizenship" required placeholder="Time To Citizenship">
                                </div>
                                <div class="col-md-4">
                                    <label for="visa_free" class="ml-1"> Visa-Free Travel </label>
                                    <input class="form-control" type="text" name="visa_free" required placeholder="Visa-Free Travel">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 my-3 mx-auto">
                                    <button class="btn btn-success col-md-5 mx-1" type="submit" name="submit">ADD</button>
                                    <button class="btn btn-danger col-md-5 mx-1 mt-2 mt-md-0" type="reset">CLEAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php require('footer.php'); ?>
            </div>
        </div>
        <!-- Closing wrapper from common -->
        </div>
        <script>
            $(document).ready(function() {
                $(document).on('change', '#country_name', function(){
                    $id = $(this).find(":selected").val();
                    $.ajax({
                        url : 'add_program.php?id='+$id,
                        datatype: "JSON",
                        success: function(response) {
                            $aindex = JSON.parse(response);
                            $('#aindex').val($aindex.aindex);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
<?php }
    else {
        echo
        '<script language="javascript">
        alert("Please Login to Access AdminPanel");
        window.location.href="login.php"
        </script>';
    }
?>