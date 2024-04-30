<div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="his_admin_dashboard.php">
                                    <i class="fe-airplay"></i>
                                    <span> Dashboard </span>
                                </a>
                                
                            </li>
                            <li class="has-submenu">
    <a href="#">
        <i class="mdi mdi-alert"></i>Emergency
    </a>

    <ul class="submenu">
        <li>
        <!--<a href="#" id="generateOtpLink">Generate OTP</a>-->
        <!DOCTYPE html>
<html lang="en">
<head>
<style>
    #sidebar-menu li.has-submenu a[href='#'] {
        color: red !important;
        font-weight: bold;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate OTP</title>
</head>
<body>
<style>
    #otpForm {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: #d9534f; /* Bootstrap's danger color */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #c9302c; /* Darker shade on hover */
    }
</style>

<form id="otpForm" method="post" action="generate_otp.php">
    <label for="doc_number">Select Doctor's Number:</label>
    <select name="doc_number" id="docNumberSelect" required>
        <?php
        // Fetch doctor numbers and phone numbers from the database
        $stmt = $mysqli->prepare("SELECT doc_number, doc_phone FROM his_docs");
        $stmt->execute();
        $result = $stmt->get_result();

        // Create dropdown options with both doc_number and doc_phone
        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"$row[doc_number]\" data-docphone=\"$row[doc_phone]\">$row[doc_number]</option>";
        }
        ?>
    </select>

    <!-- Hidden input to store the fetched phone number -->
    <input type="hidden" name="doc_phone" id="docPhoneInput">

    <!-- Button to fetch and submit the form -->
    <button type="button" onclick="submitForm()">Generate OTP</button>

    <script>
        function submitForm() {
            // Get the selected doc_number and corresponding doc_phone
            var docNumberSelect = document.getElementById('docNumberSelect');
            var selectedDocNumber = docNumberSelect.value;
            var selectedDocPhone = docNumberSelect.options[docNumberSelect.selectedIndex].getAttribute('data-docphone');

            // Set the fetched doc_phone in the hidden input field
            var docPhoneInput = document.getElementById('docPhoneInput');
            docPhoneInput.value = selectedDocPhone;

            // Submit the form
            document.getElementById('otpForm').submit();
        }
    </script>
</form>
<form method="post" action="validate_otp.php">
    <label for="entered_otp">Enter OTP received:</label>
    <input type="text" name="entered_otp" required>
    <button type="submit" name="verify_otp">Verify OTP</button>
</form>



</body>
</html>






        </li>
    </ul>
</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fab fa-accessible-icon "></i>
                                    <span> Patients </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_register_patient.php">Register Patient</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_patients.php">View Patients</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_patient.php">Manage Patients</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_discharge_patient.php">Discharge Patients</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_transfer.php">Patient Transfers</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-doctor"></i>
                                    <span> Employees </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_employee.php">Add Employee</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_employee.php">View Employees</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_employee.php">Manage Employees</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_assaign_dept.php">Assign Department</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_transfer_employee.php">Transfer Employee</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-pill"></i>
                                    <span> Pharmacy </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_pharm_cat.php">Add Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_pharm_cat.php">View Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_pharm_cat.php">Manage Pharm Category</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_pharmaceuticals.php">Add Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_pharmaceuticals.php">View Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_pharmaceuticals.php">Manage Pharmaceuticals</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_presc.php">Add Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_presc.php">View Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_presc.php">Manage Prescriptions</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-cash-multiple "></i>
                                    <span> Accounting </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_acc.payable.php">Add Acc. Payable</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_acc_payable.php">Manage Acc. Payable</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_acc_receivable.php">Add Acc. Receivable</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_acc_receivable.php">Manage Acc. Receivable</a>
                                    </li>
                                    <hr>
                                    
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" fas fa-funnel-dollar "></i>
                                    <span> Inventory </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li>
                                        <a href="his_admin_pharm_inventory.php">Pharmaceuticals</a>
                                    </li>

                                    <li>
                                        <a href="his_admin_equipments_inventory.php">Assets</a>
                                    </li>
                                    
                                </ul>
                            </li>
                
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-share"></i>
                                    <span> Reporting </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_inpatient_records.php">InPatient Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_outpatient_records.php">OutPatient Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_employee_records.php">Employee Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_pharmaceutical_records.php">Pharmaceutical Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_accounting_records.php">Accounting Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_medical_records.php">Medical Records</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-file-text"></i>
                                    <span> Medical Records </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_medical_record.php">Add Medical Record</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_medical_record.php">Manage Medical Records</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-flask"></i>
                                    <span> Laboratory </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_patient_lab_test.php">Patient Lab Tests</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_lab_result.php">Patient Lab Results</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_lab_vitals.php">Patient Vitals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_employee_lab_vitals.php">Employee Vitals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_lab_report.php">Lab Reports</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_lab_equipment.php">Add Lab Equipment</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_lab_equipment.php">Manage Lab Equipments</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-scissors-cutting "></i>
                                    <span> Surgical / Theatre </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_equipment.php">Add Equipment</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_equipment.php">Manage Equipments</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_add_theatre_patient.php">Add Patient</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_theatre_patient.php">Manage Patients</a>
                                    </li>

                                    <li>
                                        <a href="his_admin_surgery_records.php">Surgery Records</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-cash-refund "></i>
                                    <span> Payrolls </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_payroll.php">Add Payroll</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_payrolls.php">Manage Payrolls</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_generate_payrolls.php">Generate Payrolls</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fas fa-user-tag"></i>
                                    <span> Vendors </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_vendor.php">Add Vendor</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_vendor.php">Manage Vendors</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fas fa-lock"></i>
                                    <span> Password Resets </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_manage_password_resets.php">Manage</a>
                                    </li>
                                                                        
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>