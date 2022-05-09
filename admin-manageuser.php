<?php 
$pageTitle = "Manage Residents";
include 'includes/admin-header.php';?>

                        <div class="col-12 mycontainer mx-auto">
                            <div class="title d-flex align-items-center mb-2">
                                <h2>Resident Accounts</h2>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="addRow()"><i
                                    class="bi bi-plus-square"></i> Register New Resident</button>

                            <!-- User Table Start -->
                            <table class="table table-hover" id="UserTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Unit Number</th>
                                        <th scope="col">Host Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">IC Number</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Emergency Number</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="UserTableBody">

                                </tbody>
                            </table>
                            <!-- User Table End -->

                        </div>

                        <div class="col-12 mycontainer mt-4">
                            <div class="title d-flex align-items-center mb-2">
                                <h2>Stop Rental Requests</h2>
                            </div>
                            <!-- Request Table Start -->
                            <table class="table table-hover" id="RequestTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Unit Number</th>
                                        <th scope="col">Host Name</th>
                                        <th scope="col">Debt</th>
                                        <th scope="col">Date Request</th>
                                        <th scope="col">Contact Number</th>
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
                                <h2>Upcoming Visitors</h2>
                            </div>
                            <!-- Visitor Table Start -->
                            <table class="table table-hover" id="VisitorTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Visitor Name</th>
                                        <th scope="col">Visiting Unit</th>
                                        <th scope="col">Car Plate</th>
                                        <th scope="col">Visitor Contact</th>
                                    </tr>
                                </thead>
                                <tbody id="VisitorTableBody">

                                </tbody>
                            </table>
                            <!-- Visitor Table End -->
                        </div>

                        <!-- Modal Template -->
                        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="AddModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="AddModalLabel">Add New Resident: </h5>
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

                        <!-- (Included In This file Only)Manage User JS -->
                        <script src="assets/js/manageuser.js"></script>

<?php include 'includes/admin-footer.php';?>
