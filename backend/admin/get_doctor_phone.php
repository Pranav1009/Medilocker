<?php

// Include necessary files and start the session
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected doctor number from the form
    $selectedDocNumber = $_POST['doctor_number'];

    // Query the database to get the doctor's phone number
    $stmt = $mysqli->prepare("SELECT doc_phone FROM his_docs WHERE doc_number = ?");
    $stmt->bind_param("s", $selectedDocNumber);
    $stmt->execute();
    $stmt->bind_result($doctorPhone);
    $stmt->fetch();
    $stmt->close();

    // Debugging statement
    echo "Debug: $selectedDocNumber, $doctorPhone";

    // Redirect to the second form (generate_otp.php) with doctor number and phone number as parameters
    header("Location: generate_otp.php?doc_number=$selectedDocNumber&doc_phone=$doctorPhone");
    exit();
}
?>
