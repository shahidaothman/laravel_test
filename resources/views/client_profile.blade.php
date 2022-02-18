<!doctype html>
<html lang="en">



<head>


    <meta charset="utf-8" />
    <title>Bank System</title>
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
                                    <h1>Profile</h1>
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

                                        <!-- <h4 class="header-title">Textual inputs</h4> -->

                                        <div class="row mb-3">
                                            <span class="col-sm-2">ID No</span>
                                            <div class="col-sm-10">
                                                <h4>950312105241</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">Name</span>
                                            <div class="col-sm-10">
                                                <h4>Nur Shahida Othman</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">Account Bank No</span>
                                            <div class="col-sm-10">
                                                <h4>951203547026</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">Account Balance</span>
                                            <div class="col-sm-10">
                                                <h4>RM 10,000.00</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">Login ID</span>
                                            <div class="col-sm-10">
                                                <h4>12845</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">Email</span>
                                            <div class="col-sm-10">
                                                <h4>shahida@gmail.com</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">Address</span>
                                            <div class="col-sm-10">
                                                <h4>No 208 Jln 8 Taman Pantai Satu</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">Postcode</span>
                                            <div class="col-sm-10">
                                                <h4>42000</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">State</span>
                                            <div class="col-sm-10">
                                                <h4>Selangor</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <span class="col-sm-2">Country</span>
                                            <div class="col-sm-10">
                                                <h4>Malaysia</h4>
                                            </div>
                                        </div>



                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".staticBackdrop">Edit</button>

                                        <div class="modal fade staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="shahida@gmail.com" id="example-text-input">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Address 1</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="No 208 Jln 8" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Address 2</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Taman Pantai Satu" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Postcode</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="42000" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">State</label>
                                                <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                            <option selected="">Select State</option>
                                                            <option value="Johor">Johor</option>
                                                            <option value="Kedah">Kedah</option>
                                                            <option value="Kelantan">Kelantan</option>
                                                            <option value="Melaka">Melaka</option>
                                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                            <option value="Pahang">Pahang</option>
                                                            <option value="Penang">Penang</option>
                                                            <option value="Perak">Perak</option>
                                                            <option value="Perlis">Perlis</option>
                                                            <option value="Sabah">Sabah</option>
                                                            <option value="Sarawak">Sarawak</option>
                                                            <option value="Selangor">Selangor</option>
                                                            <option value="Terengganu">Terengganu</option>
                                                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                                                            <option value="Labuan">Labuan</option>
                                                            <option value="Putrajaya">Putrajaya</option>
                                                        </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Country</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Malaysia" id="example-text-input">
                                                </div>
                                            </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-position" data-bs-dismiss="modal">Save</button>

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


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