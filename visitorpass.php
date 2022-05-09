<?php 
$pageTitle = "Visitor Pass";
include 'includes/header.php';?>

    <div class="col-12 mycontainer">
        <h2>Register a Visitor Pass</h2>
        <h6 class="mb-3 text-black-50">For visit in group at the same time slot, only one
            representative is required to register.</h6>

        <form action="visitorpass.php" method="POST" class="visitorForm">
            <!-- visitor details -->
            <h4>Visitor Details</h4>
            <div class="mb-3 visitorName">
                <label for="visitorname" class="form-label">Visitor Name</label>
                <input type="text" class="form-control w-50" id="visitorname"
                    placeholder="e.g Karry Wang">
            </div>
            <div class="mb-3 visitorIC">
                <label for="visitorname" class="form-label">Visitor IC Number</label>
                <input type="text" class="form-control w-50" id="visitoric"
                    placeholder="e.g 980605-03-7488 (with '-')">
            </div>
            <div class="mb-3 visitorPhone">
                <label for="visitorphone" class="form-label">Visitor Phone</label>
                <input type="text" class="form-control w-50" id="visitorphone"
                    placeholder="e.g 012-3456789 (with '-')">
            </div>

            <div class="mb-3 visitorCarModel">
                <label for="visitorcar" class="form-label">Visitor Car Model & Color</label>
                <input type="text" class="form-control w-50" id="visitorcar"
                    placeholder="e.g BMW M4 Blue">
            </div>
            <div class="mb-3 visitorCarNum">
                <label for="visitorcarnum" class="form-label">Visitor Car Register Number</label>
                <input type="text" class="form-control w-50" id="visitorcarnum"
                    placeholder="e.g PPP1234">
            </div>
            <br><br>

            <!-- Visitation details -->
            <h4>Visitation Details</h4>
            <h6 class="mt-4">Expected Visit Time</h6>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-auto">
                        <h6>Start Time:</h6>
                        <input type="datetime-local" class="form-control w-40" name="datetime1"
                            id="datetime1">
                    </div>
                    <div class="col-auto">
                        <h6>End Time:</h6>
                        <input type="datetime-local" class="form-control w-40" name="datetime2"
                            id="datetime2">
                    </div>
                </div>
            </div>
            <h6 for="visitingaddress" class="form-label mt-4">Visiting Address at <img
                    src="assets/images/resident.png" alt="Bonds Logo" width="75"></h6>
            <div class="container mb-3">
                <div class="row">
                    <div class="col-auto">
                        <select class="form-select visitingBlock"
                            aria-label="Default select example">
                            <option selected>Block</option>
                            <option value="A">Block A</option>
                            <option value="B">Block B</option>
                            <option value="C">Block C</option>
                            <option value="C">Block D</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <input type="text" class="form-control w-2 visitingFloor" id="visitingFloor"
                            placeholder="Floor">
                    </div>
                    <div class="col-1">
                        <input type="text" class="form-control w-2 visitingUnit" id="visitingUnit"
                            placeholder="Unit">
                    </div>
                </div>
            </div>
            <div class="mb-3 numOfVisitors">
                <h6 for="numofvisitors" class="form-label mt-4">Number of Visitor(s)</h6>
                <input type="text" class="form-control w-50" id="numofvisitors" placeholder="e.g 5">
            </div>
            <br><br>
        </form>

        <!-- Temp Button trigger modal -->
        <!-- TODO Put back into the form later -->
        <button type="" class="btn btn_mygreen" data-bs-toggle="modal"
            data-bs-target="#visitor-modal">Submit Application</button>

        <!-- Confirmation Popup Modal -->
        <div class="modal fade" id="visitor-modal" tabindex="-1"
            aria-labelledby="visitor-modalLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex flex-column align-items-center">
                        <div class="mx-auto">
                            <img src="https://cdn.dribbble.com/users/251873/screenshots/9289747/13540-sign-for-success-alert.gif"
                                alt="success-image" width="200">
                        </div>
                        <div class="alert" role="alert">
                            Submitted Successfully! Report will be generated!
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

    <div class="col-12 mycontainer mt-4" style='overflow-x:auto; width:100%;position:relative;'>
        <h2>Your History</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Visitor Name</th>
                    <th scope="col">Car Registration Number</th>
                    <th scope="col">No. of Visitors</th>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4 April 2022</td>
                    <td>Mr Suddenly</td>
                    <td>PNG6779</td>
                    <td>5</td>
                    <td>1000</td>
                    <td>1100</td>
                    <td><i class="ms-1 fa fa-download" aria-hidden="true"></i><i
                            class="ms-1 fa fa-eye" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>3 April 2022</td>
                    <td>Mr Handsome</td>
                    <td>WAE322</td>
                    <td>1</td>
                    <td>1500</td>
                    <td>1600</td>
                    <td><i class="ms-1 fa fa-download" aria-hidden="true"></i><i
                            class="ms-1 fa fa-eye" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>1 April 2022</td>
                    <td>Ms May</td>
                    <td>KKT9937</td>
                    <td>3</td>
                    <td>1200</td>
                    <td>1300</td>
                    <td><i class="ms-1 fa fa-download" aria-hidden="true"></i><i
                            class="ms-1 fa fa-eye" aria-hidden="true"></i></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php include 'includes/footer.php';?>