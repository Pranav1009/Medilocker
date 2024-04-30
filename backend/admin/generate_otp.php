<?php

require __DIR__ . '/../../vendor/autoload.php';

use Twilio\Rest\Client;

// Include necessary files and start the session
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the doctor's phone number from the form
    $doctorPhone = $_POST['doc_phone'];
    if (!startsWith($doctorPhone, '+91')) {
        $doctorPhone = '+91' . $doctorPhone;
    }

    // Generate a random OTP (you can customize the length as needed)
    $otp = rand(1000, 9999);

    // Save the OTP in the session for verification
    $_SESSION['generated_otp'] = $otp;

    // Twilio configuration
    $accountSid = 'ACc9883e5662fa562bbe84493663c0cc28';
    $authToken  = '68e7a4bba67c4c61e93ef23fe27dfba4';
    $twilioPhone = '+1 413 754 0096';

    // Create a Twilio client
    $twilio = new Client($accountSid, $authToken);

    // Prepare the message
    $message = "Your OTP for verification is: $otp";

    try {
        // Send the OTP to the doctor's phone number
        $twilio->messages->create(
            $doctorPhone,
            [
                'from' => $twilioPhone,
                'body' => $message,
            ]
        );

        echo '<a href="javascript:void(0);" onclick="alert(\'OTP sent successfully to ' . $doctorPhone . '\');">Click here for alert</a>';

    } catch (Exception $e) {
        echo "Failed to send OTP: " . $e->getMessage();
    }
}

function startsWith($haystack, $needle)
{
    return $needle === "" || strpos($haystack, $needle) === 0;
}
?>
