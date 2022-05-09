<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/resident-favicon.png">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- D3JS -->
    <script src="https://d3js.org/d3.v4.js"></script>
    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Sweet Alert CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- ChatJS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bonds</title>
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
                    <a class="mx-auto" id="logo" href="dashboard.php"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline"><img src="assets/images/resident.png" alt="Bonds Logo"
                                width="150"></span>
                        <span class="fs-5 d-sm-none"><img src="assets/images/resident-favicon.png" alt="Bonds Logo"
                                width="30"></span>
                    </a>

                    <!-- Menu Start -->
                    <ul class=" mx-auto nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-4"
                        id="menu">
                        <li class="nav-item mt-2">
                            <a href="dashboard.php" class="nav-link menu_a">
                                <i class="fs-5 bi bi-house"></i> <span
                                    class="fs-6 ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item mt-2">
                            <a href="covid19.php" class="nav-link menu_a">
                                <i class="fs-5 bi bi-shield-plus"></i><span class="fs-6 ms-1 d-none d-sm-inline">Covid
                                    19</span>
                            </a>
                        </li>

                        <li class="nav-item mt-2">
                            <a href="visitorpass.php" class="nav-link menu_a">
                                <i class="fs-5 bi bi-person-bounding-box"></i><span
                                    class="fs-6 ms-1 d-none d-sm-inline">Visitor Pass</span>
                            </a>
                        </li>

                        <li class="nav-item mt-2">
                            <a href="explore.php" class="nav-link menu_a">
                                <i class="fs-5 bi bi-compass"></i><span
                                    class="fs-6 ms-1 d-none d-sm-inline">Explore</span>
                            </a>
                        </li>

                    </ul>
                    <!-- Menu End -->
                    <hr>

                    <!-- Profile Start -->
                    <div class="dropdown w-100 mb-5 py-md-2" id="profile">
                        <a href="#" class=" text-decoration-none d-flex align-items-center justify-content-center"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="my-auto">
                                <img src="assets/images/profile-image.png" alt="profile" width="50" height="50"
                                    class="rounded-circle">
                            </div>

                            <span class="d-none d-sm-inline ps-1">
                                <div class="ms-1">
                                    <h6 class="py-0 my-0">Ray Guang</h6>
                                    <small class="text-muted py-0 my-0">A-10-13</small>
                                </div>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
                            <li>
                                <a class="dropdown-item mygreen" href="profile.php">
                                    <i class="fs-5 bi bi-person mygreen"></i>
                                    <span class="ms-2 mygreen">Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item text-danger" href="index.php">
                                    <i class="fs-5 bi bi-box-arrow-right"></i>
                                    <span class="ms-2">Logout</span>
                                </a>
                            </li>
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
                                                        <img class="rounded-circle" src="assets/images/profile-image.png" alt="profile picture" width="40" height="40">
                                                    </div>
                                                    <div class="ms-1">
                                                        <h6 class="py-0 my-0">Ray Guang</h6>
                                                        <small class="text-muted py-0 my-0">A-10-13</small>
                                                    </div>
                                                </div>
                                            </div>
                                         </a>
                                         <ul class="dropdown-menu mt-1"
                                            aria-labelledby="dropdownUser2">
                                            <li>
                                                <a class="dropdown-item mygreen" href="profile.php">
                                                    <i class="fs-5 bi bi-person mygreen"></i>
                                                    <span class="ms-2 mygreen">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
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
                                <a href="https://mail.google.com/mail/u/0/?view=cm&amp;fs=1&amp;source=mailto&amp;to=support@bonds.com" target="_blank"  title="Send Email" class="mx-1 btn btn_mygreen">
                                    <i class="fa-solid fa-headset me-2"></i>Support</a>
                                <!-- <a href="chat.php" label="Get Suppport" class="me-lg-3 btn btn_mygreen"><i
                                        class="fa-solid fa-headset me-2"></i>Get Help</a> -->
                                <!-- <a class="ms-2" href="index.php"><i class="fs-3 bi bi-box-arrow-right "></i></a> -->
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
                            (Start With A Responsive Col, with .mycontainer class)
                            *******************************************************************-->

                        <div class="col-lg-9">
                            <div class="mycontainer">
                                <div class="row d-flex align-items-center">
                                    <!-- Start View Covid Bar -->
                                    <h2 class="text-decoration-none fs-1 fw-bold mydarkgreen text-center">View Covid 19
                                        Cases</h2>
                                    <ul class="nav nav-tabs d-flex align-items-start" id="myTab" role="tablist">
                                        <button class="btn btn_mygreen" onClick="window.location.reload();">Refresh
                                            Page</button>
                                        <li class="ms-auto" role="presentation">
                                            <button class="nav-link active" id="overall-tab" data-bs-toggle="tab"
                                                data-bs-target="#overall-tab-content" type="button" role="tab"
                                                aria-controls="overall-tab-content"
                                                aria-selected="true">Yesterday</button>
                                        </li>
                                        <li class="" role="presentation">
                                            <button class="nav-link" id="week-tab" data-bs-toggle="tab"
                                                data-bs-target="#week-tab-content" type="button" role="tab"
                                                aria-controls="week-tab-content" aria-selected="false">Weekly</button>
                                        </li>
                                        <li class="" role="presentation">
                                            <button class="nav-link" id="month-tab" data-bs-toggle="tab"
                                                data-bs-target="#month-tab-content" type="button" role="tab"
                                                aria-controls="month-tab-content"
                                                aria-selected="false">Month</button>
                                        </li>
                                        

                                    </ul>

                                </div>

                                <div class="tab-content" id="myTabContent">

                                    <!-- Overall Cases Tab -->
                                    <div class="tab-pane fade show active" id="overall-tab-content" role="tabpanel"
                                    aria-labelledby="overall-tab">
                                    <div class="text-center">
                                        
                                        <h3 class="">Daily Cases - Updated 4 April 2020 10:00pm</span> </h3>
                                        <h3 class="text-warning ">New Cases: <span>3</span></h3>
                                        <h3 class="text-danger ">Active Cases: <span>16</span></h3>
                                    </div>
                                    <div class="row">
                                            <div class="ps-4 container mt-2 w-50 mx-auto">
                                                <h6 class="alert alert-danger">Block A: <span>10</span></h6>
                                                <h6 class="alert alert-warning">Block B: <span>5</span></h6>
                                                <h6 class="alert alert-primary">Block C: <span>0</span></h6>
                                                <h6 class="alert alert-success">Block D: <span>1</span></h6>
                                                <div class="d-flex justify-content-around">

                                                    <span class="alert alert-primary p-1 mx-1">(0)</span>
                                                    <span class="alert alert-success p-1">(1-4)</span>
                                                    <span class="alert alert-warning p-1">(5-9)</span>
                                                    <span class="alert alert-danger p-1">(>10)</span>
                                                </div>
                                            </div>
                                            <div class="w-50 mx-auto p-4">
                                                <canvas id="dailyActiveCovidGraph" class=""></canvas>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <!-- Overall Cases Tab End -->

                                    <!-- month Cases Tab -->
                                    <div class="tab-pane fade" id="month-tab-content" role="tabpanel"
                                        aria-labelledby="month-tab">
                                        <div class="text-center">
                                            <h3 class="pt-2">Month Cases: <span>April 2022</span></h3>
                                            <small class="text-muted">Last Updated: 26 Apr</small>
                                        </div>
                                        <div class="">
                                            <canvas id="monthlyActiveCovidGraph"></canvas>
                                        </div>
                                    </div>
                                    <!-- month Cases Tab End -->

                                    <!-- Last Week Cases Tab -->
                                    <div class="tab-pane fade" id="week-tab-content" role="tabpanel"
                                        aria-labelledby="week-tab">
                                        <h3 class="text-center pt-2">Last Week Cases:<span>3-9 April 2022 </span></h3>
                                        <div id="covid_weekly">
                                            <!-- Weekly Graph -->
                                            <canvas id="weeklyCovidGraph"></canvas>
                                        </div>
                                    </div>
                                    <!-- Last Week Cases Tab End -->
                                </div>
                                <!-- End View Covid Bar -->
                            </div>
                        </div>

                        <div class="col-lg-3 mt-lg-0 mt-4">
                            <div class="mycontainer">
                                <h3>Report Covid</h3>
                                <p>Diagnosed Yourself? <br>Made a Recovery? <br>Make a report below to let us know</p>
                                <button class="btn btn_mygreen" data-bs-toggle="modal"
                                    data-bs-target="#covidModal">Report</button>
                            </div>
                        </div>


                        <!-- Covid Report Popup Modal -->
                        <div class="modal fade" id="covidModal" tabindex="-1" aria-labelledby="covidModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="covidModalLabel">Make A Covid Report</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Cancel"></button>
                                    </div>
                                    <form class="modal-body" action="covid19.php" onsubmit="openModal()" id="myForm">

                                        <!-- Name and Block Will Be Get Dynamically -->
                                        <h6 class="mt-4">Name</h6>
                                        <input class="form-control" type="text" disabled value="Mr Suddenly">

                                        <h6 class="mt-4">Unit</h6>
                                        <input class="form-control" type="text" disabled value="C-03-03">

                                        <h6 class="mt-4">Reporting For</h6>
                                        <select class="form-select" aria-label="Default select example" required>
                                            <option value="Negative">Negative</option>
                                            <option value="Close Contact">Close Contact</option>
                                            <option value="Positive">Positive</option>
                                        </select>

                                        <h6 class="mt-4">Location Went</h6>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Gym
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Canteen
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Basketball Court
                                            </label>
                                        </div>

                                        <h6 class="mt-4" require>PCR Kit Image</h6>
                                        <input class="form-control form-control-sm" type="file" required>

                                        <h6 class="mt-4">Datetime Infected</h6>
                                        <input type="datetime-local" name="datetime" id="datetime" required>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" value="Submit" class="btn btn_mygreen"
                                                id="submitreport">Submit Report</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- End Covid Modal -->
                        <!-- Thank you Pop-up Modal Start-->
                        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body d-flex flex-column align-items-center">
                                        <div class="mx-auto">
                                            <img src="https://cdn.dribbble.com/users/251873/screenshots/9289747/13540-sign-for-success-alert.gif"
                                                alt="success-image" width="200">
                                        </div>
                                        <div class="alert" role="alert">
                                            Thank you for reporting yourself!
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn_mygreen"
                                            data-bs-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Thank you Pop-up Modal End-->

                    <script>
                        $('#myForm').on('submit', function (e) {
                            $('#covidModal').modal('hide');
                            $('#myModal').modal('show');
                            e.preventDefault();
                        });
                        $('#myModal').on('hidden.bs.modal', function () {
                            document.getElementById('myForm').reset();
                        })
                    </script>



                    <!-- ### CHANGE the innner text TO CHANGE THE TOPBAR TITLE -->
                    <script>$("#page_title").text("Covid 19 Status")</script>
                    <!-- ### CHANGE the innner text TO CHANGE THE TITLE -->
                    <script>$("title").text("Bonds | Covid 19 Status")</script>
                    <!-- included here only JS --><script src="assets/js/covid.js"></script>

                    <!-- ***************************************************************
                                        PUT YOUR CONTENT ABOVE
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