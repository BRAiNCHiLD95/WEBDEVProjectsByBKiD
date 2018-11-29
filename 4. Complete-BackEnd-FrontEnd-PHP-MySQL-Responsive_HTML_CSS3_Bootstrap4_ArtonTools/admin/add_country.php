<?php
    session_start();
    require_once ('config.php');
    if (isset($_POST['submit'])) {
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
        $checkDB = "SELECT * FROM `country_data` WHERE `name` = '$name'";
        $fetch = mysqli_query($conn, $checkDB);
        if (mysqli_num_rows($fetch) == 0) {
            $insert = "INSERT INTO country_data (`name`,`cost`,`speed`,`mobility`,`life`,`simplicity`,`aindex`,`country_img`) VALUES ('$name','$cost','$speed','$mobility','$life','$simplicity','$aindex','$country_img')";
            $addCountry = mysqli_query($conn, $insert);
            if ($addCountry == 1) {
                move_uploaded_file($source,$destination);
                echo
                '<script language="javascript">
                alert("Country Added Succesfully!");
                window.location.href="countries.php"
                </script>';
            }
            else {
                echo
                '<script language="javascript">
                alert("Database Error! Contact Us for help!");
                window.location.href="add_country.php"
                </script>';
            }
        }
        else {
            echo
            '<script language="javascript">
            alert("Country Already Exists in Database!");
            window.location.href="countries.php"
            </script>';
        }
    }
    else if (isset($_SESSION['user_name']) && $_SESSION['user_name'] != '') {
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ArtonPanel | Add Data</title>
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
                        <a href="index.php">Countries</a>
                    </li>
                    <li class="breadcrumb-item active">Add Country</li>
                </ol>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-11 my-5 card shadow font-weight-bold" style="background:#CC9966;">
                        <form action="add_country.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row my-3">
                                <div class="col-md-4">
                                    <label for="name" class="ml-1"> Country Name:</label>
                                    <input class="form-control" type="text" name="name" required placeholder="Country Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="cost" class="ml-1"> Cost:</label>
                                    <input class="form-control" type="number" min="0" max="30" name="cost" required placeholder="Between 0-30">
                                </div>
                                <div class="col-md-4">
                                    <label for="speed" class="ml-1"> Speed:</label>
                                    <input class="form-control" type="number" min="0" max="20" name="speed" required placeholder="Between 0-20">
                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col-md-4">
                                    <label for="mobility" class="ml-1"> Global Mobility:</label>
                                    <input class="form-control" type="text" name="mobility" required placeholder="Between 0-20">
                                </div>
                                <div class="col-md-4">
                                    <label for="life" class="ml-1"> Quality Of Life:</label>
                                    <input class="form-control" type="number" min="0" max="10" name="life" required placeholder="Between 0-10">
                                </div>
                                <div class="col-md-4">
                                    <label for="simplicity" class="ml-1"> Simplicity:</label>
                                    <input class="form-control" type="number" min="0" max="20" name="simplicity" required placeholder="Between 0-20">
                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col-md-4">
                                    <label for="aindex" class="ml-1"> Arton Index Score</label>
                                    <input class="form-control" type="number" name="aindex" required placeholder="Between 0-100">
                                </div>
                                <div class="col-md-8">
                                    <label class="d-flex align-items-center" for="country_image">Upload Image:</label>
                                    <div class="custom-file font-weight-normal">
                                        <input type="file" name="country_img" required class="custom-file-input btn" id="country_image">    
                                        <label class="custom-file-label" for="country_image">Choose file</label>    
                                    </div>
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
                $('#country_image').on('change',function(){
                    $fileName = $(this).val().replace("C:\\fakepath\\", "");
                    $(this).next('.custom-file-label').html($fileName);
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