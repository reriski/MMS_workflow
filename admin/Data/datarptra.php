
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>MMS | Admin Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="../../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../../assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../../assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="../Dashboard/">
                    <img src="../../assets/global/img/logo.png" alt="logo" class="logo-default"/>
                </a>
                <div class="menu-toggler sidebar-toggler">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <div class="page-top">
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile"> Studio IT </span>
                                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                <img alt="" class="img-circle" src="../../assets/pages/media/profile/photo3.jpg" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="../Auth/lock_screen.php">
                                        <i class="icon-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="../Auth/login.php">
                                        <i class="icon-key"></i> Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="../Dashboard/index.php" class="nav-link ">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../Dashboard/komplain.php" class="nav-link ">
                                    <i class="icon-wallet"></i>
                                    <span class="title">Data Komplain</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">Features</h3>
                    </li>
                    <li class="nav-item active">
                        <a href="datarptra.php" class="nav-link ">
                            <i class="icon-diamond"></i>
                            <span class="title">Data RPRTA</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="nav-link nav-toggle">
                            <i class="icon-layers"></i>
                            <span class="title">Master</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="../Master/workflow.php" class="nav-link ">
                                    <span class="title">Workflow</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="../Master/template.php" class="nav-link ">
                                    <span class="title">Template</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1>
                            Admin Dashboard
                            <small>statistics, charts, recent events and reports</small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    <!-- END PAGE TOOLBAR -->
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE BREADCRUMB -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Dashboard</span>
                    </li>
                </ul>
                <div class="row">
                  <?php

                  $json_string =    file_get_contents("http://ppid.jakarta.go.id/json?url=http://data.jakarta.go.id/dataset/a96e0288-90d8-48b1-9c3a-9db11372e59f/resource/a6ffd51f-279d-49d6-9f33-eed327ea4753/download/RPTRA-Peresmian-sampai-dengan-Maret-2017.json");
                  $parsed_json = json_decode($json_string, true);
                  ?>
                  <div class="col-md-12 col-sm-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase">Data RPRTA</span>
                                    </div>  
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th class="table-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th> Nama RPRTA </th>
                                                <th> Alamat </th>
                                                <th> Kelurahan </th>
                                                <th> Kecamatan </th>
                                                <th> Kabupaten / Kota </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                            foreach($parsed_json as $key => $value)
                                            {
                                          ?>
                                            <tr class="odd gradeX">
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                  <?php echo $value['nama_rptra'];?>
                                                </td>
                                                <td> 
                                                  <?php echo $value['alamat'];?> 
                                                </td>
                                                <td>
                                                  <?php echo $value['kelurahan'];?>
                                                </td>
                                                <td>
                                                  <?php echo $value['kab_kota'];?>
                                                </td>
                                                <td>
                                                  <?php echo $value['waktu_peresmiaan'];?>
                                                </td>
                                                <!-- <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td> -->
                                            </tr>
                                          <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                </div>
</div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
            2017 &copy; Creator By
            <a target="_blank" href="http://studioit.co.id">Studio IT</a> &nbsp;|&nbsp;
            <a href="http://hackjak.jakarta.go.id" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">HackJak</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN QUICK NAV -->
    
    <div class="quick-nav-overlay"></div>
    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>
    <script src="../../assets/global/plugins/excanvas.min.js"></script>
    <script src="../../assets/global/plugins/ie8.fix.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../../assets/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="../../assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="../../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <script src="../../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
    <script src="../../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="../../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <script src="../../assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="../../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
    <link href="../../assets/apps/css/inbox.css" rel="stylesheet" />

    <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
    </script>
</body>

</html>