<?php 
$pageTitle = "Dashboard";
include 'includes/header.php';?>

    <div class="col p-0 m-0">
        <div class="col-12 col-lg-8 mycontainer mx-auto">
            <h2>Hi, 
                <span>Guang!</span> 
            Welcome to Bonds App </h2>
            <p class="text-muted m-0">Get in touch with us!</p>
        </div>

        <!-- New Announcement Container -->
        <div class="col-12 col-lg-8 mt-4 mx-auto">
            <div class="mycontainer py-0">
                        <h2>View Announcements</h2>
                    <!-- Button Groups -->
                    <div class="my-3">
                        <button type="button" id="A" onclick="filterBlock('Block A')"
                            class="btn border blockButton">A</button>
                        <button type="button" id="B" onclick="filterBlock('Block B')"
                            class="btn border blockButton">B</button>
                        <button type="button" id="C" onclick="filterBlock('Block C')"
                            class="btn border blockButton">C</button>
                        <button type="button" id="D" onclick="filterBlock('Block D')"
                            class="btn border blockButton">D</button>
                    </div>
                <h6>Click to Filter Based On Blocks</h6>
                <p class="text-muted">Showing Announcement of <span id="block-span">All</span></p>
            </div>

            <!-- Container To Get Announcements -->
            <div id="announcement_container"></div>
        </div>
        
    </div>

    <!-- This file only JS -->
    <script src="assets/js/announcement.js"></script>
<?php include 'includes/footer.php';?>
                    