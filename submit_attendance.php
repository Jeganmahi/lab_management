<?php
require 'config.php';
include("session.php");
$query = "SELECT * FROM details WHERE id='$s'";
$query_run = mysqli_query($db, $query); // Execute the query
$student = mysqli_fetch_array($query_run);
     $lab = $student['curlab'];
// Include your database connection code here
// Check if the request is an AJAX request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Sanitize and validate the input data (add appropriate validation)
    $date = new DateTime(); // Create a new DateTime object
    $dateString = $date->format('Y-m-d H:i:s');
    $class = $_POST["class:"]; // Remove the ":"
    $session=$_POST["Session:"];
    $department = $_POST["Department:"];
   

    // Initialize an array to store any potential errors
    $errors = [];

    // Loop through the submitted attendance data
    foreach ($_POST as $key => $value) {
        
        if (strpos($key, "System_") === 0) {
            
            // Extract the system_number from the input name
            if (preg_match('/\d+/', $key, $matches)) {
                $systemNumber = $matches[0];
                // Extracted numeric part
            } 
            // The system_number exists in computer_systems, so insert attendance record
            $studentId = $_POST["System_" . $systemNumber]; // Get the student ID from the POST data
                    
            $query = "INSERT INTO attendance_records (student_id,computer_system_id,date,class,department,session,lab) VALUES('$studentId','$systemNumber','$dateString','$class','$department','$session','$lab')";
    $query_run = mysqli_query($db, $query);
    }
}
}    if ($query_run) {
    $response = [
        'status' => 200,
        'message' => 'Success'
    ];
    echo json_encode($response);
} else {
    $response = [
        'status' => 500,
        'message' => 'Details Not Updated'
    ];
    echo json_encode($response);
}

?>
