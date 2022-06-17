<?php
    if(isset($_POST['covid_report_btn'])) {
        //Get new report ID
        $report_id = (int)mysqli_fetch_array(mysqli_query($con, "SELECT MAX(report_id) FROM covidreport"))[0];
        $active_cases = (int)mysqli_fetch_array(mysqli_query($con, "SELECT active_cases FROM covidreport WHERE report_id='$report_id'"))[0];
        $report_id += 1;
        echo "<script type='text/javascript'>
        $(document).ready(function(){
        $('#myModal').modal('show');
        });
        </script>";

        // Method To Submit Form
        $covid_unit = $_POST['covid-unit'];
        $report_for = $_POST['covid-report_for'];

        //submit only if it is a different status
        if($report_for!=$Resident->getCovidStatus()){
            if(($Resident->getCovidStatus() == "Negative" or $Resident->getCovidStatus() == "Close Contact")
            and $report_for=="Positive"){
                $active_cases +=1;
            }else if(($report_for == "Negative" or $report_for == "Close Contact")
            and $Resident->getCovidStatus()=="Positive"){
                $active_cases -=1;
            }
            $query = "UPDATE resident SET covid_status='$report_for' WHERE ic='$LoggedInIC'";
            $query_run = mysqli_query($con, $query);
            // $date = $_POST['datetime'];
            $date = date("Y-m-d");
            
            // $myimage = addslashes(file_get_contents($_FILES['covid-evidence']['name']));
            $imageName = ($_FILES['covid-evidence']['name']);
            $imageData = file_get_contents($_FILES['covid-evidence']['tmp_name']);
            $imageType = ($_FILES['covid-evidence']['type']);
            // $file_ Type - pathinfo($target_file_path, $PATHINFO EXTENSION);
            $query = mysqli_query($con, "INSERT INTO covidreport VALUES ('$report_id','$covid_unit','covid','$report_for','empty','$date','$active_cases')");

            // Upload Image
            $target_Dir = "assets/images/";
            $filename = basename($_FILES["covid-evidence"]["name"]);
            $target_file_path=$target_Dir.$filename;

            if(move_uploaded_file($_FILES[ "covid-evidence"]["tmp_name"], $target_file_path)){
                $sql = "UPDATE covidreport SET evidence='". $target_file_path."' WHERE report_id='".$report_id."'";
                mysqli_query($con,$sql);
            } 
        }
    }

    //get Date for dynamic current Date and time in webpage
    function getDateNow($offset,$amount,$format){
        $Date = date("d-M-Y");
        return trim(date($format, strtotime($Date.$offset."".$amount."")), "'");

    }

    //get all covid report for graph
    function getCurrentReport(){
        $blocks = array("A", "B", "C", "D");
        $blockcount = array();
        foreach ($blocks as $block) {
            $covid_report = mysqli_fetch_array(mysqli_query(connection(), 
            "SELECT COUNT(name) FROM resident WHERE covid_status='Positive' AND 
            ic IN (SELECT owner_ic FROM unit WHERE unit_no LIKE '".$block."%')"));
            array_push($blockcount, $covid_report);
        }
        return $blockcount;
    }

    getActiveCases();
    function getActiveCases(){
        // $covid_report = mysqli_fetch_array(mysqli_query(connection(), 
        // "SELECT active_cases FROM covidreport WHERE report_id in (SELECT MAX(report_id) FROM covidreport)"));
        // return $covid_report[0];

        $covid_report = mysqli_fetch_array(mysqli_query(connection(), 
            "SELECT COUNT(name) FROM resident WHERE covid_status='Positive'"));
            
        return $covid_report[0];
    }

    function getNewCases(){
        $today = date("Y-m-d");
        // $covid_report = mysqli_fetch_array(mysqli_query(connection(), 
        // "SELECT COUNT(active_cases) FROM covidreport WHERE report_for_status='Positive' AND date='$today'"));
        // return $covid_report[0];
        $covid_report = mysqli_fetch_array(mysqli_query(connection(), 
        "SELECT * FROM covidcases WHERE date='$today'"));
        return $covid_report['new'];
    }
    
    function createWeekArray(){
        $weekArr = array();
        for ($x = 7; $x >= 1; $x--) {
            array_push($weekArr, getDateNow(-$x,"days","'d M Y'"));
        }
        return $weekArr;
    }

    function getWeeklyReport(){
        $weekArr = array();
        for ($x=7; $x>=1; $x--) {
            array_push($weekArr, getDateNow(-$x,"days","'Y-m-d'"));
        }
        $activeArr = array();
        $newArr = array();
        foreach ($weekArr as $day) {
            $covid_report = mysqli_fetch_array(mysqli_query(connection(), 
            // "SELECT active_cases FROM covidreport WHERE report_id in (SELECT MAX(report_id) FROM covidreport WHERE date = '".$day."')"));
            "SELECT active FROM covidcases WHERE date ='$day'"));
            if($covid_report == null){
                array_push($activeArr, 0);
            }else{
                array_push($activeArr, $covid_report[0]);
            }
            $covid_report2 = mysqli_fetch_array(mysqli_query(connection(), 
            // "SELECT COUNT(report_id) FROM covidreport WHERE report_for_status='Positive' AND date = '".$day."'"));
            "SELECT new FROM covidcases WHERE date ='$day'"));
            if($covid_report2 == null){
                array_push($newArr, 0);
            }else{
                array_push($newArr, $covid_report2[0]);
            }
        }
        return array($activeArr,$newArr);
    }

    function createMonthArray(){
        $month = date("m",strtotime(getDateNow(-1,"months","'d-M-Y'")));
        $year = date("Y",strtotime(getDateNow(-1,"months","'d-M-Y'")));
        $monthArr = array();
        for ($x=1; $x<=cal_days_in_month(CAL_GREGORIAN, $month, $year); $x++){
            array_push($monthArr, $x);
        }
        return $monthArr;
    }

    function getMonthlyReport(){
        $month = date("m",strtotime(getDateNow(-1,"months","'d-M-Y'")));
        $year = date("Y",strtotime(getDateNow(-1,"months","'d-M-Y'")));
        $monthArr = array();
        for ($x=1; $x<=cal_days_in_month(CAL_GREGORIAN, $month, $year); $x++) {
            array_push($monthArr, date('Y-m-d',strtotime($year."-".$month."-".$x)));
        }

        $monthlyReport = array();
        foreach ($monthArr as $day) {
            $covid_report = mysqli_fetch_array(mysqli_query(connection(), 
            // "SELECT COUNT(report_id) FROM covidreport WHERE report_for_status='Positive' AND date = '".$day."'"));
            "SELECT active FROM covidcases WHERE date ='$day'"));
            if($covid_report == null){
                // TODO:
                array_push($monthlyReport, 0);
            }else{
                array_push($monthlyReport, $covid_report[0]);
            }
        }
        return $monthlyReport;
    }

?>