<?php
    session_start();
    include('assets/inc/config.php');

    // Assuming you have a function to fetch all patient details
    $patientDetails = fetchAllPatientDetails($mysqli);

    if ($patientDetails) {
        // Return patient details as JSON
        echo json_encode(['success' => true, 'patients' => $patientDetails]);
    } else {
        echo json_encode(['success' => false]);
    }

    function fetchAllPatientDetails($mysqli) {
        // Customize this query based on your needs
        $query = "SELECT pat_fname, pat_lname, pat_ailment FROM his_patients ORDER BY RAND()";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $patients = array();
        while ($row = $result->fetch_assoc()) {
            $patients[] = $row;
        }

        return $patients;
    }
?>
