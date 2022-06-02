<?php 
$pageTitle = "Covid 19";
include 'includes/header.php';?>

                        <div class="col-lg-9">
                            <div class="mycontainer">
                                <div class="row d-flex align-items-center">
                                    <!-- Start View Covid Bar -->
                                    <h2 class="text-decoration-none fs-1 fw-bold mydarkgreen text-center">View Covid 19
                                        Cases</h2>

                                    <div class="col-12 col-md-4">
                                        <button class="btn btn_mygreen" onClick="window.location.reload();">Refresh Page</button>
                                    </div>    
                                    <div class="col-12 col-md-8">
                                        <ul class="nav nav-tabs d-flex align-items-start" id="myTab" role="tablist">
    
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
                                        <input class="form-control" type="text" disabled value='<?php echo $Resident->getName()?>'>

                                        <h6 class="mt-4">Unit</h6>
                                        <input class="form-control" type="text" disabled value="C-03-03">

                                        <h6 class="mt-4">Reporting For</h6>
                                        <select class="form-select" aria-label="Default select example" required>
                                            <option value="Negative">Negative</option>
                                            <option value="Close Contact">Close Contact</option>
                                            <option value="Positive">Positive</option>
                                        </select>

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

    <!-- This file only JS -->
    <script src="assets/js/covid.js"></script>
<?php include 'includes/footer.php';?>