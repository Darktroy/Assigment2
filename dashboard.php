<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
            <meta name="author" content="Coderthemes">
            <!-- App title -->
            <title>Assigment 2 </title>
            <link rel="stylesheet" href="../plugins/morris/morris.css">

            <!-- App css -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
            <script src="assets/js/modernizr.min.js"></script>
            <script type="text/javascript">
        function idleTimer() {
            var t;
            //window.onload = resetTimer;
            window.onmousemove = resetTimer; // catches mouse movements
            window.onmousedown = resetTimer; // catches mouse movements
            window.onclick = resetTimer;     // catches mouse clicks
            window.onscroll = resetTimer;    // catches scrolling
            window.onkeypress = resetTimer;  //catches keyboard actions

            function logout() {
                window.location.href = 'logout.php';  //Adapt to actual logout script
            }

           function reload() {
    //              window.location = self.location.href;  //Reloads the current page
                    console.log(Date.now());
                    console.log(123);
    //                            window.location.href = '/admin/logout';  //Adapt to actual logout script

           }

           function resetTimer() {
                clearTimeout(t);
                
                t = setTimeout(logout, 1800000);  // time is in milliseconds (1000 is 1 second)
                t = setTimeout(reload, 1000);  // time is in milliseconds (1000 is 1 second)
            }
        }
    idleTimer();
            </script>
        </head>


        <body class="fixed-left">

            <!-- Begin page -->
            <div id="wrapper">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo"><span>Assigment 2</span></span><i class="mdi mdi-layers"></i></a>

                    </div>

                    <!-- Button mobile view to collapse sidebar menu -->
    <?php // include('includes/topheader.php'); ?>
                </div>
                <!-- Top Bar End -->


                <!-- ========== Left Sidebar Start ========== -->
    <?php include('includes/leftsidebar.php'); ?>
                <!-- Left Sidebar End -->



                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Dashboard</h4>
                                        <ol class="breadcrumb p-0 m-0">

                                            <li class="active">
                                                Dashboard
                                            </li>
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">


                                <a href="manage-posts.php">                       
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="card-box widget-box-one">
                                            <i class="mdi mdi-layers widget-one-icon"></i>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">New Examples</p>

                                                <h2>105<small></small></h2>

                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </a>


                            </div>
                            <!-- end row -->

                            <div class="row">

                                <a href="trash-posts.php"> <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="card-box widget-box-one">
                                            <i class="mdi mdi-layers widget-one-icon"></i>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Hello</p>

                                                <h2>15 <small>Assigment 2</small></h2>

                                            </div>
                                        </div>
                                    </div></a>
                            </div>

                        </div> <!-- container -->

                    </div> <!-- content -->

                </div>


                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->

            </div>
            <!-- END wrapper -->



            <script>
                var resizefunc = [];
            </script>



        </body>
    </html>
<?php } ?>