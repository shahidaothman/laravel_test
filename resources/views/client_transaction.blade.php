<!doctype html>
<html lang="en">



<head>


    <meta charset="utf-8" />
    <title>Dashboard | Morvin - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->

    <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/shahida.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/client.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">


        <!-- ========== Left Sidebar Start ========== -->

        <!-- Left Sidebar End -->
        @include("layout.sidebar")

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title">
                                    <h1>Transfer/Pay</h1>
                                    <!-- <h5>Hi Nur Shahida, welcome back!</h5> -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- <div class="float-end d-none d-sm-block">
                                    <div class="me-3 align-self-center">
                                        <div class="avatar-sm rounded bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="ti-settings text-white font-size-18"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="dropdown d-inline-block float-end ">
                                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="d-none d-sm-block">
                                            <div class="me-3 align-self-center">
                                                <div class="avatar-sm rounded bg-primary align-self-center">
                                                    <span class="avatar-title">
                                                        <i class="ti-settings text-white font-size-18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                    @include("layout.mini_menu")
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="container-fluid">

                    <div class="page-content-wrapper">


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        

                                        <form class="needs-validation was-validated" novalidate="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label"> Account No</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="65122345556643" required="" readonly>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Receiver Account No</label>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required="">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="mb-6">
                                                        <label for="validationCustom04" class="form-label">Amount</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text" class="form-control parsley-error" required="" placeholder="Enter only digits" data-parsley-id="15" aria-describedby="parsley-id-15">
                                                            <ul class="parsley-errors-list filled" id="parsley-id-15" aria-hidden="false">
                                                                <li class="parsley-type">This value should be digits.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-6">
                                                        <label for="validationCustom05" class="form-label">Remarks</label>
                                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Remarks" required="">
                                                        <div class="invalid-feedback">
                                                            Please provide a remarks.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".staticBackdrop">Proceed</button>
                                            </div>
                                            <td>
                                                <!-- Small modal -->


                                                <!-- Modal -->
                                                <div class="modal fade staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Receiver Details</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Receiver Name : Shahida Othman</p>
                                                                <p>Account No : 1256756342313</p>
                                                                <p>Amount : RM 300.00</p>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-dismiss="modal" id="sa-success">Confirm</button>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Morvin.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                            </div>
                        </div>
                    </div>
                </div>
            </footer> -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweet-alerts.init.js"></script>


    <script src="assets/js/app.js"></script>

</body>

</html>