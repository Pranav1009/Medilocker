<?php

session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify_otp'])) {
    // Get the entered OTP from the form
    $enteredOtp = $_POST['entered_otp'];

    // Get the previously generated OTP from the session
    $generatedOtp = $_SESSION['generated_otp'];

    // Validate the entered OTP
    if ($enteredOtp == $generatedOtp) {
        // Perform additional actions after successful verification
        echo '<script>alert("OTP verified successfully!");</script>';
        echo '<script>window.location.href = "his_doc_view_emergency.php";</script>';
        exit;
    } else {
        echo '<script>alert("Invalid OTP. Please try again.");</script>';
    }
}
?>
