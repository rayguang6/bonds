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
                        <div class="mycontainer">
                            <div class="row d-flex align-items-center">
                                <ul class="nav nav-tabs d-flex align-items-start" id="exploreTab" role="tablist">

                                    <li class="w-50" role="presentation">
                                        <button class="w-100 nav-link active fw-bold" id="outside-tab"
                                            data-bs-toggle="tab" data-bs-target="#outside-tab-content" type="button"
                                            role="tab" aria-controls="outside-tab-content" aria-selected="true">Explore
                                            Outside</button>
                                    </li>
                                    <li class="w-50" role="presentation">
                                        <button class="w-100 nav-link fw-bold" id="inside-tab" data-bs-toggle="tab"
                                            data-bs-target="#inside-tab-content" type="button" role="tab"
                                            aria-controls="inside-tab-content" aria-selected="false">Explore
                                            Inside</button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    <!-- First Tab Start-->
                                    <div class="tab-pane fade show active" id="outside-tab-content" role="tabpanel"
                                        aria-labelledby="outside-tab">
                                        <!-- Put Your First Tab Content Here -->

                                        <div class="col-12">
                                            <div class="mt-4">
                                                <div class="d-flex text-decoration-none">
                                                    <p class="tab mydarkgreen">Tap icon to see more details</p>

                                                    <div class="ms-auto" id="auto">
                                                        <div class="dropdown">
                                                            <button
                                                                class="btn btn-secondary dropdown-toggle button_color"
                                                                type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Distance
                                                            </button>
                                                            <div class="dropdown-menu button_color"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <input type="text" placeholder="Search.."
                                                                    class="dropdown_bg_color" id="myInput">
                                                                <a class="dropdown-item text-color" href="#">Within 500
                                                                    metres</a>
                                                                <a class="dropdown-item text-color" href="#">Within 1
                                                                    kilometres</a>
                                                                <a class="dropdown-item text-color" href="#">Within 3
                                                                    kilometres</a>
                                                                <a class="dropdown-item text-color" href="#">Within 5
                                                                    kilometres</a>
                                                                <a class="dropdown-item text-color" href="#">Within 10
                                                                    kilometres</a>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown">
                                                            <button
                                                                class="btn btn-secondary dropdown-toggle button_color"
                                                                type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Ratings
                                                            </button>
                                                            <div class="dropdown-menu button_color"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <input type="text" placeholder="Search.."
                                                                    class="dropdown_bg_color" id="myInput">
                                                                <a class="dropdown-item text-color" href="#">5.0 ✰✰✰✰✰
                                                                </a>
                                                                <a class="dropdown-item text-color" href="#">4.0 ✰✰✰✰
                                                                </a>
                                                                <a class="dropdown-item text-color" href="#">3.0 ✰✰✰
                                                                </a>
                                                                <a class="dropdown-item text-color" href="#">2.0 ✰✰ </a>
                                                                <a class="dropdown-item text-color" href="#">1.0 ✰ </a>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown">
                                                            <button
                                                                class="btn btn-secondary dropdown-toggle button_color"
                                                                type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Hours
                                                            </button>
                                                            <div class="dropdown-menu button_color"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <input type="text" placeholder="Search.."
                                                                    class="dropdown_bg_color" id="myInput">
                                                                <a class="dropdown-item text-color" href="#">Any
                                                                    time</a>
                                                                <a class="dropdown-item text-color" href="#">Open
                                                                    Now</a>
                                                                <a class="dropdown-item text-color" href="#">Open 24
                                                                    hours</a>
                                                                <a class="dropdown-item text-color" href="#">Monday</a>
                                                                <a class="dropdown-item text-color" href="#">Tuesday</a>
                                                                <a class="dropdown-item text-color"
                                                                    href="#">Wednesday</a>
                                                                <a class="dropdown-item text-color"
                                                                    href="#">Thursday</a>
                                                                <a class="dropdown-item text-color" href="#">Friday</a>
                                                                <a class="dropdown-item text-color"
                                                                    href="#">Saturday</a>
                                                                <a class="dropdown-item text-color" href="#">Sunday</a>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn-secondary button_color"
                                                            type="button">Clear ✘</button>
                                                    </div>

                                                    <input type="text" placeholder="search"
                                                        class="ms-auto form-control w-25">
                                                </div>

                                                <div class="container p-0 mt-3">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-12">
                                                            <div class="nav flex-column nav-pills">
                                                                <a href="#v-pills-food" data-bs-toggle="pill"
                                                                    class="nav-link active show">Food</a>
                                                                <a href="#v-pills-beverages" data-bs-toggle="pill"
                                                                    class="nav-link">Beverages</a>
                                                                <a href="#v-pills-shop" data-bs-toggle="pill"
                                                                    class="nav-link">Shop</a>
                                                                <a href="#v-pills-facility" data-bs-toggle="pill"
                                                                    class="nav-link">Facilities</a>
                                                                <a href="#v-pills-entertainment" data-bs-toggle="pill"
                                                                    class="nav-link">Entertainment</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-12">
                                                            <div class="tab-content">
                                                                <div id="v-pills-food"
                                                                    class="tab-pane fade active show">
                                                                    <div class="row explore-page" id="tab-1">
                                                                        <!-- Will Get from DB and Use Loop Later -->

                                                                    </div>
                                                                    <!-- End Food Row -->
                                                                </div>

                                                                <div id="v-pills-beverages" class="tab-pane fade">
                                                                    <div class="row explore-page" id="tab-2">

                                                                    </div>
                                                                </div>

                                                                <div id="v-pills-shop" class="tab-pane fade">
                                                                    <div class="row explore-page" id="tab-3">

                                                                    </div>
                                                                </div>

                                                                <div id="v-pills-facility" class="tab-pane fade">
                                                                    <div class="row explore-page" id="tab-4">

                                                                    </div>
                                                                </div>

                                                                <div id="v-pills-entertainment" class="tab-pane fade">
                                                                    <div class="row explore-page" id="tab-5">

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Tab End -->

                                    <!-- Second Tab Start -->
                                    <div class="tab-pane fade" id="inside-tab-content" role="tabpanel"
                                        aria-labelledby="inside-tab">
                                        <!-- Put Your Second Tab Content Here -->

                                        <div class="col-12">
                                            <div class="mt-4">
                                                <div class="d-flex text-decoration-none">
                                                    <p class="tab mydarkgreen">Tap icon to see more details</p>
                                                    <div class="ms-auto" id="auto">

                                                        <div class="dropdown">
                                                            <button
                                                                class="btn btn-secondary dropdown-toggle button_color"
                                                                type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Ratings
                                                            </button>
                                                            <div class="dropdown-menu button_color"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <input type="text" placeholder="Search.."
                                                                    class="dropdown_bg_color" id="myInput">
                                                                <a class="dropdown-item text-color" href="#">5.0 ✰✰✰✰✰
                                                                </a>
                                                                <a class="dropdown-item text-color" href="#">4.0 ✰✰✰✰
                                                                </a>
                                                                <a class="dropdown-item text-color" href="#">3.0 ✰✰✰
                                                                </a>
                                                                <a class="dropdown-item text-color" href="#">2.0 ✰✰ </a>
                                                                <a class="dropdown-item text-color" href="#">1.0 ✰ </a>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown">
                                                            <button
                                                                class="btn btn-secondary dropdown-toggle button_color"
                                                                type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Hours
                                                            </button>
                                                            <div class="dropdown-menu button_color"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <input type="text" placeholder="Search.."
                                                                    class="dropdown_bg_color" id="myInput">
                                                                <a class="dropdown-item text-color" href="#">Any
                                                                    time</a>
                                                                <a class="dropdown-item text-color" href="#">Open
                                                                    Now</a>
                                                                <a class="dropdown-item text-color" href="#">Open 24
                                                                    hours</a>
                                                                <a class="dropdown-item text-color" href="#">Monday</a>
                                                                <a class="dropdown-item text-color" href="#">Tuesday</a>
                                                                <a class="dropdown-item text-color"
                                                                    href="#">Wednesday</a>
                                                                <a class="dropdown-item text-color"
                                                                    href="#">Thursday</a>
                                                                <a class="dropdown-item text-color" href="#">Friday</a>
                                                                <a class="dropdown-item text-color"
                                                                    href="#">Saturday</a>
                                                                <a class="dropdown-item text-color" href="#">Sunday</a>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn-secondary button_color"
                                                            type="button">Clear ✘</button>
                                                    </div>

                                                    <input type="text" placeholder="search"
                                                        class="ms-auto form-control w-25">
                                                </div>

                                                <div class="container p-0 mt-3">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-12">
                                                            <div class="nav flex-column nav-pills">
                                                                <a href="#v-pills-sports" data-bs-toggle="pill"
                                                                    class="nav-link active show">Sports</a>
                                                                <a href="#v-pills-leisure" data-bs-toggle="pill"
                                                                    class="nav-link">Leisure</a>
                                                                <a href="#v-pills-others" data-bs-toggle="pill"
                                                                    class="nav-link">Others</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-12">
                                                            <div class="tab-content">
                                                                <div id="v-pills-sports"
                                                                    class="tab-pane fade active show">
                                                                    <div class="row explore-page" id="tab-6">
                                                                        <!-- Will Get from DB and Use Loop Later -->

                                                                    </div>
                                                                    <!-- End Food Row -->
                                                                </div>

                                                                <div id="v-pills-leisure" class="tab-pane fade">
                                                                    <div class="row explore-page" id="tab-7">

                                                                    </div>
                                                                </div>

                                                                <div id="v-pills-others" class="tab-pane fade">
                                                                    <div class="row explore-page" id="tab-8">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Tab End -->
                                </div>


                            </div>
                        </div>

                        <!-- ### CHANGE the innner text TO CHANGE THE TOPBAR TITLE -->
                        <script>$("#page_title").text("Explore")</script>
                        <!-- ### CHANGE the innner text TO CHANGE THE TITLE -->
                        <script>$("title").text("Bonds | Explore")</script>
                        <!-- My Custom JS -->
                        <script src="assets/js/explore.js"></script>

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