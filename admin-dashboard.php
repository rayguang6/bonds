<?php 
$pageTitle = "Dashboard";
include 'includes/admin-header.php';
?>


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
                                    <form id="" method="POST" action="admin-dashboard.php">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Title" name="announcement-title">
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" placeholder="Your Announcement Content Here" name="announcement-content"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="announcement_btn" >Post</button>
                                    </form>
                                </div>

                                <?php
                                        // Method To Submit Announcement
                                        if(isset($_POST['announcement_btn'])){
                                            $title = $_POST['announcement-title'];
                                            $content = $_POST['announcement-content'];
                                            $time = date("Y-m-d h:i:s");

                                            if($title!=""){
                                                $query = mysqli_query($con, "INSERT INTO announcement VALUES ('','$title','$content','$time')");
                                            }
                                        }

                                    ?>
    
                                <!-- Announcement Container -->
                                <div id="announcement_container"></div>
                            </div>
                        </div>
                        <!-- Modal End -->

                        <!-- (Included In This file Only)Manage Covid JS -->
                        <script src="assets/js/announcement.js"></script>

<?php include 'includes/admin-footer.php';?>

                        