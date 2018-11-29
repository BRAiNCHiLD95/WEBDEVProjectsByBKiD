<?php 
    session_start();
    if (isset($_SESSION['user_name']) && $_SESSION['user_name'] != '') {
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ArtonPanel | View Countries</title>
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
                        <a href="index.php">Countries</a>
                    </li>
                    <li class="breadcrumb-item active">View Countries</li>
                </ol>
                <!-- DataTable -->
                <div class="table-responsive">
                    <table id="country_table" class="display">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Cost</th>
                                <th>Speed</th>
                                <th>Mobility</th>
                                <th>Quality of Life</th>
                                <th>Simplicity</th>
                                <th>Arton Index Score</th>
                                <th>Flag</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require_once('config.php');
                            $fetch = "SELECT * FROM `country_data`";
                            $run = mysqli_query($conn, $fetch);
                            $srno = 1;
                            while ($res = mysqli_fetch_assoc($run)) { ?>
                                <tr>
                                    <td> <?php echo $srno++; ?></td>
                                    <td> <?php echo $res['name']; ?> </td>
                                    <td> <?php echo $res['cost']; ?> </td>
                                    <td> <?php echo $res['speed']; ?> </td>
                                    <td> <?php echo $res['mobility']; ?> </td>
                                    <td> <?php echo $res['life']; ?> </td>
                                    <td> <?php echo $res['simplicity']; ?> </td>
                                    <td> <?php echo $res['aindex']; ?> </td>
                                    <td><img src="../assets/uploads/<?php echo $res['country_img']; ?>" height="100px" width="100px"></td>
                                    <td><a class="btn btn-warning col" data-toggle="modal" data-target="#country_edit" id="edit_country" onclick="edit_country(<?php echo $res['id'];?>)">Edit</a><a class="btn btn-danger col mt-2" id="del_country" href="delete_country.php?file=<?php echo $res['id'];?>">Delete</a></td>
                                </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <a class="nav-link text-right" href="add_country.php">Add Another Country</a>
                <?php require('footer.php'); ?>
            </div>
        </div>
        </div>
        <div class="modal fade" id="country_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Country Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
              <form action="update_country.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="c_id">
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
                            <label class="d-flex align-items-center" for="country_img">Upload Image:</label>
                            <div class="custom-file font-weight-normal">
                                <input type="file" name="country_img" required class="custom-file-input btn" id="country_image">    
                                <label class="custom-file-label" for="country_image">Choose file</label>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
			  </form>
			</div>
		  </div>
		</div>
        <script>
            $(document).ready( function () {
                $('#country_table').DataTable({
                    columnDefs: [
                    { type: 'natural', targets: [2,3,4,5,6,7] }
                    ]
                });
                $('#del_prod').click(function (){
                    $(this).parentsUntil('tbody').fadeOut();
                });
            });
            function edit_country(country){
                $.ajax({
                    url:"edit_country.php",
                    method:"post",
                    data:"id="+country,
                    datatype:"json",
                    success:function(response){
                        var res=JSON.parse(response);
                        console.log(res);
                        $("input[name='name']").val(res.name);
                        $("input[name='cost']").val(res.cost);
                        $("input[name='speed']").val(res.speed);
                        $("input[name='mobility']").val(res.mobility);
                        $("input[name='life']").val(res.life);
                        $("input[name='simplicity']").val(res.simplicity);
                        $("input[name='aindex']").val(res.aindex);
                        $("input[name='c_id']").val(res.id);
                        $("label[for='country_image']").text(res.country_img);
                    }
                });
            }
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