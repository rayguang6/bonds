<?php
include("../../config/config.php");

// DELETE 
if(isset($_POST['delete_resident']))
{
    $resident_id = mysqli_real_escape_string($con, $_POST['resident_id']);

    $query = "DELETE FROM resident WHERE ic='$resident_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Resident Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Resident Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

// Get Data when clicked the edit button
if(isset($_GET['resident_id']))
{
    $resident_id = mysqli_real_escape_string($con, $_GET['resident_id']);

    $query = "SELECT * FROM resident WHERE ic='$resident_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $resident = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Resident Fetch Successfully by id',
            'data' => $resident
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Resident Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

// Update Student
if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['editResident-ic']);
    $name = mysqli_real_escape_string($con, $_POST['editResident-name']);
    $contact = mysqli_real_escape_string($con, $_POST['editResident-contact']);

    if($name == NULL )
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE resident SET name='$name', contact='$contact' 
                WHERE ic='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}

?>