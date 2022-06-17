<?php
$pageTitle = "Profile";
include 'includes/header.php';
?>
<!-- 
  use <?php //echo $Resident->getName()
      ?>  to fetch dynamic   
-->

<div class="container main-content-container">
  <div class="profile_container row my_container p-4">
    <div class="mycontainer col-9 d-flex flex-column justify-content-start">
      <form onsubmit="return confirmEdit();" method="POST" action="profile_Edit.php" id="mainForm">
        <div class="generalInformationSection">
          <h3>General Information</h3>
          <hr />
          <div class="row">
            <div class="col">
              <label for="profile-name" class="form-label">Name</label>
              <input type="text" class="form-control" value=<?= "'" . $Resident->getName() . "'"; ?> id="profile-name" name="profile-name" required disabled />
            </div>
            <div class="col">
              <label for="profile-ic" class="form-label">Identity Number</label>
              <input type="text" class="form-control" value="<?= $Resident->getIc(); ?>" id="profile-ic" name="profile-ic" disabled required />
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label for="profile-dob" class="form-label">Date Of Birth (mm/dd/YYYY)</label>
              <input type="date" class="form-control" value="<?= $Resident->getDob(); ?>" id="profile-dob" name="profile-dob" disabled required />
            </div>
            <div class="col">
              <label for="profile-gender" class="form-label">Gender</label>
              <select name="profile-gender" id="profile-gender" disabled class="form-select" disabled required>
                <?php
                //use php to get the value inside DB and make it selected
                //make the current gender as selected 
                $currentGender = $Resident->getGender();
                $genderSelections = array("Male", "Female", "Other");

                $selectInputString = "";

                foreach ($genderSelections as $gender) {
                  if ($gender == $currentGender) {
                    $selectInputString .= "<option selected value='$currentGender'>$currentGender</option>";
                  } else {
                    $selectInputString .= "<option value='$gender'>$gender</option>";
                  }
                }
                echo $selectInputString;
                ?>
                <!-- <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option> -->
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="profile-email" class="form-label">Email</label>
              <input type="email" class="form-control" value="<?= $Resident->getEmail() ?>" id="profile-Email" name="profile-Email" disabled required />
            </div>
            <div class="col">
              <label for="profile-contact" class="form-label">Contact Number</label>
              <input type="text" class="form-control" value="<?= $Resident->getContact() ?>" id="profile-contact" name="profile-contact" disabled required />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="profile-emergencyContact" class="form-label">Emergency Contact</label>
              <input type="text" class="form-control" value="<?= $Resident->getEmergencyContact() ?>" id="profile-emergencyContact" name="profile-emergencyContact" disabled required />
            </div>
            <div class="col">
              <label for="profile-race" class="form-label">Race</label>
              <select name="profile-race" id="profile-race" name="profile-race" class="form-select" disabled required>
                <?php
                //make the current gender as selected 
                $currentRace = $Resident->getRace();
                $raceSelections = array("Malay", "Chinese", "Indian", "Other");

                $raceOptionString = "<option selected value='$currentRace'>$currentRace</option>";

                // then create the other 2 option input
                foreach ($raceSelections as $race) {
                  if ($race != $currentRace) {
                    $raceOptionString .= "<option value='$race'>$race</option>";
                  }
                }
                echo $raceOptionString;
                ?>
                <!-- <option value="Malay">Malay</option>
                  <option value="Chinese">Chinese</option>
                  <option value="Indian">Indian</option>
                  <option value="Others">Others</option> -->
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="profile-vaccinationStatus" class="form-label">Vaccination Status</label>

              <!-- Since it will not be editable, so changed it to text input instead of select box -->
              <input type="text" class="form-control" value="<?= $Resident->getVaccineStatus() ?>" id="profile-vaccinationStatus" disabled required />

              <!-- <select name="profile-vaccinationStatus" id="profile-vaccinationStatus" class="form-select"
                  disabled required>

                  <option value="0">Not Vaccinated At All</option>
                  <option value="1">1st Dose</option>
                  <option value="2">2nd Dose</option>
                  <option value="3">3rd Dose (Booster)</option>
                </select> -->
            </div>
          </div>
        </div>

        <div id="editValidationBtn"></div>
        <div id="editSuggestion"></div>
        <button class="btn btn_mygreen w-100 mt-4" id="editBtn" onclick="edit()" type="button">
          <i class="me-2 fa fa-edit" aria-hidden="true"></i>Edit
        </button>
      </form>
      <div class="accomodationInformationSection" style="margin-top: 10%">
        <h3>Accomodation Information</h3>
        <hr />
        <div class="row">
          <div class="col">
            <label for="profile-roomNum" class="form-label">Unit</label>
            <input type="text" class="form-control" value='<?= $Resident->getUnit() ?>' id="profile-roomNum" disabled />
          </div>
          <div class="col">
            <label for="profile-carPark" class="form-label">Carpark ID</label>
            <input type="text" class="form-control" value='<?= $Resident->getCarPark() ?>' id="profile-carPark" disabled />
          </div>
        </div>
      </div>
      <form onsubmit="return confirmChangePassword()" method="post" action="changePassword.php" id="changePasswordForm">
        <div class="changePasswordDiv" style="margin-top: 10%">
          <h3>Change Password</h3>
          <hr />
          <div class="row">
            <div class="col">
              <label for="profile-password" class="form-label">Current Password</label>
              <div class="row">
                <div class="col">
                  <input type="password" class="form-control" value=<?= "'" . $Resident->getPassword() . "'"; ?> id="profile-password" name="profile-password" required disabled />
                </div>
                <div class="col" style="margin-top:10px;">
                  <i class="bi bi-eye-slash" id="toggleOriginalPassword"></i>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="col">
                <label for="profile-newPassword" class="form-label">New Password</label>
                <div class="row">
                  <div class="col">
                    <input type="password" class="form-control" value="" placeholder="New Password Here" id="profile-newPassword" name="profile-newPassword" required oninput="checkPassword()" />
                  </div>
                  <div class="col" style="margin-top:10px;">
                    <i class="bi bi-eye-slash" id="toggleNewPassword"></i>
                  </div>
                </div>
              </div>
              <p id="samePassword" style="color: red; font-size:10px;"></p>
            </div>
          </div>
          <button class="btn btn-warning w-100 mt-4" style="color:aliceblue;" id="chgPassBtn" type="submit"><i style="margin-right: 10px;" class="bi bi-pencil-fill"></i>Change Password</button>
          <br />
          

        </div>
      </form>
      <hr/>
      
      <div class="dangerZone">
      <h3>Danger Zone</h3>
        <form onsubmit="return confirmDelete()" method="post" action="deleteAccount.php" id="deleteForm">
          <button class="btn btn-danger w-100 mt-4" id="deleteBtn" type="submit" value="Delete Account"><i style="margin-right: 10px;" class="bi bi-trash3" style="margin-right: 10px;"></i>Delete Account</button>
        </form>
      </div>
    </div>
    <div class="minimizeProfileSide" id="minimizeProfileSide" onclick="toggleSide()">
      <div id="toggleSideButton2"></div>
      <img src=<?php echo $Resident->getProfilePic() ?> alt="profile-image" class="small_profile_picture">
      <h6><?php echo $Resident->getName() ?></h6>
    </div>
      <div class="profileImgSide" id="profileImgSide">
        <div onclick="toggleSide()" id="toggleSideButton"></div>

        <div class="image" style="margin-top: 20px;">
          <img src=<?php echo $Resident->getProfilePic() ?> alt="profile image" id="profile-image" class=""> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill editImage button button_link" viewBox="0 0 16 16" onclick="changeProfileImage()">
            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
            <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
          </svg> </img>

         
        </div>
        <hr />
        <div class="details">
          <h2><?php echo $Resident->getName() ?></h2>
          <h2><?php echo $Resident->getUnit() ?></h2>
        </div>
        <?php
              if($Resident->getCovidStatus()=="Negative"){
                echo '
                <div class="riskStatus">
                <i class="fa-solid fa-virus"></i>
                <div>
                  <h5>COVID-19 Risk Status</h5>
                  <h3>Low Risk No Symptom</h3>
                  </div>
                </div>
                ';
              } 
              else if($Resident->getCovidStatus()=="Close Contact"){
                echo '
                <div class="riskStatus" style="background-color:orange; ">
                <i class="fa-solid fa-virus"></i>
                <div>
                  <h5>COVID-19 Risk Status</h5>
                  <h3>Close Contact</h3>
                  </div>
                </div>
                ';
              } 
              else if($Resident->getCovidStatus()=="Positive"){
                echo '
                <div class="riskStatus" style="background-color:red; ">
                <i class="fa-solid fa-virus"></i>
                <div>
                  <h5>COVID-19 Risk Status</h5>
                  <h3>Infected</h3>
                  </div>
                </div>
                ';
              } 
            ?>
        <div class="vacinnationStatus">
          <i class="fa-solid fa-syringe"></i>
          <div>
            <h5>COVID-19 Vaccination Status</h5>
            <?php
              if($Resident->getVaccineStatus()=="Not Vaccinated At All"){
                echo "<h3>Not Vaccinated at All</h3>"; 
              }
              else if($Resident->getVaccineStatus()=="1st Dose"){
                echo "<h3>First Dose</h3>"; 
              }
              else if($Resident->getVaccineStatus()=="2nd Dose"){
                echo "<h3>Second Dose</h3>"; 
              }
              else{
                echo "<h3>Fully Vaccinated (Third Dose)</h3>"; 
              }
            ?>
          </div>
        </div>


      </div>
    
  </div>
</div>

<!-- Pop-up Modal Start-->
<div class="modal fade" id="alert-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body d-flex flex-column align-items-center">
        <div class="alert" role="alert"></div>
      </div>
      <div class="modal-footer" id="modal-footer">
        <button type="button" class="btn btn_mygreen" data-bs-dismiss="modal" id="yes-button" onclick="">Yes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- Pop-up Modal End-->

<!-- This file only JS -->
<script type="text/javascript">
var email = "<?= $Resident->getEmail() ?>"; 
var name ="<?= $Resident->getName()  ?>"
$("#profile-newPassword").on('keyup',function(){
  let currentPass=document.getElementById("profile-newPassword").value
  let currentPass = md5(currentPass)
  let oriPass = document.getElementById("profile-password").value
  if(oriPass==currentPass){
    document.getElementById("samePassword").innerHTML="New password cannot same with previous password"
    document.getElementById("chgPassBtn").disabled=true;
    document.getElementById("chgPassBtn").className="btn btn-secondary w-25 mt-4";
    
  }
  else{
    document.getElementById("samePassword").innerHTML=""
    document.getElementById("chgPassBtn").disabled=false;
    document.getElementById("chgPassBtn").className="btn btn-warning w-25 mt-4";


  }
})

/********************** MD5 Encrypt Function in JS **********************/ 
function md5 (str) {
  var xl;

  var rotateLeft = function (lValue, iShiftBits) {
    return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
  };

  var addUnsigned = function (lX, lY) {
    var lX4, lY4, lX8, lY8, lResult;
    lX8 = (lX & 0x80000000);
    lY8 = (lY & 0x80000000);
    lX4 = (lX & 0x40000000);
    lY4 = (lY & 0x40000000);
    lResult = (lX & 0x3FFFFFFF) + (lY & 0x3FFFFFFF);
    if (lX4 & lY4) {
      return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
    }
    if (lX4 | lY4) {
      if (lResult & 0x40000000) {
        return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
      } else {
        return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
      }
    } else {
      return (lResult ^ lX8 ^ lY8);
    }
  };

  var _F = function (x, y, z) {
    return (x & y) | ((~x) & z);
  };
  var _G = function (x, y, z) {
    return (x & z) | (y & (~z));
  };
  var _H = function (x, y, z) {
    return (x ^ y ^ z);
  };
  var _I = function (x, y, z) {
    return (y ^ (x | (~z)));
  };

  var _FF = function (a, b, c, d, x, s, ac) {
    a = addUnsigned(a, addUnsigned(addUnsigned(_F(b, c, d), x), ac));
    return addUnsigned(rotateLeft(a, s), b);
  };

  var _GG = function (a, b, c, d, x, s, ac) {
    a = addUnsigned(a, addUnsigned(addUnsigned(_G(b, c, d), x), ac));
    return addUnsigned(rotateLeft(a, s), b);
  };

  var _HH = function (a, b, c, d, x, s, ac) {
    a = addUnsigned(a, addUnsigned(addUnsigned(_H(b, c, d), x), ac));
    return addUnsigned(rotateLeft(a, s), b);
  };

  var _II = function (a, b, c, d, x, s, ac) {
    a = addUnsigned(a, addUnsigned(addUnsigned(_I(b, c, d), x), ac));
    return addUnsigned(rotateLeft(a, s), b);
  };

  var convertToWordArray = function (str) {
    var lWordCount;
    var lMessageLength = str.length;
    var lNumberOfWords_temp1 = lMessageLength + 8;
    var lNumberOfWords_temp2 = (lNumberOfWords_temp1 - (lNumberOfWords_temp1 % 64))  64;
    var lNumberOfWords = (lNumberOfWords_temp2 + 1) * 16;
    var lWordArray = new Array(lNumberOfWords - 1);
    var lBytePosition = 0;
    var lByteCount = 0;
    while (lByteCount < lMessageLength) {
      lWordCount = (lByteCount - (lByteCount % 4))  4;
      lBytePosition = (lByteCount % 4) * 8;
      lWordArray[lWordCount] = (lWordArray[lWordCount] | (str.charCodeAt(lByteCount) << lBytePosition));
      lByteCount++;
    }
    lWordCount = (lByteCount - (lByteCount % 4))  4;
    lBytePosition = (lByteCount % 4) * 8;
    lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
    lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
    lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
    return lWordArray;
  };

  var wordToHex = function (lValue) {
    var wordToHexValue = \"\",
      wordToHexValue_temp = \"\",
      lByte, lCount;
    for (lCount = 0; lCount <= 3; lCount++) {
      lByte = (lValue >>> (lCount * 8)) & 255;
      wordToHexValue_temp = \"0\" + lByte.toString(16);
      wordToHexValue = wordToHexValue + wordToHexValue_temp.substr(wordToHexValue_temp.length - 2, 2);
    }
    return wordToHexValue;
  };

  var x = [],
    k, AA, BB, CC, DD, a, b, c, d, S11 = 7,
    S12 = 12,
    S13 = 17,
    S14 = 22,
    S21 = 5,
    S22 = 9,
    S23 = 14,
    S24 = 20,
    S31 = 4,
    S32 = 11,
    S33 = 16,
    S34 = 23,
    S41 = 6,
    S42 = 10,
    S43 = 15,
    S44 = 21;

  str = this.utf8_encode(str);
  x = convertToWordArray(str);
  a = 0x67452301;
  b = 0xEFCDAB89;
  c = 0x98BADCFE;
  d = 0x10325476;

  xl = x.length;
  for (k = 0; k < xl; k += 16) {
    AA = a;
    BB = b;
    CC = c;
    DD = d;
    a = _FF(a, b, c, d, x[k + 0], S11, 0xD76AA478);
    d = _FF(d, a, b, c, x[k + 1], S12, 0xE8C7B756);
    c = _FF(c, d, a, b, x[k + 2], S13, 0x242070DB);
    b = _FF(b, c, d, a, x[k + 3], S14, 0xC1BDCEEE);
    a = _FF(a, b, c, d, x[k + 4], S11, 0xF57C0FAF);
    d = _FF(d, a, b, c, x[k + 5], S12, 0x4787C62A);
    c = _FF(c, d, a, b, x[k + 6], S13, 0xA8304613);
    b = _FF(b, c, d, a, x[k + 7], S14, 0xFD469501);
    a = _FF(a, b, c, d, x[k + 8], S11, 0x698098D8);
    d = _FF(d, a, b, c, x[k + 9], S12, 0x8B44F7AF);
    c = _FF(c, d, a, b, x[k + 10], S13, 0xFFFF5BB1);
    b = _FF(b, c, d, a, x[k + 11], S14, 0x895CD7BE);
    a = _FF(a, b, c, d, x[k + 12], S11, 0x6B901122);
    d = _FF(d, a, b, c, x[k + 13], S12, 0xFD987193);
    c = _FF(c, d, a, b, x[k + 14], S13, 0xA679438E);
    b = _FF(b, c, d, a, x[k + 15], S14, 0x49B40821);
    a = _GG(a, b, c, d, x[k + 1], S21, 0xF61E2562);
    d = _GG(d, a, b, c, x[k + 6], S22, 0xC040B340);
    c = _GG(c, d, a, b, x[k + 11], S23, 0x265E5A51);
    b = _GG(b, c, d, a, x[k + 0], S24, 0xE9B6C7AA);
    a = _GG(a, b, c, d, x[k + 5], S21, 0xD62F105D);
    d = _GG(d, a, b, c, x[k + 10], S22, 0x2441453);
    c = _GG(c, d, a, b, x[k + 15], S23, 0xD8A1E681);
    b = _GG(b, c, d, a, x[k + 4], S24, 0xE7D3FBC8);
    a = _GG(a, b, c, d, x[k + 9], S21, 0x21E1CDE6);
    d = _GG(d, a, b, c, x[k + 14], S22, 0xC33707D6);
    c = _GG(c, d, a, b, x[k + 3], S23, 0xF4D50D87);
    b = _GG(b, c, d, a, x[k + 8], S24, 0x455A14ED);
    a = _GG(a, b, c, d, x[k + 13], S21, 0xA9E3E905);
    d = _GG(d, a, b, c, x[k + 2], S22, 0xFCEFA3F8);
    c = _GG(c, d, a, b, x[k + 7], S23, 0x676F02D9);
    b = _GG(b, c, d, a, x[k + 12], S24, 0x8D2A4C8A);
    a = _HH(a, b, c, d, x[k + 5], S31, 0xFFFA3942);
    d = _HH(d, a, b, c, x[k + 8], S32, 0x8771F681);
    c = _HH(c, d, a, b, x[k + 11], S33, 0x6D9D6122);
    b = _HH(b, c, d, a, x[k + 14], S34, 0xFDE5380C);
    a = _HH(a, b, c, d, x[k + 1], S31, 0xA4BEEA44);
    d = _HH(d, a, b, c, x[k + 4], S32, 0x4BDECFA9);
    c = _HH(c, d, a, b, x[k + 7], S33, 0xF6BB4B60);
    b = _HH(b, c, d, a, x[k + 10], S34, 0xBEBFBC70);
    a = _HH(a, b, c, d, x[k + 13], S31, 0x289B7EC6);
    d = _HH(d, a, b, c, x[k + 0], S32, 0xEAA127FA);
    c = _HH(c, d, a, b, x[k + 3], S33, 0xD4EF3085);
    b = _HH(b, c, d, a, x[k + 6], S34, 0x4881D05);
    a = _HH(a, b, c, d, x[k + 9], S31, 0xD9D4D039);
    d = _HH(d, a, b, c, x[k + 12], S32, 0xE6DB99E5);
    c = _HH(c, d, a, b, x[k + 15], S33, 0x1FA27CF8);
    b = _HH(b, c, d, a, x[k + 2], S34, 0xC4AC5665);
    a = _II(a, b, c, d, x[k + 0], S41, 0xF4292244);
    d = _II(d, a, b, c, x[k + 7], S42, 0x432AFF97);
    c = _II(c, d, a, b, x[k + 14], S43, 0xAB9423A7);
    b = _II(b, c, d, a, x[k + 5], S44, 0xFC93A039);
    a = _II(a, b, c, d, x[k + 12], S41, 0x655B59C3);
    d = _II(d, a, b, c, x[k + 3], S42, 0x8F0CCC92);
    c = _II(c, d, a, b, x[k + 10], S43, 0xFFEFF47D);
    b = _II(b, c, d, a, x[k + 1], S44, 0x85845DD1);
    a = _II(a, b, c, d, x[k + 8], S41, 0x6FA87E4F);
    d = _II(d, a, b, c, x[k + 15], S42, 0xFE2CE6E0);
    c = _II(c, d, a, b, x[k + 6], S43, 0xA3014314);
    b = _II(b, c, d, a, x[k + 13], S44, 0x4E0811A1);
    a = _II(a, b, c, d, x[k + 4], S41, 0xF7537E82);
    d = _II(d, a, b, c, x[k + 11], S42, 0xBD3AF235);
    c = _II(c, d, a, b, x[k + 2], S43, 0x2AD7D2BB);
    b = _II(b, c, d, a, x[k + 9], S44, 0xEB86D391);
    a = addUnsigned(a, AA);
    b = addUnsigned(b, BB);
    c = addUnsigned(c, CC);
    d = addUnsigned(d, DD);
  }

  var temp = wordToHex(a) + wordToHex(b) + wordToHex(c) + wordToHex(d);

  return temp.toLowerCase();
}
/********************** END MD5 Function in JS **********************/ 


</script>
<script src="assets/js/profile.js">
</script>
<?php include 'includes/footer.php'; ?>