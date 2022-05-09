<?php 
$pageTitle = "Manage Covid";
include 'includes/admin-header.php';?>

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

                        <!-- (Included In This file Only)Manage Covid JS -->
                        <script src="assets/js/managecovid.js"></script>
<?php include 'includes/admin-footer.php';?>