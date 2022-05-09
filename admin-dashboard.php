<?php 
$pageTitle = "Dashboard";
include 'includes/admin-header.php';?>

                 <div class="row p-0">
                        <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                            <div class="mycontainer">
                                <div class="d-flex align-items-center py-auto">
                                    <i class="bi bi-people-fill fs-2 text-primary"></i>
                                    <h2 class="ms-2">166</h2>
                                </div>
                                <h5>Total Residents</h5>
                                <a href="admin-manageuser.php" class="btn btn-primary">Manage Resident</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 ">
                            <div class="mycontainer">
                                <div class="d-flex align-items-center py-auto">
                                    <i class="bi bi-shield-fill-plus fs-2 text-primary"></i>
                                    <h2 class="ms-2">13</h2>
                                </div>
                                <h5>Active Cases</h5>
                                <a href="admin-managecovid.php" class="btn btn-primary">Manage Covid</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 ">
                            <div class="mycontainer">
                                <div class="d-flex align-items-center py-auto">
                                    <i class="bi bi-person-badge-fill fs-2 text-primary"></i>
                                    <h2 class="ms-2">5</h2>
                                </div>
                                <h5>Today's Visitor</h5>
                                <a href="admin-manageuser.php#VisitorTable" class="btn btn-primary">Manage Visitor</a>
                            </div>
                        </div>
                </div>

                        <!-- Post Announcement -->
                        <div class="row p-0">

                            <div class="col-12 mx-lg-auto mt-4">
                                <!-- announcement submit form -->
                                <div class="mycontainer">
                                    <h2>Post A New Announcement</h2>
                                    <form id="annoucement-form">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="title" placeholder="Title">
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" id="content"
                                                placeholder="Your Announcement Content Here"></textarea>
                                        </div>
                                        <!-- TODO: 
                                            -Make Checkbox to target Blocks
                                            -image upload input
                                        -->
                                    </form>
                                    <button class="btn btn-primary" onclick="submitAnnouncement()">Submit</button>
                                </div>
    
                                <!-- Announcement Container -->
                                <div id="announcement_container"></div>
                            </div>
                        </div>
                        <!-- Modal End -->

                        <!-- (Included In This file Only)Manage Covid JS -->
                        <script src="assets/js/announcement.js"></script>

<?php include 'includes/admin-footer.php';?>

                        