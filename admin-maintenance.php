<?php 
$pageTitle = "Issues";
include 'includes/admin-header.php';?>

                        <div class="col-12 mycontainer mx-auto">
                            <button type="button" class="btn btn-primary" onclick="addSchedule()"><i
                                    class="bi bi-plus-square"></i> Create New Schedule</button>
                            <div class="title d-flex align-items-center mb-2">
                                <h2>Maintenance Schedules</h2>
                            </div>
                            <!-- Maintenance Table Start -->
                            <table class="table table-hover" id="MaintenanceTable">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="MaintenanceTableBody">

                                </tbody>
                            </table>
                            <!-- Maintenance Table End -->

                        </div>

                        <div class="col-12 mycontainer mt-4">
                            <div class="title d-flex align-items-center mb-2">
                                <h2>Resident Repair Requests</h2>
                            </div>
                            <!-- Request Table Start -->
                            <table class="table table-hover" id="RequestTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Unit Number</th>
                                        <th scope="col">Host Name</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Date Request</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="RequestTableBody">

                                </tbody>
                            </table>
                            <!-- Request Table End -->

                        </div>

                        <div class="col-12 mycontainer mt-4">
                            <div class="title d-flex align-items-center mb-2">
                                <h2>Resident Complaints</h2>
                            </div>
                            <!-- Complain Table Start -->
                            <table class="table table-hover" id="ComplainTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Unit Number</th>
                                        <th scope="col">Host Name</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Date Report</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="ComplainTableBody">

                                </tbody>
                            </table>
                            <!-- Complain Table End -->

                        </div>



                        <!-- Modal Template -->
                        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="AddModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="AddModalLabel">Create New Schedule: </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body" id="ModalBody">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Update/Delete Pop-up Modal Start-->
                        <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body d-flex flex-column align-items-center" id="alert-content">
                                    </div>
                                    <div class="modal-footer" id="alert-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Update/Delete Pop-up Modal End-->

                        <!-- (Included In This file Only) Maintenance JS -->
                        <script src="assets/js/maintenance.js"></script>


                        <!-- ***************************************************************
                            PUT YOUR CONTENT ABOVE (remember to change title)
                 *******************************************************************-->
                    </div><!-- END Row under Right Container -->
                </div>
                <!--END Container under Right Container  -->
            </div>
            <!--END Right Container  -->
        </div> <!-- END Row -->
    </div> <!-- END Outermost Container -->

<?php include 'includes/admin-footer.php';?>