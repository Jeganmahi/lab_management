<?php

require 'config.php';
include("session.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doj = mysqli_real_escape_string($db, $_POST['doj']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $file_name = $_FILES['photo']['name'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_name = $name . "." . $ext;
    $filePath = "images/profile/" . $file_name;

    // Retrieve the existing photo path from the database
    $query = "SELECT photo FROM details WHERE id='$s'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    $existingPhotoPath = $row['photo'];

    // Delete the existing photo if it exists
    if (file_exists($existingPhotoPath)) {
        unlink($existingPhotoPath);
    }

    // Move the new photo to the folder
    if (move_uploaded_file($file_tmp, $filePath)) {
        // File moved successfully
        $query = "UPDATE details SET photo='$filePath',name='$name', doj='$doj', phonenumber='$phone',address='$address',gender='$gender' WHERE id='$s'";
        $query_run = mysqli_query($db, $query);

        if ($query_run) {
            $res = [
                'status' => 200,
                'message' => 'Profile Updated Successfully'
            ];
            echo json_encode($res);
            return;
        }
    } else {
        // File move failed
        $res = [
            'status' => 500,
            'message' => 'Failed to move uploaded file'
        ];
        echo json_encode($res);
        return;
    }
} else {
    $res = [
        'status' => 500,
        'message' => 'Failed to Update Profile'
    ];
    echo json_encode($res);
}

?>
