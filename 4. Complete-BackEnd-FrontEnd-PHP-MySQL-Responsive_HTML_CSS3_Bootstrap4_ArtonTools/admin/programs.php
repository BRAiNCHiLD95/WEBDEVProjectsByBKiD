<?php 
    session_start();
    if (isset($_SESSION['user_name']) && $_SESSION['user_name'] != '') {
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ArtonPanel | View Programs</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/admin.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="../assets/js/natural.js"></script>
        <style>
            #prod_table_wrapper *{
                color: #CC9966 !important;
            }
            thead, tbody td {
                text-align: center;
                background: #000000 !important;
                border-color: #CC9966 !important;
                color: #CC9966 !important;
            }
            #del_country, #edit_country {
                color: #000000 !important;
            }
        </style>
    </head>
    <body>
        <?php require('common.php'); ?>
        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Programs</a>
                    </li>
                    <li class="breadcrumb-item active">View Programs</li>
                </ol>
                <!-- DataTable -->
                <div class="table-responsive">
                    <table id="country_table" class="display">
                        <thead>
                            <tr>
                                <th colspan="2">Country</th>
                                <th>Arton Index</th>
                                <th>Type</th>
                                <th>Currency</th>
                                <th>Personal Net Worth</th>
                                <th>Contribution Amount</th>
                                <th>Assets</th>
                                <th>Investment Guarantee</th>
                                <th>Financing Options</th>
                                <th>Government Fees</th>
                                <th>Time To Residence</th>
                                <th>Interview Required</th>
                                <th>Required Physical Residence</th>
                                <th>Time To Citizenship</th>
                                <th>Visa-Free Travel</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require_once('config.php');
                            $fetch = "SELECT `programs`.*, `country_data`.`name`,`aindex`,`country_img` FROM `programs` JOIN `country_data` ON `country_data`.`id` = `programs`.`country` ORDER BY `name` ASC";
                            $run = mysqli_query($conn, $fetch);
                            while ($res = mysqli_fetch_assoc($run)) { ?>
                                <tr>
                                    <td> <img src="../assets/uploads/<?php echo $res['country_img']; ?>" height="50px" width="50px"></td>
                                    <td> <?php echo $res['name']; ?> </td>
                                    <td> <?php echo $res['aindex']; ?> </td>
                                    <td> <?php echo $res['type']; ?> </td>
                                    <td> <?php echo $res['currency']; ?> </td>
                                    <td> <?php echo $res['net_worth']; ?> </td>
                                    <td> <?php echo $res['contrib_amt']; ?> </td>
                                    <td> <?php echo $res['assets']; ?> </td>
                                    <td> <?php echo $res['invest_guarantee']; ?> </td>
                                    <td> <?php echo $res['financing']; ?> </td>
                                    <td> <?php echo $res['govt_fees']; ?> </td>
                                    <td> <?php echo $res['tt_residence']; ?> </td>
                                    <td> <?php echo $res['interview']; ?> </td>
                                    <td> <?php echo $res['physical_residence']; ?> </td>
                                    <td> <?php echo $res['tt_citizenship']; ?> </td>
                                    <td> <?php echo $res['visa_free']; ?> </td>
                                </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <a class="nav-link text-right" href="add_program.php">Add Another Program</a>
                <?php require('footer.php'); ?>
            </div>
        </div>
        </div>
        <script>
            $(document).ready( function () {
                $('#country_table').DataTable({
                    columnDefs: [
                    { type: 'natural', targets: [2,4,5,9,14] }
                    ]
                });
                $('#del_prod').click(function (){
                    $(this).parentsUntil('tbody').fadeOut();
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