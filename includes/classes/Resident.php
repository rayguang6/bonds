<?php

class Resident{
    private $con;
    private $resident;

    public function __construct($con, $ic){
        $this->con = $con;
        $residentDetailsQuery = mysqli_query($con,"SELECT * FROM resident WHERE ic ='$ic'");
        $this->resident = mysqli_fetch_array($residentDetailsQuery);
    }

    public function getIc(){        
        return $this->resident['ic'];
    }
    public function getName(){        
        return $this->resident['name'];
    }

    public function getDob(){        

        $dob = $this->resident['dob'];
        // $formattedDate = date('Y-m-d', strtotime($dob));
        return $this->resident['dob'];
    }

    public function getGender(){        
        return $this->resident['gender'];
    }
    public function getRace(){        
        return $this->resident['race'];
    }
    public function getContact(){        
        return $this->resident['contact'];
    }
    public function getEmergencyContact(){        
        return $this->resident['emergency_contact'];
    }
    public function getEmail(){        
        return $this->resident['email'];
    }
    public function getCheckInDate(){
        return $this->resident['check_in_date'];
    }
    public function getProfilePic(){
        return $this->resident['profile_pic'];
    }
    public function getStatus(){
        return $this->resident['status'];
    }
    public function getPassword(){
        return $this->resident['password'];
    }
    public function getVaccineStatus(){
        return $this->resident['vaccine_status'];
    }

    // Get unit number from UNIT table by using IC as key
    public function getUnit(){
        $ic = $this->resident['ic'];
        $query = mysqli_query($this->con,"SELECT * FROM unit WHERE owner_ic ='$ic'" );
        $row = mysqli_fetch_array($query);
        // TODO: Error checking, Check if there is result
        
        return $row['unit_no'];
    }

    public function getCarPark(){
        $ic = $this->resident['ic'];
        $query = mysqli_query($this->con,"SELECT * FROM unit WHERE owner_ic ='$ic'" );
        $row = mysqli_fetch_array($query);
        // TODO: Error checking, Check if there is result
        
        return $row['car_park_id'];
    }

    // INSERT INTO `resident` (`ic`, `name`, `dob`, `gender`, `race`, `contact`, `emergency_contact`, `email`, `check_in_date`, `profile_pic`, `status`, `password`, `vaccine_status`) VALUES ('5', 'Miss Five', '2022-06-02 00:07:48.000000', 'female', 'british', '0123456789', '0135462722', 'missfive@gmail.com', '2022-06-02 00:07:48.000000', 'assets/images/profile-image.png', 'status', '5', 'fully vaccinated');
    public function createResident(){
        
    }

    // public function deleteResident($ic){
    //     $query = mysqli_query($this->con, "DELETE FROM resident WHERE ic='$ic'");
    // }

}

?>