<?php 
$pageTitle = "Explore";
include 'includes/header.php';?>

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

    <!-- This File Only JS -->
    <script src="assets/js/explore.js"></script>
<?php include 'includes/footer.php';?>