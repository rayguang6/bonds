<?php 
$pageTitle = "Manage Covid";
include 'includes/admin-header.php';

function echoToast($message){
    echo '<div aria-live="polite" aria-atomic="true" class="position-relative" style="z-index: 100;">
    <div class="toast-container position-fixed bottom-0 end-0 m-3">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="6000">
            <div class="toast-header">
                <span class="bg-primary px-2 rounded">&nbsp;</span>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                '.$message.'
            </div>
        </div>
    </div>
</div>
<script> $(document).ready(function() {
    $(".toast").toast("show");
});</script>';
}

// when clicked update button, update the covid and vaccine select in the modal
if(isset($_POST['updateCovidButton'])){

    $ic = $_POST['covid-ic'];
    $covid_status = $_POST['covid-select'];
    $vaccine_status = $_POST['vaccine-select'];
    $current_covid_status = $_POST['current-covid'];
    
    $query = "UPDATE resident SET covid_status='$covid_status', vaccine_status='$vaccine_status'
                    WHERE ic='$ic'";
    $query_run = mysqli_query($con, $query);

        /***********UPDATE THE CASES TABLE*************/
        //if  (-) -> (+)
        updateCase($current_covid_status, $covid_status);
}

if(isset($_POST['updateReportButton'])){

    $ic = $_POST['report-ic'];
    $covid_status = $_POST['report-covid-select'];
    $vaccine_status = $_POST['report-vaccine-select'];
    $report_id = $_POST['report-id'];
    $current_covid_status = $_POST['report-current-covid'];
    
    $query = "UPDATE resident SET covid_status='$covid_status', vaccine_status='$vaccine_status'
                    WHERE ic='$ic'";
    $query_run = mysqli_query($con, $query);

    updateCase($current_covid_status, $covid_status);
    
        if($query_run) { 
            echo "<script>alert('Updated status successfully.')</script>";
            //delete report
            $deleteQuery = mysqli_query($con,"DELETE FROM covidreport WHERE report_id=$report_id"); 
        }else{ 
            echo"<script>alert('Fail to update.')</script>";
        }
    
}

////////////////////////////////////
// Save Cases  into database
///////////////////////////////////

//a method to decide call increase or decrease
function updateCase($current_covid_status,$covid_status){

    //recover
    if($current_covid_status=="Positive" and $covid_status=="Negative"){
        updateCovidCase('decrease');
    }
    //changed to positive
    if($current_covid_status!="Positive" and $covid_status=="Positive"){
        updateCovidCase('increase');
    }
}

function updateCovidCase($condition){
    $todayDate = date("Y-m-d");
    
    //first, check is there already has a row for today's cases record
    $query = mysqli_query(connection(),"SELECT * FROM covidcases WHERE date='$todayDate'");

    if(mysqli_num_rows($query)==0){
        //means not exist, need to create one new row
        $create_query = mysqli_query(connection(),"INSERT INTO covidcases VALUES ('$todayDate',0,0,0)");

        //bring yesterday active case into today
        $yesterday = getDateNow(-1,"days","'Y-m-d'");
        $yesterday_active_query = mysqli_query(connection(),"SELECT * FROM covidcases WHERE date='$yesterday'");
        $row = mysqli_fetch_array($yesterday_active_query);
        $yesterday_active = $row['active'];

        $transfer_active_query = mysqli_query(connection(),"UPDATE covidcases SET active=$yesterday_active WHERE date='$todayDate'");
    }

    //call other function to update data
    // if it is new case, add new case, add active
    if ($condition=='increase'){
        $query = mysqli_query(connection(),"UPDATE covidcases SET new = new + 1 WHERE date='$todayDate'");
        $query2 = mysqli_query(connection(),"UPDATE covidcases SET active = active + 1 WHERE date='$todayDate'");
    }
    //if recover, increase recover, decrease active
    else if($condition=='decrease'){
        $query = mysqli_query(connection(),"UPDATE covidcases SET recover = recover + 1 WHERE date='$todayDate'");
        $query2 = mysqli_query(connection(),"UPDATE covidcases SET active = active - 1 WHERE date='$todayDate'");
    }
    
}

function addNew(){
    //add a 'new' covid case
    $todayDate = date("Y-m-d");
    $update_query = mysqli_query(connection(),"UPDATE covidcases SET new = new + 1 WHERE date='$todayDate'");
}

function addRecover(){
    $todayDate = date("Y-m-d");
    $update_query = mysqli_query(connection(),"UPDATE covidcases SET recover = recover + 1 WHERE date='$todayDate'");

}

function updateActive($value){
    if($value=='+'){
        //add active
    }else if($value=='-'){
        //minus active case
    }
}

function getYesterdayActive(){
    $yesterday = getDateNow(-1,"days","'d M Y'");
    $query = mysqli_query(connection(),"SELECT activeCases FROM covidcases WHERE date='$yesterday'");
    return $query[0];
}

//get Date for dynamic current Date and time in webpage
function getDateNow($offset,$amount,$format){
    $Date = date("d-M-Y");
    return trim(date($format, strtotime($Date.$offset."".$amount."")), "'");

}
?>

                        <div class="col-12 mycontainer">

                            <!-- Datatable for Covid Cases-->
                            <div class="table-responsive mb-2">
                                <h2>Covid Status</h2>
                                <table id="CovidTable" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Unit</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Covid Status</th>
                                            <th>Vaccine Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="CovidTableBody">
                                        <!-- Use PHP to fetch from database and create table row -->
                                        <?php
                                            $data_query = mysqli_query($con, "SELECT * FROM unit INNER JOIN resident ON unit.owner_ic = resident.ic");

                                            if(mysqli_num_rows($data_query) > 0)
                                            {
                                                foreach($data_query as $resident)
                                                {
                                        ?>
                                                    <tr>
                                                        <td><?= $resident['unit_no'] ?></td>
                                                        <td><?= $resident['name'] ?></td>
                                                        <td><?= $resident['contact']//make it anchor tag to call ?></td>
                                                        <td><?= $resident['covid_status']//get badge ?></td>
                                                        <td><?= $resident['vaccine_status'] ?></td>
                                                        <td>
                                                            <!-- <button type="button" value="" class="btn px-0 updateVaccineBtn" title="Update Vaccine" >
                                                                <i class="fa-solid fa-syringe text-primary fs-4"></i>
                                                            </button>
                                                            <button type="button" value="" class="btn px-0 updateCovidBtn" title="Update Covid">
                                                                <i class="fa-solid fa-virus-covid text-danger fs-4"></i>
                                                            </button> -->
                                                            <button type="button" class="btn btn-primary editCovidBtn" value="<?=$resident['ic'];?>">Edit</button>
                                                        </td>
                                                    </tr>
                                        <?php
                                                }
                                            }
                                        ?>

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

                        <!-- UpdateCovid Modal -->
                        <div class="modal fade mt-4" id="CovidUpdateModal" tabindex="-1" aria-labelledby="CovidUpdateModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog shadow-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update status for <strong id="covid-name">${name}</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="admin-managecovid.php" method="POST">
                                    <div class="modal-body">
                                        <div class='d-flex align-items-center mb-2'>
                                            <p class="my-0 me-2" >Current Covid Status: </p>
                                            <input name="current-covid" id="covid-covidstatus" type="text" readonly>
                                        </div>
                                        <div class='d-flex align-items-center mb-2'>
                                            <p class="my-0 me-2" >Current Vaccine Status: </p>
                                            <input name="current-vaccine" id="covid-vaccinestatus" type="text" readonly>
                                        </div>

                                            <input type="hidden" name="covid-ic" id="covid-ic">

                                            <div class='d-flex align-items-center mb-2'>
                                                <p class="my-0 me-2 w-50">Update Covid: </p> 
                                                <select id='covid-select' class="form-select w-75" name="covid-select" aria-label="">
                                                    <option value="Negative">Negative</option>
                                                    <option value="Close Contact">Close Contact</option>
                                                    <option value="Positive">Positive</option>
                                                </select>
                                            </div>
                                            <div class='d-flex align-items-center mb-2'>
                                                <p class="my-0 me-2 w-50">Update Vaccine: </p> 
                                                <select id='vaccine-select' class="form-select w-75" name="vaccine-select" aria-label="Default select example">
                                                    <option value="Not Vaccinated At All">Not Vaccinated At All</option>
                                                    <option value="1st Dose">1st Dose</option>
                                                    <option value="2nd Dose">2nd Dose</option>
                                                    <option value="3rd Dose (Booster)">3rd Dose (Booster)</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="updateCovidButton">Update</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <!-- ViewReportModal Modal -->
                        <div class="modal fade mt-4" id="ViewReportModal" tabindex="-1" aria-labelledby="ViewReportModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog shadow-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Report <strong id="report-id">${id}</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="admin-managecovid.php" method="POST">
                                    <div class="modal-body">
                                        <div class='d-flex align-items-center mb-2'>
                                            <p class="my-0 me-2">Name: </p><span id="report-name"></span>
                                        </div>
                                        <div class='d-flex align-items-center mb-2'>
                                            <p class="my-0 me-2">Report Type: </p><span id="report-type"></span>
                                        </div>
                                        <div class='d-flex align-items-center mb-2'>
                                            <p class="my-0 me-2">Reporting For: </p><span id="report-for"></span>
                                        </div>
                                        <div class='align-items-center mb-2'>
                                            <p class="my-0 me-2">Evidence:</p>
                                            <img src="#" alt="Evidence Image" id="report-evidence">
                                        </div>
                                        <div class='d-flex align-items-center mb-2'>
                                            
                                        </div>
                                        <div class='d-flex align-items-center mb-2'>
                                            <p class="my-0 me-2">Current Covid Status: </p>
                                            <input type="text" name="report-current-covid" id="report-covidstatus" readonly>
                                        </div>
                                        <div class='d-flex align-items-center mb-2'>
                                            <p class="my-0 me-2" >Current Vaccine Status: </p>
                                            <input type="text" name="report-current-vaccine" id="report-vaccinestatus" readonly>
                                        </div>

                                            <input type="hidden" name="report-ic" id="report-ic">
                                            <input type="hidden" name="report-id" id="report-input-id">

                                            <div class='d-flex align-items-center mb-2'>
                                                <p class="my-0 me-2 w-50">Update Covid: </p> 
                                                <select id='report-covid-select' class="form-select w-75" name="report-covid-select" aria-label="">
                                                    <option value="Negative">Negative</option>
                                                    <option value="Close Contact">Close Contact</option>
                                                    <option value="Positive">Positive</option>
                                                </select>
                                            </div>
                                            <div class='d-flex align-items-center mb-2'>
                                                <p class="my-0 me-2 w-50">Update Vaccine: </p> 
                                                <select id='report-vaccine-select' class="form-select w-75" name="report-vaccine-select" aria-label="Default select example">
                                                    <option value="Not Vaccinated At All">Not Vaccinated At All</option>
                                                    <option value="1st Dose">1st Dose</option>
                                                    <option value="2nd Dose">2nd Dose</option>
                                                    <option value="3rd Dose (Booster)">3rd Dose (Booster)</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="updateReportButton">Update</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <!-- Manage Reporting Table -->
                        <div class="col-12 mycontainer mt-4">
                            <div class="title d-flex align-items-center mb-2">
                                <h2>Manage Covid & Vaccine Report</h2>
                                <!-- <h6 class="ms-auto">Reports Remaining: <span id="report_count">0</span></h6> -->
                            </div>
                            <table id="ReportTable" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Unit</th>
                                            <th>Report Type</th>
                                            <th>Report Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ReportTableBody">
                                        <!-- Use PHP to fetch from database and create table row -->
                                        <?php


                                            $data_query = mysqli_query($con, "SELECT * FROM covidreport ORDER BY date DESC");


                                            if(mysqli_num_rows($data_query) > 0)
                                            {
                                                foreach($data_query as $report)
                                                {

                                        ?>
                                        
                                                    <tr>
                                                        <td><?= $report['report_id'] ?></td>
                                                        <td><?= $report['reporter_unit'] ?></td>
                                                        <td><?= $report['report_type'] ?></td>
                                                        <td><?= $report['date'] ?></td>
                                                        <td>
                                                            <button type="button" value="<?=$report['report_id'];?>" class="btn btn-primary viewReportBtn" >
                                                                View
                                                            </button>
                                                        </td>
                                                    </tr>
                                        <?php
                                                }
                                            }
                                        ?>

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
                        <!-- <div class="col-12 mycontainer mt-4">
                            <h2>Action History</h2>
                            <div id="history_container">

                            </div>
                        </div> -->

                        <!-- Toast Notification Container -->
                        <div aria-live="polite" aria-atomic="true" class="position-relative">
                            <div class="toast-container position-fixed bottom-0 end-0 m-3">

                            </div>
                        </div>

                        <!-- (Included In This file Only)Manage Covid JS -->
                        <script src="assets/js/managecovid.js"></script>
<?php include 'includes/admin-footer.php';?>