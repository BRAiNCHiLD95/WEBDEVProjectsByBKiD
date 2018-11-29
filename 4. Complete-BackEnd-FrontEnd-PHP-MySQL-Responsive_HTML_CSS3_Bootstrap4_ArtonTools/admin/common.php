<!-- Navbar -->
<nav class="navbar navbar-expand navbar-dark static-top border-bottom border-gold">
    <a class="navbar-brand" href="index.php"><img id="logo" src="../assets/images/arton.png" height="35px" width="35px"> ArtonPanel</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" style="color:#CC9966;" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle fa-fw"></i>
                <?php if(isset($_SESSION['user_name']) && $_SESSION['user_name'] !== '' ) { ?>
                <span><?php echo $_SESSION['user_name']; }?></span>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right text-dark py-0" aria-labelledby="userDropdown">
                <a style="background: #000000; color: #CC9966;" class="dropdown-item py-2" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>
</nav>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to end your current session?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No, Keep Me Logged In</button>
                    <a class="btn btn-primary" href="logout.php">Yes, Logout.</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav border-right border-gold">
        <li class="nav-item active">
            <a class="nav-link border-bottom border-gold" href="index.php">
            <i class="fa fa-tachometer mr-2"></i>
            <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link border-bottom border-gold" href="countries.php">
            <i class="fa fa-globe mr-2"></i>
            <span>Countries</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link border-bottom border-gold" href="add_country.php">
            <i class="fa fa-plus mr-2"></i>
            <span>Add Country</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link border-bottom border-gold" href="programs.php">
            <i class="fa fa fa-graduation-cap mr-2"></i>
            <span>Programs</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link border-bottom border-gold" href="add_program.php">
            <i class="fa fa-plus mr-2"></i>
            <span>Add Program</span>
            </a>
        </li>
    </ul>