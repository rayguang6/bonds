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

                        <div class="col-12 mycontainer">
                            <h2>Register a Visitor Pass</h2>
                            <h6 class="mb-3 text-black-50">For visit in group at the same time slot, only one
                                representative is required to register.</h6>

                            <form action="visitorpass.php" method="POST" class="visitorForm">
                                <!-- visitor details -->
                                <h4>Visitor Details</h4>
                                <div class="mb-3 visitorName">
                                    <label for="visitorname" class="form-label">Visitor Name</label>
                                    <input type="text" class="form-control w-50" id="visitorname"
                                        placeholder="e.g Karry Wang">
                                </div>
                                <div class="mb-3 visitorIC">
                                    <label for="visitorname" class="form-label">Visitor IC Number</label>
                                    <input type="text" class="form-control w-50" id="visitoric"
                                        placeholder="e.g 980605-03-7488 (with '-')">
                                </div>
                                <div class="mb-3 visitorPhone">
                                    <label for="visitorphone" class="form-label">Visitor Phone</label>
                                    <input type="text" class="form-control w-50" id="visitorphone"
                                        placeholder="e.g 012-3456789 (with '-')">
                                </div>

                                <div class="mb-3 visitorCarModel">
                                    <label for="visitorcar" class="form-label">Visitor Car Model & Color</label>
                                    <input type="text" class="form-control w-50" id="visitorcar"
                                        placeholder="e.g BMW M4 Blue">
                                </div>
                                <div class="mb-3 visitorCarNum">
                                    <label for="visitorcarnum" class="form-label">Visitor Car Register Number</label>
                                    <input type="text" class="form-control w-50" id="visitorcarnum"
                                        placeholder="e.g PPP1234">
                                </div>
                                <br><br>

                                <!-- Visitation details -->
                                <h4>Visitation Details</h4>
                                <h6 class="mt-4">Expected Visit Time</h6>
                                <div class="container">
                                    <div class="row mb-3">
                                        <div class="col-auto">
                                            <h6>Start Time:</h6>
                                            <input type="datetime-local" class="form-control w-40" name="datetime1"
                                                id="datetime1">
                                        </div>
                                        <div class="col-auto">
                                            <h6>End Time:</h6>
                                            <input type="datetime-local" class="form-control w-40" name="datetime2"
                                                id="datetime2">
                                        </div>
                                    </div>
                                </div>
                                <h6 for="visitingaddress" class="form-label mt-4">Visiting Address at <img
                                        src="assets/images/resident.png" alt="Bonds Logo" width="75"></h6>
                                <div class="container mb-3">
                                    <div class="row">
                                        <div class="col-auto">
                                            <select class="form-select visitingBlock"
                                                aria-label="Default select example">
                                                <option selected>Block</option>
                                                <option value="A">Block A</option>
                                                <option value="B">Block B</option>
                                                <option value="C">Block C</option>
                                                <option value="C">Block D</option>
                                            </select>
                                        </div>
                                        <div class="col-1">
                                            <input type="text" class="form-control w-2 visitingFloor" id="visitingFloor"
                                                placeholder="Floor">
                                        </div>
                                        <div class="col-1">
                                            <input type="text" class="form-control w-2 visitingUnit" id="visitingUnit"
                                                placeholder="Unit">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 numOfVisitors">
                                    <h6 for="numofvisitors" class="form-label mt-4">Number of Visitor(s)</h6>
                                    <input type="text" class="form-control w-50" id="numofvisitors" placeholder="e.g 5">
                                </div>
                                <br><br>
                            </form>

                            <!-- Temp Button trigger modal -->
                            <!-- TODO Put back into the form later -->
                            <button type="" class="btn btn_mygreen" data-bs-toggle="modal"
                                data-bs-target="#visitor-modal">Submit Application</button>

                            <!-- Confirmation Popup Modal -->
                            <div class="modal fade" id="visitor-modal" tabindex="-1"
                                aria-labelledby="visitor-modalLabel" aria-hidden="false">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body d-flex flex-column align-items-center">
                                            <div class="mx-auto">
                                                <img src="https://cdn.dribbble.com/users/251873/screenshots/9289747/13540-sign-for-success-alert.gif"
                                                    alt="success-image" width="200">
                                            </div>
                                            <div class="alert" role="alert">
                                                Submitted Successfully! Report will be generated!
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

                        <div class="col-12 mycontainer mt-4" style='overflow-x:auto; width:100%;position:relative;'>
                            <h2>Your History</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Visitor Name</th>
                                        <th scope="col">Car Registration Number</th>
                                        <th scope="col">No. of Visitors</th>
                                        <th scope="col">Start</th>
                                        <th scope="col">End</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>4 April 2022</td>
                                        <td>Mr Suddenly</td>
                                        <td>PNG6779</td>
                                        <td>5</td>
                                        <td>1000</td>
                                        <td>1100</td>
                                        <td><i class="ms-1 fa fa-download" aria-hidden="true"></i><i
                                                class="ms-1 fa fa-eye" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td>3 April 2022</td>
                                        <td>Mr Handsome</td>
                                        <td>WAE322</td>
                                        <td>1</td>
                                        <td>1500</td>
                                        <td>1600</td>
                                        <td><i class="ms-1 fa fa-download" aria-hidden="true"></i><i
                                                class="ms-1 fa fa-eye" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td>1 April 2022</td>
                                        <td>Ms May</td>
                                        <td>KKT9937</td>
                                        <td>3</td>
                                        <td>1200</td>
                                        <td>1300</td>
                                        <td><i class="ms-1 fa fa-download" aria-hidden="true"></i><i
                                                class="ms-1 fa fa-eye" aria-hidden="true"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- ### CHANGE the innner text TO CHANGE THE TOPBAR TITLE -->
                        <script>$("#page_title").text("Visitor Pass")</script>
                        <!-- ### CHANGE the innner text TO CHANGE THE TITLE -->
                        <script>$("title").text("Bonds | Visitor Pass")</script>
                        <!-- (Included In This file Only)Visitor JS -->
                        <!--<script src="assets/js/visitorscript.js"></script>-->

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