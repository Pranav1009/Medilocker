<?php
    // Retrieve patient details from query parameters
    $patients = isset($_GET['patients']) ? json_decode($_GET['patients'], true) : [];

    // Display patient details in a table format
    echo '<!DOCTYPE html>
            <html lang="en">
                <head>
                    <!-- Add your head content here -->
                </head>
                <body>
                    <div id="patientDetailsTable">';
    
    echo '<table class="table table-bordered">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Ailment</th>
                </tr>
            </thead>
            <tbody>';

    // Iterate through each patient and add a row to the table
    foreach ($patients as $patient) {
        echo '<tr>
                <td>' . $patient['pat_fname'] . ' ' . $patient['pat_lname'] . '</td>
                <td>' . $patient['pat_ailment'] . '</td>
              </tr>';
    }

    echo '</tbody></table>';

    echo '      </div>
            </body>
        </html>';
?>
