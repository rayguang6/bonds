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

    // public function getUnit(){        
    //     return $this->resident['name'];
    //     $residentDetailsQuery = mysqli_query(this->con,"SELECT * FROM unit WHERE ic ='$ic'");
    //     $this->resident = mysqli_fetch_array($residentDetailsQuery);
    // }

}

?>