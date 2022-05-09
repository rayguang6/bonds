<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/admin-favicon.png">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- D3JS -->
    <script src="https://d3js.org/d3.v4.js"></script>
    <!-- Datatable CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Datatable JS CDN -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Sweet Alert CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- ChatJS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>Bonds Admin</title>
</head>

<body>

    <!-- Outermost Container -->
    <div class="container-fluid">
        <!--Outer Row -->
        <div class="row flex-nowrap">

            <!--////////////////////
                Sidebar Start
            ////////////////////-->

            <div class="col-auto col-md-3 col-lg-3 col-xl-2 px-sm-2 py-4 pe-4 bg-white" id="sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <!-- Logo Area -->
                    <a class="mx-auto" id="logo" href="admin-dashboard.php"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline"><img src="assets/images/admin.png" alt="Bonds Logo"
                                width="150"></span>
                        <span class="fs-5 d-sm-none"><img src="assets/images/admin-favicon.png" alt="Bonds Logo"
                                width="30"></span>
                    </a>

                    <!-- Menu Start -->
                    <ul class="mx-auto nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-4"
                        id="menu">
                        <li class="nav-item mt-2">
                            <a href="admin-dashboard.php" class="nav-link  menu_a">
                                <i class="fs-5 bi bi-house"></i> <span
                                    class="fs-6 ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item mt-2">
                            <a href="admin-manageuser.php" class="nav-link menu_a">
                                <i class="fs-5 bi bi-people"></i><span class="fs-6 ms-1 d-none d-sm-inline">Manage
                                    User</span>
                            </a>
                        </li>

                        <li class="nav-item mt-2">
                            <a href="admin-managecovid.php" class="nav-link menu_a">
                                <i class="fs-5 bi bi-shield-plus"></i><span class="fs-6 ms-1 d-none d-sm-inline">Covid
                                    19</span>
                            </a>
                        </li>


                    </ul>
                    <!-- Menu End -->
                    <hr>

                    <!-- Profile Start -->
                    <div class="dropdown w-100 mb-5 py-md-2" id="profile">
                        <a href="#" class=" text-decoration-none d-flex align-items-center justify-content-center"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="">
                                <img src="assets/images/admin.png" alt="profile" width=50 class="rounded-circle">
                            </div>

                            <span class="d-none d-sm-inline ps-1">
                                <div class="ms-1">
                                    <h6 class="fw-bold py-0 my-0">ADMIN</h6>
                                    <small class="text-muted py-0 my-0">BONDS</small>
                                </div>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
                            
                            <li><a class="dropdown-item text-danger" href="index.php">
                                    <i class="fs-6 bi bi-box-arrow-right"></i>
                                    <span class="ms-2">Logout</span>
                                </a></li>
                        </ul>
                    </div>
                    <!-- Profile End -->
                </div>
            </div>


            <!--////////////////////
                Sidebar End
            ////////////////////-->

            <!--////////////////////
                Right Container Start
            ////////////////////-->
            <div class="py-4 mx-4 col" id="right_container">

                <!--////////////////////
                    Top Bar Start
                ////////////////////-->

                <div class="container-fluid ps-2" id="topbar_container">
                    <nav class="navbar navbar-expand-lg navbar-light mt-3" id="topbar">
                        <div class="container-fluid">
                            <!-- Page Title -->
                            <h2 class="navbar-brand fw-bolder fs-2 mydarkgreen" id="page_title">Bonds App</h2>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <span class="collapse navbar-collapse" id="navbarSupportedContent">
                                
                                <ul class="navbar-nav ms-auto">
                                    
                                    <!-- topbar profile start -->
                                    <li class="nav-item dropdown ms-auto me-1">
                                        <a href="profile.php" class="text-decoration-none" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="text-nowrap glassmorphism p-2" id="topbar_profile">
                                                <div class="d-flex">
                                                    <div class="my-auto">
                                                        <img class="rounded-circle" src="assets/images/admin.png" alt="profile picture" height="40">
                                                    </div>
                                                    <div class="ms-1">
                                                        <h6 class="py-0 my-0">Admin</h6>
                                                        <small class="text-muted py-0 my-0">BONDS</small>
                                                    </div>
                                                </div>
                                            </div>
                                         </a>
                                         <ul class="dropdown-menu mt-1"
                                            aria-labelledby="dropdownUser2">
                                            <li>
                                                <a class="dropdown-item text-danger" href="index.php">
                                                    <i class="fs-5 bi bi-box-arrow-right"></i>
                                                    <span class="ms-2">Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- topbar profile end -->

                                    <li class="nav-item dropdown mx-1">

                                        <a title="Announcements" class="nav-link" href="#" id="notification-dropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mygreen bi bi-bell-fill fs-3"></i>
                                        </a>
                                        <ul class="dropdown-menu"
                                            aria-labelledby="notification-dropdown">
                                            <li class="pt-0"><a class="dropdown-item text-wrap" href="#">Admin changed your covid status from...</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-wrap" href="#">Admin approved your request at _</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-wrap" href="#">Your update covid report has been processed...</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-center mygreen"
                                                    href="announcement.php">View All Notifications</a></li>
                                        </ul>
                                    </li>

                                </ul>
                                <a href="https://mail.google.com/mail/u/0/" target="_blank"  title="Send Email" class="mx-1 btn btn_mygreen">
                                    <i class="fa-solid fa-file me-2"></i>Requests</a>
                            </span>
                        </div>
                    </nav>
                </div>


                <!--////////////////////
                     Top Bar End
                ////////////////////-->

                <!-- Container Under Right Container -->
                <div class="container main_content_container">
                    <div class="row">

                        <!-- ***************************************************************
                                     PUT YOUR CONTENT BELOW 
                 *******************************************************************-->

                        <div class="col-12 mycontainer">

                            <!-- Datatable for Covid Cases-->
                            <div class="table-responsive mb-2">
                                <h2>Covid Status</h2>
                                <table id="covidtable" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Unit</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Contact</th>
                                            <th>Vaccine Status</th>
                                            <th>Covid Status</th>
                                            <th>Last Updated</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="covid_table_body">

                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <!--Global Covid Modal -->
                        <div class="modal fade" id="CovidModal" tabindex="-1" aria-labelledby="updateCovidModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                </div>
                            </div>
                        </div>

                        <!-- Update Modal -->
                        <div class="modal fade mt-4 " id="UpdateModal" tabindex="-1" aria-labelledby="UpdateModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog  shadow-lg">
                                <div class="modal-content">

                                </div>
                            </div>
                        </div>

                        <!-- Manage Reporting Table -->
                        <div class="col-12 mycontainer mt-4">
                            <div class="title d-flex align-items-center mb-2">
                                <h2>Manage Covid & Vaccine Report</h2>
                                <h6 class="ms-auto">Reports Remaining: <span id="report_count">0</span></h6>
                            </div>

                            <!-- BS Table Start -->
                            <table class="table table-hover">
                                <thead class="bg-primary border-0 text-white">
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Report Type</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="report_table">
                                </tbody>
                            </table>
                        </div>

                        <!-- covid status chartJS -->
                        <div class="mycontainer mt-4">
                            <div class="row d-flex align-items-center">
                                <h1 class="text-center">Covid Cases</h1>
                                <ul class="nav nav-tabs d-flex align-items-start" id="exploreTab" role="tablist">

                                    <li class="" role="presentation">
                                        <button class="nav-link active fw-bold" id="inside-tab" data-bs-toggle="tab"
                                            data-bs-target="#inside-tab-content" type="button" role="tab"
                                            aria-controls="inside-tab-content" aria-selected="true">Weekly
                                            Cases</button>
                                    </li>
                                    <li class="mb-auto" role="presentation">
                                        <button class="nav-link fw-bold" id="outside-tab" data-bs-toggle="tab"
                                            data-bs-target="#outside-tab-content" type="button" role="tab"
                                            aria-controls="outside-tab-content" aria-selected="false">Monthly
                                            Cases</button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    <!-- First Tab Start-->
                                    <div class="tab-pane fade show active" id="inside-tab-content" role="tabpanel"
                                        aria-labelledby="inside-tab">
                                        <h2>Weekly Cases</h2>
                                        <canvas id="myChart" class=" w-75 mx-auto"></canvas>
                                    </div>
                                    <!-- First Tab End -->

                                    <!-- Second Tab Start -->
                                    <div class="tab-pane fade" id="outside-tab-content" role="tabpanel"
                                        aria-labelledby="outside-tab">
                                        <div>
                                            <h2>Monthly Cases</h2>
                                            <canvas id="monthlyCasesChart" class="w-75 mx-auto"></canvas>
                                        </div>
                                    </div>
                                    <!-- Second Tab End -->
                                </div>


                            </div>
                        </div>


                        <!-- History Container-->
                        <div class="col-12 mycontainer mt-4">
                            <h2>Action History</h2>
                            <div id="history_container">

                            </div>
                        </div>

                        <!-- Toast Notification Container -->
                        <div aria-live="polite" aria-atomic="true" class="position-relative">
                            <div class="toast-container position-fixed bottom-0 end-0 m-3">

                            </div>
                        </div>

                        <!-- ### CHANGE the innner text TO CHANGE THE TOPBAR TITLE -->
                        <script>$("#page_title").text("Manage Covid")</script>
                        <!-- ### CHANGE the innner text TO CHANGE THE TITLE -->
                        <script>$("title").text("Admin | Manage Covid")</script>
                        <!-- (Included In This file Only)Manage Covid JS -->
                        <script src="assets/js/managecovid.js"></script>

                        <!-- ***************************************************************
                            PUT YOUR CONTENT ABOVE (remember to change title)
                 *******************************************************************-->
                    </div><!-- END Row under Right Container -->
                </div>
                <!--END Container under Right Container  -->
            </div>
            <!--END Right Container  -->
        </div> <!-- END Row -->
    </div> <!-- END Outermost Container -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Fontawesome CDN -->
    <script src="https://kit.fontawesome.com/db51efbc0b.js" crossorigin="anonymous"></script>
    <!-- My Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>