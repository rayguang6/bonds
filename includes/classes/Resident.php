<?php

class Resident{
    private $con;
    private $resident;

    public function __construct($con, $ic){
        $this->con = $con;
        $residentDetailsQuery = mysqli_query($con,"SELECT * FROM resident WHERE ic ='$ic'");
        $this->resident = mysqli_fetch_array($residentDetailsQuery);
    }

    public function getName(){        
        return $this->resident['name'];
    }

    public function getProfilePic(){
        return $this->resident['profile_pic'];
    }

    // Get unit number from UNIT table by using IC as key
    public function getUnit(){
        $ic = $this->resident['ic'];
        $query = mysqli_query($this->con,"SELECT * FROM unit WHERE owner_ic ='$ic'" );
        $row = mysqli_fetch_array($query);
        
        return $row['unit_no'];
    }

    // INSERT INTO `resident` (`ic`, `name`, `dob`, `gender`, `race`, `contact`, `emergency_contact`, `email`, `check_in_date`, `profile_pic`, `status`, `password`, `vaccine_status`) VALUES ('5', 'Miss Five', '2022-06-02 00:07:48.000000', 'female', 'british', '0123456789', '0135462722', 'missfive@gmail.com', '2022-06-02 00:07:48.000000', 'assets/images/profile-image.png', 'status', '5', 'fully vaccinated');
    public function createResident(){
        
    }

    public function deleteResident($ic){
        $query = mysqli_query($this->con, "DELETE FROM resident WHERE ic='$ic'");
    }

}

?>