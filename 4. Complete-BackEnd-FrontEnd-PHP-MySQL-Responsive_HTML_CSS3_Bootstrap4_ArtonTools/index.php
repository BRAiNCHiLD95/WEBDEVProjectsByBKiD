<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC | HomePage</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style>
        body {
            height: 100% !important;
            background-color: #CC9966;
        }
        footer {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
        <div class="landing text-center pt-5">
            <div class="landing-content">
                <div class="admin-data">
                    <img class="my-5 pt-2" src="assets/images/arton.png">
                </div>
                <h1>ARTON <span class="font-weight-bold">TOOLS</span></h1>
                <h4 class="font-italic">Industry benchmark of Global Citizen Programs.</h4>
                <ul class="list-unstyled list-inline my-5">
                    <li class="list-inline-item">
                        <a href="program_index.php" data-toggle="tooltip" data-placement="bottom" title="Program Index"><img src="assets/images/program-index.svg" height="50px" width="50px"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="program_check.php" data-toggle="tooltip" data-placement="bottom" title="Program Check"><img src="assets/images/program-check.svg" height="50px" width="50px"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="program_map.php" data-toggle="tooltip" data-placement="bottom" title="Program Map"><img src="assets/images/program-map.svg" height="50px" width="50px"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="program_match.php" data-toggle="tooltip" data-placement="bottom" title="Program Match"><img src="assets/images/program-match.svg" height="50px" width="50px"></a>
                    </li>
                </ul>
                <h5 class="sel_tool">Select one of our tools.</h5>
            </div>
        </div>

    </section>
    <?php include('footer.php'); ?>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
        });

    </script>
</body>
</html>