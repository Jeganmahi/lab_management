
<?php
require 'config.php';
include("session.php");
$query = "SELECT * FROM details WHERE id='$s'";
$query_run = mysqli_query($db, $query); // Execute the query
$student = mysqli_fetch_array($query_run);
     $name = $student['name'];
    ?>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Include Alertify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/dist/css/alertify.min.css">

<!-- Include Alertify JS -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/dist/alertify.min.js"></script>


    <title>LAB</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="main">
                        <!-- Logo icon -->
     
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/srms.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
      
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">

                                <a class="dropdown-item" href="Logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
			<?php include("Aside2.php"); ?>
            <div class="modal fade" id="mod1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Complaint information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="cform">
                                    <div class="modal-body">

                                        <div id="errorMessage" class="alert alert-warning d-none"></div>

                                        <div class="mb-3">
                                            <label for=""> Lab incharge name:</label>
                                            <input type="text"  id="name"name="name" class="form-control" disabled/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">ID:</label>
                                            <input type="text"  id="id" name="id" class="form-control" disabled/>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="">Lab name: </label>
                                            <input type="text"  id="lab"name="lab" class="form-control" disabled/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Type:</label>
                                            <input type="text" name="type" id="type" class="form-control" disabled/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Commplaint:</label>
                                            <textarea name="complaint" id="complaint" class="form-control" disabled></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Date *</label>
                                            <input type="Date"  id="date" name="date" class="form-control" disabled/>
                                        </div>                       
                        

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">COMPLAINT LIST</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><b>S.No</b></th>
								<th><b>Date</b></th>
								<th><b>Name</b></th>
                                <th><b>Type</b></th>
                                <th><b>Actions</b></th>
                                <th><b>Full Info</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
    $query = "SELECT * FROM complaint";
    $query_run = mysqli_query($db, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $sss = 1;
        foreach ($query_run as $student) {
            $actionsValue = $student['action'];
            $buttonText = ($actionsValue == 0) ? 'Pending' : 'Action taken';
            $buttonClass = ($actionsValue == 0) ? 'btn-warning' : 'btn-success';
            ?>
            <tr>
                <td><?= $sss ?></td>
                <td><?= $student['date'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['type'] ?></td>
                <td align="center">
                    <button type="button" value="<?= $student['uid']; ?>" class="btn btn-sm <?= $buttonClass ?>" <?= ($actionsValue == 0) ? 'disabled' : '' ?>><?= $buttonText ?></button>
                    <?php if ($actionsValue == 0) { ?>
                    <button type="submit" value="<?= $student['uid']; ?>" class="takeaction btn btn-danger">Take action</button>
                <?php } ?>
                </td>
                
                <td align="center">
    <button class="cform1 btn btn-primary" data-uid="<?= $student['uid']; ?>">Full info</button>
</td>

                               
            </tr>
            <?php
            $sss = $sss + 1;
        }
    }
    ?>
                                                   
                        </tbody>
                    </table>

                </div>
				</div>
            </div>
        </div>
    </div>	
                    
                    
                    </div>
                

					
	
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).on('click', '.takeaction', function (e) {
            e.preventDefault();

            if(confirm('Are you sure?'))
            {
                var student_id3 = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "complaintAction.php",
                    data: {
                        'take_action': true,
                        'student_id2': student_id3
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            
                            swal.fire({
                    icon: 'success',
                    title: 'Done',
                    text: 'Action taken'
                });
                            $('#myTable1').load(location.href + " #myTable1", { "_": $.now() });


                        }
                    }
                });
            }
        });
       $(document).on('submit', '#cform', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append("save_complaint", true);
    
    $.ajax({
        type: "POST",
        url: "complaintAction.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            var res = jQuery.parseJSON(response);
            
            // Use console.log to print the response
            console.log(res);
            
            if (res.status == 422) {
                // Show the error message if the status is 422
                $('#errorMessage').removeClass('d-none');
                $('#errorMessage').text(res.message);
            } else if (res.status == 200) {
                // Show a success message if the status is 200
                $('#errorMessage').addClass('d-none');
                
                // Use SweetAlert to show the success message
                swal.fire({
                    icon: 'success',
                    title: 'Done',
                    text: 'Complaint Registered'
                });

                // Clear the form with id 'cform'
                $('#cform')[0].reset();
                $('#mod').modal('hide');
                // Refresh the table with updated data
                $('#myTable1').load(location.href + " #myTable1 > *");
            } else if (res.status == 500) {
                // Show an alert message if the status is 500
                alert(res.message);
            }
        }
    });
});


    </script>
    <script>
   $(document).ready(function() {
    $('.cform1').click(function() {
        var student_id3 = $(this).data('uid'); // Get the uid from the data-uid attribute
        
        // Fetch data using AJAX
        $.ajax({
            url: 'complaintAction.php',
            method: 'GET',
            data: { student_id: student_id3 },
            success: function(data) {
                var complaintData = JSON.parse(data);
                // Populate modal fields with data
                $('#name').val(complaintData.name);
                $('#id').val(complaintData.id);
                $('#lab').val(complaintData.curlab);
                $('#type').val(complaintData.type);
                $('#complaint').val(complaintData.complaint);
                $('#date').val(complaintData.date);

                // Open the modal
                $('#mod1').modal('show');
            }
        });
    });
});
</script>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
    <?php include "./footer.html" ?>

</body>

</html>