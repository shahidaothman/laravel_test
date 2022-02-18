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
                                    <h1>Overview</h1>
                                    <h5>Hi Nur Shahida, welcome back!</h5>
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
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <div class="col-xl-6">
                                <div class="card h_2">
                                    <div class="card-body">
                                        <h4 class=" mb-4 ">YOUR BALANCE</h4>
                                        <div class=" mx-auto mb-4 mt-3 ">
                                            <h1>RM 10,000.00</h1>
                                        </div>
                                        <h5 class="text-muted">Saving A/C : <a style="font-weight: 400;letter-spacing: 2px;"> xxxxxxxxxxx1234</a> </h5>
                                    </div>
                                </div>
                                <div class="row h_1">
                                    <div class="col-xl-6 col-md-6">
                                        <div>
                                            <div class="bubble">
                                                <h4 class="white" style="padding:2em"><i class="dripicons-home"></i> TRANSACTION</h4>
                                            </div>
                                            <div class="pointer"></div>
                                        </div>

                                        <div>
                                            <div class="bubble blurred"></div>
                                            <div class="pointer blurred"></div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6">
                                        <h4 class=" p-4 float-end"><i class="dripicons-home px-4"></i>SPEND ANALYSIS</h4>
                                    </div>


                                </div>

                            </div>
                            <div class="col-xl-6 ">
                                <div class="row ">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="card h_3">
                                            <div class="card-body">
                                                <h4 class=" mb-4 ">MONEYBOX</h4>
                                                <div class="text-center">

                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-22">RM 700</h5>

                                                    <p class="text-muted">70% Target</p>

                                                    <div class="progress mt-3" style="height: 4px;">
                                                        <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-xl-6 col-md-6">
                                        <div class="card h_3">
                                            <div class="card-body">
                                                <div class="">
                                                    <h4 class=" mb-4 ">YOUR CARDS</h4>
                                                    <div class="mx-auto mb-4 mt-3 text-center">
                                                        <img src="https://img.icons8.com/color/96/000000/bank-cards.png" />

                                                    </div>
                                                    <a style="font-weight: 400;letter-spacing: 2px;"> NUR SHAHIDA BINTI OTHMAN</a> <br>
                                                    <a style="font-weight: 400;letter-spacing: 2px;"> 3625 1254 8524 1254</a> <br>
                                                    <a style="font-weight: 400;letter-spacing: 2px;"> 02/25</a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>


                        <div class="row">
                            <div class="col-xl-6">
                                <div class=" h_4">
                                    <div class="card-body">
                                        <div class="table-responsive mb-5">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <h4 class=" mb-4 "> 10 Feb 2022</h4>
                                                <hr>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="me-3 align-self-center">
                                                                <div class="avatar-sm rounded bg-white align-self-center">
                                                                    <span class="avatar-title">
                                                                        <i class="ti-plus text-success font-size-18"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs_15">Receive from <span class="fw_4">Anna</span> </h5><a class="font-italic c_grey" style="font-style: italic;font-size: 12px;font-weight: 300;">Bill payment</a>
                                                        </td>
                                                        <td>RM 200.00</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="me-3 align-self-center">
                                                                <div class="avatar-sm rounded bg-white align-self-center">
                                                                    <span class="avatar-title">
                                                                        <i class="ti-minus text-warning font-size-18"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs_15">Transfer to <span class="fw_4">Juliana</span> </h5><a class="font-italic c_grey" style="font-style: italic;font-size: 12px;font-weight: 300;">Shooping</a>
                                                        </td>
                                                        <td>RM 150.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="table-responsive mb-5">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <h4 class=" mb-4 "> 29 JAN 2022</h4>
                                                <hr>
                                                <tbody>

                                                    <tr>
                                                        <td>
                                                            <div class="me-3 align-self-center">
                                                            <div class="avatar-sm rounded bg-white align-self-center">
                                                                    <span class="avatar-title">
                                                                        <i class="ti-minus text-warning font-size-18"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs_15">Transfer to <span class="fw_4">Liona</span> </h5><a class="font-italic c_grey" style="font-style: italic;font-size: 12px;font-weight: 300;">Online food order</a>
                                                        </td>
                                                        <td>RM 150.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card h_4">
                                    <div class="card-body">
                                        <h4 class=" mb-4 ">YOUR EXPENSES</h4>

                                        <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>




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
    <script src="assets/js/pages/apexcharts.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>