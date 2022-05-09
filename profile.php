<?php 
$pageTitle = "Profile";
include 'includes/header.php';?>

  <div class="container main-content-container">
    <div class="profile_container row my_container p-4">
      <div class="mycontainer col-9 d-flex flex-column justify-content-start">
        <form onsubmit="return confirmEdit();" id="mainForm">
          <div class="generalInformationSection">
            <h3>General Information</h3>
            <hr />
            <div class="row">
              <div class="col">
                <label for="profile-firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" value="Zheng Qian" id="profile-firstName" required
                  disabled />
              </div>
              <div class="col">
                <label for="profile-lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" value="Lim" id="profile-lastName" disabled required />
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="profile-Birthday" class="form-label">Day Of Birth</label>
                <input type="date" class="form-control" value="2001-05-28" id="profile-Birthday" disabled
                  required />
              </div>
              <div class="col">
                <label for="profile-Gender" class="form-label">Gender</label>
                <select name="profile-Gender" id="profile-Gender" disabled class="form-select" disabled
                  required>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Others</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="profile-Email" class="form-label">Email</label>
                <input type="email" class="form-control" value="limzhengqian12@gmail.com" id="profile-Email"
                  disabled required />
              </div>
              <div class="col">
                <label for="profile-ph" class="form-label">Phone Number</label>
                <input type="text" class="form-control" value="017-457 3538" id="profile-ph" disabled
                  required />
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="profile-ic" class="form-label">Identity Number</label>
                <input type="text" class="form-control" value="010528-02-0587" id="profile-ic" disabled
                  required />
              </div>
              <div class="col">
                <label for="profile-race" class="form-label">Race</label>
                <select name="profile-race" id="profile-race" class="form-select" disabled required>
                  <option value="Malay">Malay</option>
                  <option value="Chinese">Chinese</option>
                  <option value="Indian">Indian</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="profile-vaccinationStatus" class="form-label">Vaccination Status</label>
                <select name="profile-vaccinationStatus" id="profile-vaccinationStatus" class="form-select"
                  disabled required>
                  <option value="0">Not Vaccinated At All</option>
                  <option value="1">1st Dose</option>
                  <option value="2">2nd Dose</option>
                  <option value="3">3rd Dose (Booster)</option>
                </select>
              </div>
            </div>
          </div>

          <div id="editValidationBtn"></div>
          <div id="editSuggestion"></div>
          <button class="btn btn_mygreen w-25 mt-4" id="editBtn" onclick="edit()" type="button">
            <i class="me-2 fa fa-edit" aria-hidden="true"></i>Edit
          </button>
        </form>


        <div class="accomodationInformationSection" style="margin-top: 10%">
          <h3>Accomodation Information</h3>
          <hr />
          <div class="row">
            <div class="col">
              <label for="profile-blockNum" class="form-label">Block</label>
              <input type="text" class="form-control" value="Block D" id="profile-blockNum" disabled />
            </div>
            <div class="col">
              <label for="profile-roomNum" class="form-label">Room</label>
              <input type="text" class="form-control" value="A-10-13" id="profile-roomNum" disabled />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="profile-carPark" class="form-label">Carpark ID</label>
              <input type="text" class="form-control" value="A-10-13" id="profile-carPark" disabled />
            </div>
            <div class="col">
              <label for="profile-roomNum" class="form-label">Status</label>
              <input type="text" class="form-control" value="Tenant" id="profile-status" disabled />
            </div>
          </div>
        </div>
        <div>
          <button class="btn btn-danger w-25 mt-4" onclick="confirmDelete()">
            <i class="bi bi-trash3-fill" aria-hidden="true" style="margin-right: 10px"></i>Delete Account
          </button>
        </div>
      </div>
      <div class="minimizeProfileSide" id="minimizeProfileSide" onclick="toggleSide()">
        <div id="toggleSideButton2"></div>
        <img src="assets/images/profile-image.png" alt="profile-image">
        <h6>Zheng Qian, A-10-13</h6>
      </div>
      <div class="col-3" id="profileSideBar">
        <div class="profileImgSide" id="profileImgSide">
          <div onclick="toggleSide()" id="toggleSideButton"></div>

          <div class="image" style="margin-top: 20px;">
            <img src="assets/images/profile-image.png" alt="profile image" id="profile-image" />

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-camera-fill editImage button button_link" viewBox="0 0 16 16"
              onclick="changeProfileImage()">
              <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
              <path
                d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
            </svg>
          </div>
          <hr />
          <div class="details">
            <h2>Zheng Qian</h2>
            <h2>A-10-13</h2>
          </div>
          <div class="riskStatus">
            <i class="fa-solid fa-virus"></i>
            <div>
              <h5>COVID-19 Risk Status</h5>
              <h3 style="color: F3F8FF important">
                Low Risk No Symptom
              </h3>
            </div>
          </div>
          <div class="vacinnationStatus">
            <i class="fa-solid fa-syringe"></i>
            <div>
              <h5>COVID-19 Vaccination Status</h5>
              <h3>Fully Vaccinated</h3>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <!-- Pop-up Modal Start-->
  <div class="modal fade" id="alert-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body d-flex flex-column align-items-center">
          <div class="alert" role="alert"></div>
        </div>
        <div class="modal-footer" id="modal-footer">
          <button type="button" class="btn btn_mygreen" data-bs-dismiss="modal" id="yes-button"
            onclick="">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Pop-up Modal End-->

  <!-- This file only JS -->
  <script src="assets/js/profile.js"></script>
<?php include 'includes/footer.php';?>