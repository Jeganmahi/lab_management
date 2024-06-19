<?php
require 'config.php';
include("session.php");
$query = "SELECT * FROM details WHERE id='$s'";
$query_run = mysqli_query($db, $query); // Execute the query
$student = mysqli_fetch_array($query_run);
    $lab = $student['curlab'];
    $name = $student['name'];
    $date = new DateTime(); // Create a new DateTime object
$dateString = $date->format('Y-m-d H:i:s');
if(isset($_POST['save_complaint']))
{

  	$type = mysqli_real_escape_string($db, $_POST['type']);
    $complaint = mysqli_real_escape_string($db, $_POST['complaint']);
    $query = "INSERT INTO complaint (name,curlab,type,complaint,action,date,id) VALUES('$name','$lab','$type ','$complaint',0,'$dateString','$s')";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}
if(isset($_POST['save_device']))
{

  	$systemname = mysqli_real_escape_string($db, $_POST['systemname']);
    $systemnumber = mysqli_real_escape_string($db, $_POST['systemnumber']);
    $os = mysqli_real_escape_string($db, $_POST['os']);
    $pd = mysqli_real_escape_string($db, $_POST['psdate']);
    $ld = mysqli_real_escape_string($db, $_POST['last']);
    $lab = mysqli_real_escape_string($db, $_POST['lab']);
    $query = "INSERT INTO computer_systems (system_name,lab_name,system_number,operating_system,purchase_date,last_maintenance_date) VALUES('$systemname','$lab','$systemnumber ','$os','$pd','$ld')";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}
if(isset($_POST['delete_details']))
{
    $student_id = mysqli_real_escape_string($db, $_POST['student_id3']);

    $query = "DELETE FROM complaint  WHERE uid='$student_id'";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}
if(isset($_POST['take_action']))
{
    $student_id = mysqli_real_escape_string($db, $_POST['student_id2']);

    $query = "UPDATE complaint set action=1  WHERE uid='$student_id'";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'action taken'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Error'
        ];
        echo json_encode($res);
        return;
    }
}
// fetch_complaint.php
// Include your database connection

if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];
    // Perform a SQL query to fetch complaint data using prepared statement
    $query = "SELECT * FROM complaint WHERE uid = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $complaint_data = $result->fetch_assoc();

    echo json_encode($complaint_data);
}
?>
