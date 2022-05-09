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

            <div class="container main-content-container">
              <div class="profile_container row my_container p-4">
                <div class="mycontainer col-9 d-flex flex-column justify-content-start">
                  <form onsubmit="return confirmEdit();" id="mainForm">
                    <div class="generalInformationSection">
                      <h3>General Information</h3>
                      <hr />
                      <div class="row">
                        <div class="col">
                          <label for="profile-firstName" class="form-label">First Name</label>
                          <input type="text" class="form-control" value="Zheng Qian" id="profile-firstName" required
                            disabled />
                        </div>
                        <div class="col">
                          <label for="profile-lastName" class="form-label">Last Name</label>
                          <input type="text" class="form-control" value="Lim" id="profile-lastName" disabled required />
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <label for="profile-Birthday" class="form-label">Day Of Birth</label>
                          <input type="date" class="form-control" value="2001-05-28" id="profile-Birthday" disabled
                            required />
                        </div>
                        <div class="col">
                          <label for="profile-Gender" class="form-label">Gender</label>
                          <select name="profile-Gender" id="profile-Gender" disabled class="form-select" disabled
                            required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="profile-Email" class="form-label">Email</label>
                          <input type="email" class="form-control" value="limzhengqian12@gmail.com" id="profile-Email"
                            disabled required />
                        </div>
                        <div class="col">
                          <label for="profile-ph" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" value="017-457 3538" id="profile-ph" disabled
                            required />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="profile-ic" class="form-label">Identity Number</label>
                          <input type="text" class="form-control" value="010528-02-0587" id="profile-ic" disabled
                            required />
                        </div>
                        <div class="col">
                          <label for="profile-race" class="form-label">Race</label>
                          <select name="profile-race" id="profile-race" class="form-select" disabled required>
                            <option value="Malay">Malay</option>
                            <option value="Chinese">Chinese</option>
                            <option value="Indian">Indian</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="profile-vaccinationStatus" class="form-label">Vaccination Status</label>
                          <select name="profile-vaccinationStatus" id="profile-vaccinationStatus" class="form-select"
                            disabled required>
                            <option value="0">Not Vaccinated At All</option>
                            <option value="1">1st Dose</option>
                            <option value="2">2nd Dose</option>
                            <option value="3">3rd Dose (Booster)</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div id="editValidationBtn"></div>
                    <div id="editSuggestion"></div>
                    <button class="btn btn_mygreen w-25 mt-4" id="editBtn" onclick="edit()" type="button">
                      <i class="me-2 fa fa-edit" aria-hidden="true"></i>Edit
                    </button>
                  </form>


                  <div class="accomodationInformationSection" style="margin-top: 10%">
                    <h3>Accomodation Information</h3>
                    <hr />
                    <div class="row">
                      <div class="col">
                        <label for="profile-blockNum" class="form-label">Block</label>
                        <input type="text" class="form-control" value="Block D" id="profile-blockNum" disabled />
                      </div>
                      <div class="col">
                        <label for="profile-roomNum" class="form-label">Room</label>
                        <input type="text" class="form-control" value="A-10-13" id="profile-roomNum" disabled />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="profile-carPark" class="form-label">Carpark ID</label>
                        <input type="text" class="form-control" value="A-10-13" id="profile-carPark" disabled />
                      </div>
                      <div class="col">
                        <label for="profile-roomNum" class="form-label">Status</label>
                        <input type="text" class="form-control" value="Tenant" id="profile-status" disabled />
                      </div>
                    </div>
                  </div>
                  <div>
                    <button class="btn btn-danger w-25 mt-4" onclick="confirmDelete()">
                      <i class="bi bi-trash3-fill" aria-hidden="true" style="margin-right: 10px"></i>Delete Account
                    </button>
                  </div>
                </div>
                <div class="minimizeProfileSide" id="minimizeProfileSide" onclick="toggleSide()">
                  <div id="toggleSideButton2"></div>
                  <img src="assets/images/profile-image.png" alt="profile-image">
                  <h6>Zheng Qian, A-10-13</h6>
                </div>
                <div class="col-3" id="profileSideBar">
                  <div class="profileImgSide" id="profileImgSide">
                    <div onclick="toggleSide()" id="toggleSideButton"></div>

                    <div class="image" style="margin-top: 20px;">
                      <img src="assets/images/profile-image.png" alt="profile image" id="profile-image" />

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-camera-fill editImage button button_link" viewBox="0 0 16 16"
                        onclick="changeProfileImage()">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                        <path
                          d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                      </svg>
                    </div>
                    <hr />
                    <div class="details">
                      <h2>Zheng Qian</h2>
                      <h2>A-10-13</h2>
                    </div>
                    <div class="riskStatus">
                      <i class="fa-solid fa-virus"></i>
                      <div>
                        <h5>COVID-19 Risk Status</h5>
                        <h3 style="color: F3F8FF important">
                          Low Risk No Symptom
                        </h3>
                      </div>
                    </div>
                    <div class="vacinnationStatus">
                      <i class="fa-solid fa-syringe"></i>
                      <div>
                        <h5>COVID-19 Vaccination Status</h5>
                        <h3>Fully Vaccinated</h3>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>

            <!-- Pop-up Modal Start-->
            <div class="modal fade" id="alert-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body d-flex flex-column align-items-center">
                    <div class="alert" role="alert"></div>
                  </div>
                  <div class="modal-footer" id="modal-footer">
                    <button type="button" class="btn btn_mygreen" data-bs-dismiss="modal" id="yes-button"
                      onclick="">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pop-up Modal End-->

            <!-- ### CHANGE the innner text TO CHANGE THE TOPBAR TITLE -->
            <script>$("#page_title").text("Profile Page")</script>
            <!-- ### CHANGE the innner text TO CHANGE THE TITLE -->
            <script>$("title").text("Bonds | Profile")</script>
            <!-- (Included In This file Only)Profile JS -->
            <script src="assets/js/profile.js"></script>

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