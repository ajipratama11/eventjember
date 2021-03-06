<?php $this->load->view('templates/header');

?>

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
        <?php $this->load->view('templates/navbar', $jabatan); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <!-- <?= $waktu; ?> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div style="height: 150px;" class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-school"></i></h1>
                                <h6 class="text-white">Berita </h6>
                                <h2 class="text-white">1</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div style="height: 150px;" class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                <h6 class="text-white">Jumlah Media Partner</h6>
                                <h2 class="text-white">1</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div style="height: 150px;" class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account"></i></h1>
                                <h6 class="text-white">Jumlah GTK</h6>
                                <h2 class="text-white">1</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->

                    <!-- Column -->

                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div style="height: 150px;" class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                <h6 class="text-white">Jumlah Rombel</h6>
                                <h2 class="text-white">1</h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <?php if ($jabatan == 1) {
                ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-9">
                                            <div class="row">
                                           
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-user m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">2540</h5>
                                                        <small class="font-light">Total Users</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-plus m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">120</h5>
                                                        <small class="font-light">New Users</small>
                                                    </div>
                                                </div>
                                                <div class="col-6 m-t-15">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">656</h5>
                                                        <small class="font-light">Total Shop</small>
                                                    </div>
                                                </div>
                                                <div class="col-6 m-t-15">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-tag m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">9540</h5>
                                                        <small class="font-light">Total Orders</small>
                                                    </div>
                                                </div>
                                                <div class="col-6 m-t-15">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-table m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">100</h5>
                                                        <small class="font-light">Pending Orders</small>
                                                    </div>
                                                </div>
                                                <div class="col-6 m-t-15">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-globe m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">8540</h5>
                                                        <small class="font-light">Online Orders</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                COPYRIGHT © BIKEA TECHNOCRAFT 2019
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
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
    <script src="<?= base_url() ?>vendor/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>vendor/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>vendor/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>vendor/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>vendor/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?= base_url() ?>vendor/assets/libs/flot/excanvas.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url() ?>vendor/dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>