<?php 
$pageTitle = "Visitor Pass";
include 'includes/header.php';?>

    <div class="col-12 mycontainer">
        <h2>Register a Visitor Pass</h2>
        <h6 class="mb-3 text-black-50">For visit in group at the same time slot, only one
            representative is required to register.</h6>

        <form action="visitorpass.php" method="POST" class="visitorForm">
            <!-- use $loggedInUnit to-->
            <input type="hidden" name="visitor-unit" value='<?=$loggedInUnit?>'>

            <!-- visitor details -->
            <h4>Visitor Details</h4>
            <div class="mb-3 visitorName">
                <label for="visitorname" class="form-label">Visitor Name</label>
                <input type="text" class="form-control w-50" id="visitorname"
                    placeholder="e.g Karry Wang" name="visitor-name">
            </div>
            <div class="mb-3 visitorIC">
                <label for="visitorname" class="form-label">Visitor IC Number</label>
                <input type="text" class="form-control w-50" id="visitoric"
                    placeholder="e.g 980605-03-7488 (with '-')" name="visitor-ic">
            </div>
            <div class="mb-3 visitorPhone">
                <label for="visitorphone" class="form-label">Visitor Phone</label>
                <input type="text" class="form-control w-50" id="visitorphone"
                    placeholder="e.g 012-3456789 (with '-')" name="visitor-phone">
            </div>

            <div class="mb-3 visitorCarModel">
                <label for="visitorcar" class="form-label">Visitor Car Model & Color</label>
                <input type="text" class="form-control w-50" id="visitorcar"
                    placeholder="e.g BMW M4 Blue" name="visitor-car">
            </div>
            <div class="mb-3 visitorCarNum">
                <label for="visitorcarnum" class="form-label">Visitor Car Register Number</label>
                <input type="text" class="form-control w-50" id="visitorcarnum"
                    placeholder="e.g PPP1234" name="visitor-carplate">
            </div>
            <br><br>

            <!-- Visitation details -->
            <h4>Visitation Details</h4>
            <h6 class="mt-4">Expected Visit Time</h6>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-auto">
                        <h6>Start Time:</h6>
                        <input type="datetime-local" class="form-control w-40"
                            id="datetime1" name="visitor-starttime">
                    </div>
                    <div class="col-auto">
                        <h6>End Time:</h6>
                        <input type="datetime-local" class="form-control w-40"
                            id="datetime2" name="visitor-endtime">
                    </div>
                </div>
            </div>
            
            <div class="mb-3 numOfVisitors">
                <h6 for="numofvisitors" class="form-label mt-4">Number of Visitor(s)</h6>
                <input type="number" class="form-control w-50" id="numofvisitors" placeholder="e.g 5" name="visitor-num">
            </div>
            <br><br>
            <input type="submit"  class="me-lg-3 btn btn_mygreen" name="visitorpass_btn">
        </form>

        <?php
        // Method To Submit Form
        if(isset($_POST['visitorpass_btn'])){
           $unit = $_POST['visitor-unit'];
           $name = $_POST['visitor-name'];
           $ic = $_POST['visitor-ic'];
           $phone = $_POST['visitor-phone'];
           $car = $_POST['visitor-car'];
           $carplate = $_POST['visitor-carplate'];
           $starttime = $_POST['visitor-starttime'];
           $endtime = $_POST['visitor-endtime'];
           $number = $_POST['visitor-num'];

           $query = mysqli_query($con, "INSERT INTO visitorpass VALUES ('','$unit','$name','$ic','$phone','$car','$carplate','$starttime','$endtime','$number')");
        }

        ?>

        <!-- Temp Button trigger modal -->
        <!-- TODO Put back into the form later -->
        <!-- <button type="" class="btn btn_mygreen" data-bs-toggle="modal"
            data-bs-target="#visitor-modal">Submit Application</button> -->

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
                    <th scope="col">Visitor Name</th>
                    <th scope="col">IC</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Car</th>
                    <th scope="col">Car Plate</th>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                    <th scope="col">No. of Visitors</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Get Visitor Pass for loggedIn Unit
                $query = mysqli_query($con, "SELECT * FROM visitorpass WHERE unit='$loggedInUnit' ORDER BY start_time DESC");

                if(mysqli_num_rows($query) > 0)
                {
                    foreach($query as $visitorpass)
                    {
                ?>
                        <tr>
                            <td><?= $visitorpass['visitor_name'] ?></td>
                            <td><?= $visitorpass['visitor_ic'] ?></td>
                            <td><?= $visitorpass['visitor_contact'] ?></td>
                            <td><?= $visitorpass['car_details'] ?></td>
                            <td><?= $visitorpass['car_plate'] ?></td>
                            <td><?= $visitorpass['start_time'] ?></td>
                            <td><?= $visitorpass['end_time'] ?></td>
                            <td><?= $visitorpass['visitor_num'] ?></td>
                        </tr>
                <?php
                        }
                    }
                    else{
                       echo "<td>You do not have any visitor pass previously</td>";
                    }
                ?>
            </tbody>
        </table>
    </div>

<?php include 'includes/footer.php';?>