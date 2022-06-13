<?php 
    $pageTitle = "Manage Residents";
    include 'includes/admin-header.php';

    // Create Resident Function and insert into unit
    if(isset($_POST['create_resident'])){
        $unit = $_POST['new-unit'];
        $ic = $_POST['new-ic'];
        $name = $_POST['new-name'];
        $dob = $_POST['new-dob'];
        $gender = $_POST['new-gender'];
        $race = $_POST['new-race'];
        $contact = $_POST['new-contact'];
        $emergency = $_POST['new-emergency'];
        $email = $_POST['new-email'];
        $datetime = $_POST['new-datetime'];
        $profilepic = "default profile picture";
        $covidstatus = $_POST['new-covidstatus'];
        // $password = $_POST['new-password'];
        $password = "bonds";//set default password as bonds
        $vaccinestatus = $_POST['new-vaccinestatus'];
        $rentalstatus = "renting";

        // Check If The IC Exist
        $checkIcQuery = "SELECT * FROM resident WHERE ic='$ic'";
        $checkIcQuery_run = mysqli_query($con, $checkIcQuery);

        if(mysqli_num_rows($checkIcQuery_run)>0){
            //means ic already exist
            $_SESSION['message'] = "An account with this IC has already exist";
            exit(0);
        }


        $query = mysqli_query($con, "INSERT INTO resident VALUES ('$ic','$name','$dob','$gender','$race','$contact','$emergency','$email','$datetime','$profilepic','$covidstatus','$password','$vaccinestatus','$rentalstatus')");
        $query = mysqli_query($con, "UPDATE unit SET owner_ic='$ic' WHERE unit_no='$unit'");//Need to pre create the unit in order to assign the unit to resident
    }

?>

<script src="assets/js/manageuser.js"></script>

<script>
	// prevent form resubmission
	if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
	}
</script>

                        <!-- Toast Notification Container at bottom right-->
                        <div aria-live="polite" aria-atomic="true" class="position-relative" style="z-index: 100;">
                            <div class="toast-container position-fixed bottom-0 end-0 m-3">

                            </div>
                        </div>

                        <div class="col-12 mycontainer mx-auto">
                            <div class="title d-flex align-items-center mb-2">
                                <h2>Resident Accounts</h2>
                            
                            <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addResidentModal"><i
                                    class="bi bi-plus-square"></i> Register New Resident</button>

                            </div>
                            <!-- Resident Table Start -->
                            <table class="table table-hover" id="ResidentTable">
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
                                <tbody id="ResidentTableBody">

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
                                                    <td><?= $resident['gender'] ?></td>
                                                    <td><?= $resident['ic'] ?></td>
                                                    <td><?= $resident['contact'] ?></td>
                                                    <td><?= $resident['emergency_contact'] ?></td>
                                                    <td>
                                                        <button type="button" value="<?=$resident['ic'];?>" class='btn editResidentBtn'><i class='bi bi-pencil-square text-primary'></i></button>
                                                        <button type="button" value="<?=$resident['ic'];?>" class='btn deleteResidentBtn'><i class='bi bi-trash3 text-danger'></i></button>
                                                    </td>
                                                </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                  
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

                        <!-- ################################################################### -->
                                                <!-- MODAL POPUP -->
                        <!-- ################################################################### -->

                        <!-- Modal Template -->
                        <!-- <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="AddModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="AddModalLabel">Add New Residents: </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body" id="ModalBody">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- addResidentModal -->
                        <div class="modal fade" id="addResidentModal" tabindex="-1" aria-labelledby="AddModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="AddModalLabel">Add New Resident: </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body" id="edit">
                                        <form method="POST" action="admin-manageuser.php">
                                            <div class="mb-3">
                                                <label for="unit" class="col-form-label">Unit:</label>
                                                <?php
                                                    $dropdown = '<select name="new-unit" required>';
                    
                                                    $query = mysqli_query($con, "SELECT * FROM unit WHERE owner_ic=''");
                                                    while($row = mysqli_fetch_array($query)) {
                                                        $unit_no = $row['unit_no'];
                                        
                                                        $dropdown = $dropdown . "<option value='$unit_no'>$unit_no</option>";
                                                    }

                                                    echo $dropdown. "</select>";
                                                
                                                ?>
                                                <!-- <input type="text" name="new-unit" class="form-control" id="unit" placeholder="A-10-13" required> -->
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="col-form-label">Resident Name:</label>
                                                <input type="text" name="new-name" class="form-control" id="name" required placeholder="Full Name Here...">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ic" class="col-form-label">IC Number: (YYMMDD-XX-XXXX)</label>
                                                <input type="text" class="form-control" name="new-ic" id="ic" placeholder="010616-14-1303" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="race" class="col-form-label">Race:</label>
                                                <select name="new-race" id="race">
                                                    <option value="Malay">Malay</option>    
                                                    <option value="Chinese">Chinese</option>
                                                    <option value="India">India</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="dob" class="col-form-label">Date Of Birth:</label>
                                                <input type="date" class="form-control" id="dob" name="new-dob" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="gender" class="col-form-label">Gender:</label>
                                                <input type="radio" id="M" name="new-gender" value="Male" required checked>
                                                <label for="M">Male</label>
                                                <input type="radio" id="F" name="new-gender" value="Female" required>
                                                <label for="F">Female</label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="contact" class="col-form-label">Phone Number:</label>
                                                <input type="text" class="form-control" id="contact" name="new-contact" placeholder="012-3456789" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="emergency" class="col-form-label">Emergency Phone Number: </label>
                                                <input type="text" class="form-control" id="emergency" name="new-emergency" placeholder="012-3456789" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="col-form-label">Email Address:</label>
                                                <input type="email" class="form-control" id="email" name="new-email" placeholder="example@mail.com" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date-move-in" class="col-form-label">Date Move In:</label>
                                                <input type="datetime-local" class="form-control" id="date-move-in" name="new-datetime" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="covidstatus" class="col-form-label">Covid Status:</label>
                                                <!-- <input type="text" class="form-control" id="covidstatus" name="new-covidstatus" required> -->
                                                <select name="new-covidstatus" id="covidstatus">
                                                        <option value="Negative">Negative</option>
                                                        <option value="Close Contact">Close Contact</option>
                                                        <option value="Positive">Positive</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vaccinestatus" class="col-form-label">Vaccine Status:</label>
                                                <!-- select input later -->
                                                <select name="new-vaccinestatus" id="vaccinestatus">
                                                        <option value="Not Vaccinated At All">Not Vaccinated At All</option>
                                                        <option value="1st Dose">1st Dose</option>
                                                        <option value="2nd Dose">2nd Dose</option>
                                                        <option value="3rd Dose (Booster)">3rd Dose (Booster)</option>
                                                </select>
                                                
                                                <!-- <input type="text" class="form-control" id="vaccinestatus" name="new-vaccinestatus" required> -->
                                            </div>
                                            
                                            <!-- <div class="mb-3">
                                                <label for="password" class="col-form-label">Password: </label>
                                                <input type="password" class="form-control" id="password" name="new-password" required>
                                            </div> -->
                                            <input type="submit"  class="me-lg-3 btn btn-primary" id="submit" name="create_resident">
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- addResidentModal END -->

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

                        <!-- Edit Modal Popup-->
                            <div class="modal fade" id="editResidentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">My Edit Resident</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form id="updateResident">
                                        <div class="modal-body">

                                            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                                            <input type="hidden" name="resident_ic" id="resident_ic" >

                                            <div class="mb-3">
                                                <label for="">IC</label>
                                                <input type="text" name="editResident-ic" id="editResident-ic" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Name</label>
                                                <input type="text" name="editResident-name" id="editResident-name" class="form-control" />
                                            </div>
                                            <!-- Date Input -->
                                            <!-- <div class="mb-3">
                                                <label for="">Birthdate</label>
                                                <input type="text" name="editResident-dob" id="editResident-dob" class="form-control" />
                                            </div> -->
                                            <div class="mb-3">
                                                <label for="">Gender</label>
                                                <input type="text" name="editResident-gender" id="editResident-gender" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Race</label>
                                                <input type="text" name="editResident-race" id="editResident-race" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Contact</label>
                                                <input type="text" name="editResident-contact" id="editResident-contact" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Emergency Contact</label>
                                                <input type="text" name="editResident-emergencycontact" id="editResident-emergencycontact" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Email</label>
                                                <input type="text" name="editResident-email" id="editResident-email" class="form-control" />
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label for="">Check In Date</label>
                                                <input type="text" name="editResident-checkindate" id="editResident-checkindate" class="form-control" />
                                            </div> -->
                                            <div class="mb-3">
                                                <label for="">Profile Picture</label>
                                                <input type="text" name="editResident-profile_pic" id="editResident-profile_pic" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Status</label>
                                                <input type="text" name="editResident-status" id="editResident-status" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Password</label>
                                                <input type="password" name="editResident-password" id="editResident-password" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Vaccine Status</label>
                                                <input type="text" name="editResident-vaccinestatus" id="editResident-vaccinestatus" class="form-control" />
                                            </div>
                                           
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Resident</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        <!-- Edit Modal Popup END-->

                        <!-- (Included In This file Only)Manage User JS -->
                        


<?php include 'includes/admin-footer.php';?>
