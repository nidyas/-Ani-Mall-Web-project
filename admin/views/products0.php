<?php  session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../views/login.php';";
echo "</script>";
     
 }
?>


<html dir="ltr" lang="en" class="no-outlines"><!-- Mirrored from themelooks.net/demo/dadmin/html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:44 GMT --><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - DAdmin</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="assets/css/morris.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="assets/css/dropzone.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body class="">
    <div class="wrapper">
        <header class="navbar navbar-fixed">
            <div class="navbar--header"> <a href="index.html" class="logo"> <img src="assets/img/logo.png" alt=""> </a>
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i>
                </a> </div><a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
            <div class="navbar--search">
                <form action="http://themelooks.net/demo/dadmin/html/search-results.html"> <input type="search" name="search" class="form-control" placeholder="Search Something..." required=""> <button class="btn-link"><i class="fa fa-search"></i></button> </form>
            </div>
            <div class="navbar--nav ml-auto">
                <ul class="nav">
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="fa fa-bell"></i> <span class="badge text-white bg-blue">7</span> </a> </li>
                    <li class="nav-item"> <a href="mailbox_inbox.html" class="nav-link"> <i class="fa fa-envelope"></i>
                            <span class="badge text-white bg-blue">4</span> </a> </li>
                    <li class="nav-item dropdown nav-language"> <a href="#" class="nav-link" data-toggle="dropdown">
                           <span>Languages</span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu">
                        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                          
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav--user online"> <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="assets/img/avatars/01_80x80.png" alt="" class="rounded-circle"> <span>
                            <?php echo $_SESSION['id']; ?></span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.html"><i class="far fa-user"></i>Profile</a></li>
                            <li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="lock-screen.php"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="../core/logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <aside class="sidebar ps ps--active-y" data-trigger="scrollbar">
            <div class="sidebar--profile">
                <div class="profile--img"> <a href="profile.html"> <img src="assets/img/avatars/01_80x80.png" alt="" class="rounded-circle"> </a> </div>
                <div class="profile--name"> <a href="profile.html" class="btn-link"> <?php echo $_SESSION['id']; ?></a> </div>
                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item"> <a href="profile.html" class="nav-link" title="User Profile"> <i class="fa fa-user"></i> </a> </li>
                        <li class="nav-item"> <a href="lock-screen.php" class="nav-link" title="Lock Screen"> <i class="fa fa-lock"></i> </a> </li>
                        <li class="nav-item"> <a href="mailbox_inbox.html" class="nav-link" title="Messages"> <i class="fa fa-envelope"></i> </a> </li>
                        <li class="nav-item"> <a href="../core/logout.php" class="nav-link" title="Logout"> <i class="fa fa-sign-out-alt"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar--nav">
            <ul>
                        <li>
                            <ul>
                                <li>
                                    <a href="index.html"> <i class="fa fa-home"></i> <span>Dashboard</span> </a>
                                </li>


                                <li class="">
                                    <a href="#"> <i class="fa fa-shopping-cart"></i> <span>Ecommerce</span> </a>
                                    <ul>
                                        <li><a href="ecommerce.html">Dashboard</a></li>
                                        <li><a href="products.php">Products</a></li>
                                        <li><a href="products-add.php">Add Products</a></li>
                                        <li class=""><a href="products-edit.php">Edit Products</a></li>
                                        <li><a href="orders.php">Orders</a></li>
                                        <li><a href="order-view.php">Order View</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="collab"></i> <span>Associates</span> </a>
                                    <ul>

                                        <li><a href="collab.php">Organizors</a></li>
                                        <li class=""><a href="collab-add.php">Add Organizor</a></li>
                                        <li class=""><a href="collab-edit.php">Edit Organizor</a></li>

                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="collab2"></i> <span>Events</span> </a>
                                    <ul>

                                        <li><a href="collab2.php">Events</a></li>
                                        <li><a href="collab2-add.php">Add Event</a></li>
                                        <li class=""><a href="collab2-edit.php">Edit Event</a></li>
                                        <li class=""><a href="statt.php">Statistics</a></li>

                                    </ul>
                                    </li>
                                    
                                    <li class="active open">
                            <a href="#"> <i class="collab"></i> <span>Platforms</span> </a>
                                <ul>

                                <li class="active" ><a href="products0.php">ADD Platform</a></li>
                                    <li ><a href="products1.php">View Platform</a></li>
                                    <li ><a href="chart.php">Statistic</a></li>
                                    
                                </ul>
                            </li>
                            </ul>
                            </li>
                    <li class="is-dropdown"> <a href="#">Layouts</a>
                        <ul>
                            <li class="is-dropdown"> <a href="#"> <i class="fa fa-th"></i> <span>Page Layouts</span>
                                </a>
                                <ul>
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="page-light.html">Page Light</a></li>
                                    <li><a href="sidebar-light.html">Sidebar Light</a></li>
                                </ul>
                            </li>
                            <li class="is-dropdown"> <a href="#"> <i class="fa fa-th-list"></i> <span>Footers</span>
                                </a>
                                <ul>
                                    <li><a href="footer-light.html">Footer Light</a></li>
                                    <li><a href="footer-dark.html">Footer Dark</a></li>
                                    <li><a href="footer-transparent.html">Footer Transparent</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="is-dropdown"> <a href="#">Components</a>
                        <ul>
                            <li class="is-dropdown"> <a href="#"> <i class="far fa-newspaper"></i> <span>UI
                                        Elements</span> </a>
                                <ul>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="progress-bars.html">Progress Bars</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="ui-slider.html">UI Slider</a></li>
                                    <li><a href="sweet-alerts.html">Sweet Alerts</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                </ul>
                            </li>
                            <li class="is-dropdown"> <a href="#"> <i class="fab fa-wpforms"></i> <span>Form</span> </a>
                                <ul>
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="dropzone.html">Dropzone</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="is-dropdown"> <a href="#">Apps and Charts</a>
                        <ul>
                            <li class="is-dropdown"> <a href="#"> <i class="far fa-envelope"></i> <span>Mailbox</span>
                                </a>
                                <ul>
                                    <li><a href="mailbox_inbox.html">Inbox</a></li>
                                    <li><a href="mailbox_compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li> <a href="calendar.html"> <i class="far fa-calendar-alt"></i> <span>Calendar</span> </a>
                            </li>
                            <li> <a href="chat.html"> <i class="far fa-comments"></i> <span>Chat</span> </a> </li>
                            <li> <a href="contacts.html"> <i class="far fa-address-book"></i> <span>Contacts</span> </a>
                            </li>
                            <li> <a href="notes.html"> <i class="far fa-sticky-note"></i> <span>Notes</span> </a> </li>
                            <li> <a href="todo-list.html"> <i class="fa fa-tasks"></i> <span>Todo List</span> </a> </li>
                            <li> <a href="search-results.html"> <i class="fa fa-search"></i> <span>Search Results</span>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="is-dropdown"> <a href="#">Extra</a>
                        <ul>
                            <li class="is-dropdown"> <a href="#"> <i class="fa fa-file"></i> <span>Extra Pages</span>
                                </a>
                                <ul>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="lock-screen.html">Lock Screen</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="500.html">500 Error</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sidebar--widgets">
                <div class="widget">
                    <h3 class="h6 widget--title">Information Summary</h3>
                    <div class="summary--widget">
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">Daily Traffic</p>
                            <p class="summary--stats">307.512</p>
                        </div>
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">Average Usage</p>
                            <p class="summary--stats">2,371,527</p>
                        </div>
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">Disk Usage</p>
                            <p class="summary--stats">37.5%</p>
                        </div>
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">CPU Usage</p>
                            <p class="summary--stats">37.05-32</p>
                        </div>
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">Memory Usage</p>
                            <p class="summary--stats">37.05%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: -278px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 278px; height: 535px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 78px; height: 151px;"></div>
            </div>
        <div class="ps__rail-x" style="left: 0px; bottom: -278px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 278px; height: 399px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 59px; height: 84px;"></div></div></aside>
        <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Products</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="ecommerce.html">Ecommerce</a></li>
                                <li class="breadcrumb-item active"><span>Products</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="summary--widget">
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>
                                    <p class="summary--title">This Month</p>
                                    <p class="summary--stats text-green">2,371,527</p>
                                </div>
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>
                                    <p class="summary--title">Last Month</p>
                                    <p class="summary--stats text-orange">2,527,371</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main--content">
            <div class="panel">
                    <div class="records--header">
                        <div class="title fa-shopping-bag">
                            <h3 class="h3">Ecommerce Products <a href="#" class="btn btn-sm btn-outline-info">Edit Products</a></h3> </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="records--body">
                        <div class="title">
                            <h6 class="h6">Add Platform</h6> 
                        </div>
                        
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab01">
                            
                                <form method="post" action="ajouterplatform.php" enctype="multipart/form-data" name="monform" onsubmit="return test()">
                                	<div class="form-group row"> <span class="label-text col-md-3 col-form-label">Platform ID: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="id_plat" class="form-control" required> </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">platform Name: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="name" class="form-control" required> </div>
                                    </div>

                                    

                                    <div class="row mt-3">
                                        <div class="col-md-9 offset-md-3">
                                            <input type="submit" value="Add platform" name="ajouterplatform" class="btn btn-rounded btn-success"> </div>
                                    </div>
                                </form>
                            </div>
                                   
                        </div>
                    </div>
                </div>
                
                </section>
 
            <footer class="main--footer main--footer-light">
                <p>Copyright © <a href="#">DAdmin</a>. All Rights Reserved.</p>
            </footer>
        </main>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
    <script src="assets/js/raphael.min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery-jvectormap.min.js"></script>
    <script src="assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="assets/js/horizontal-timeline.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.steps.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="ajoutc.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Mirrored from themelooks.net/demo/dadmin/html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:45 GMT -->



</body></html>