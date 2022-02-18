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
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-autoFill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/shahida.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="light" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>






                </div>



                <div class="d-flex">



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="d-none d-xl-inline-block ms-1">Admin</span>

                        </button>

                    </div>

                    <div class="dropdown  dropdown-menu-end">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-cog-outline font-size-20"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ url('/') }}"><i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>


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
                                    <h1 class="white">Client Overview</h1>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target=".staticBackdrop">Add Client</a>
                                </div>




                                <div class="modal fade staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Add Client</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label black">Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="" id="example-text-input">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label black">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control parsley-error" required="" parsley-type="email" placeholder="Enter a valid e-mail" data-parsley-id="11" aria-describedby="parsley-id-11">
                                                    </div>
                                                </div>


                                                <div class="row mb-3">
                                                    <label for="example-text-input " class="col-sm-2 col-form-label black">Address 1</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="" id="example-text-input">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input " class="col-sm-2 col-form-label black">Address 2</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control black" type="text" placeholder=" " id="example-text-input">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input " class="col-sm-2 col-form-label black">Postcode</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="" id="example-text-input">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input " class="col-sm-2 col-form-label black">State</label>
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
                                                    <label for="example-text-input " class="col-sm-2 col-form-label black">Country</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="" id="example-text-input">
                                                    </div>
                                                </div>




                                                <div class="row mb-3">
                                                    <label for="example-text-input " class="col-sm-2 col-form-label black">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" id="pass2" class="form-control parsley-success" required="" placeholder="Password" data-parsley-id="7">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input " class="col-sm-2 col-form-label black">Confirm Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control parsley-error" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password" data-parsley-id="9" aria-describedby="parsley-id-9">
                                                        <ul class="parsley-errors-list filled" id="parsley-id-9" aria-hidden="false">
                                                            <li class="parsley-required">This password not match.</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning waves-effect" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success waves-effect waves-light" id="sa-position" data-bs-dismiss="modal">Add</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                        <h5 class=" mb-4 ">CLIENT DETAILS</h5>




                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>ID</th>
                                                        <th>NAME</th>
                                                        <th>EMAIL</th>
                                                        <th>ACCOUNT NO</th>
                                                        <th>ADDRESS 1</th>
                                                        <th>ADDRESS 2</th>
                                                        <th>POSTCODE</th>
                                                        <th>STATE</th>
                                                        <th>COUNTRY</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr data-id="1" style="cursor: pointer;">
                                                        <td data-field="id" style="width: 80px">2</td>
                                                        <td data-field="name" style="width: 394.922px;">
                                                            <h5 class="fs_15">Shahida Othman</h5>
                                                        </td>
                                                        <td data-field="email" style="width: 160.156px;">
                                                            <h5 class="fs_15">shahida@gmail.com</h5>
                                                        </td>
                                                        <td data-field="account_no" style="width: 185.078px;">
                                                            <h5 class="fs_15">256975413625</h5>
                                                        </td>
                                                        <td data-field="address1" style="width: 185.078px;">
                                                            <h5 class="fs_15">259 Jln 4 Simpang 4</h5>
                                                        </td>
                                                        <td data-field="address2" style="width: 185.078px;">
                                                            <h5 class="fs_15">Taman Pantai Satu</h5>
                                                        </td>
                                                        <td data-field="postcode" style="width: 185.078px;">
                                                            <h5 class="fs_15">46200</h5>
                                                        </td>
                                                        <td data-field="state" style="width: 185.078px;">
                                                            <h5 class="fs_15">Selangor</h5>
                                                        </td>
                                                        <td data-field="country" style="width: 185.078px;">
                                                            <h5 class="fs_15">Malaysia</h5>
                                                        </td>
                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-warning btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt" title="Edit"></i>
                                                            </a>
                                                            <a class="btn btn-outline-danger btn-sm " title="Delete">
                                                                <i class="fas fa-trash-alt" title="Delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                    </div>


                </div> <!-- container-fluid -->


            </div>
            <!-- End Page-content -->




        </div>
        <!-- end page content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>


    <script src="assets/js/app.js"></script>

    <!-- Table Editable plugin -->
    <script src="assets/libs/table-edits/build/table-edits.min.js"></script>

    <script src="assets/js/pages/table-editable.init.js"></script>

</body>

</html>