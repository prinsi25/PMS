<!DOCTYPE html>
<html lang="en">


<head>
    <title>Pharmacy Management</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
   <?php include("navigation.php");?>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <?php include("header.php");?>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <center><h5 class="m-b-10">ADD/UPDATE/DELETE/EDIT Medicine</h5></center>
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-square btn-dark">ADD Medicine</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                

                                <!-- [ stiped-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>NO.</th>
                                                            <th>Medicine</th>
                                                            <th>Category</th>
                                                            <th>Company</th>
                                                            <th>Batch</th>
                                                            <th>Qty</th>
                                                            <th>Purchase</th>
                                                            <th>Sale</th>
                                                            <th>Expiry</th>
                                                            <th>Action</th>
                                                            <th>EDIT</th>
                                                            <th>UPDATE</th>
                                                            <th>DELETE</th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th><button type="button" class="btn btn-dark"  data-toggle="tooltip">EDIT</button></th>
                                                            <th><button type="button" class="btn btn-dark"  data-toggle="tooltip">UPDATE</button></th>
                                                            <th><button type="button" class="btn btn-dark"  data-toggle="tooltip">DELETE</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ stiped-table ] end -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>

<!-- Mirrored from lite.codedthemes.com/datta-able/bootstrap/tbl_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jul 2025 04:19:48 GMT -->
</html>
