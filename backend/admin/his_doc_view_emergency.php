<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();

?>

<!DOCTYPE html>
<html lang="en">

<?php include('assets/inc/head.php');?>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include("assets/inc/nav.php");?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include("assets/inc/sidebar.php");?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <!-- Display All Records from his_emergency Table -->
        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Emergency Records</a></li>
                                        <li class="breadcrumb-item active">View All</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">All Emergency Records</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Blood Group</th>
                                                <th>Phone Number</th>
                                                <th>Emergency Contact</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Immunization Date</th>
                                                <th>Imm Description</th>
                                                <th>Avg Blood Pressure</th>
                                                <th>Avg Oxygen Level</th>
                                                <th>Avg Sugar Level</th>
                                                <th>Allergy Desc 1</th>
                                                <th>Allergy Desc 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $ret = "SELECT * FROM his_emergency";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute();
                                                $res = $stmt->get_result();

                                                while ($row = $res->fetch_object()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row->FIRST_NAME; ?></td>
                                                    <td><?php echo $row->LAST_NAME; ?></td>
                                                    <td><?php echo $row->BLOOD_GROUP; ?></td>
                                                    <td><?php echo $row->PHONE_NUMBER; ?></td>
                                                    <td><?php echo $row->EMERGENCY_CONTACT; ?></td>
                                                    <td><?php echo $row->HEIGHT; ?></td>
                                                    <td><?php echo $row->WEIGHT; ?></td>
                                                    <td><?php echo $row->IMMUNIZATION_DATE; ?></td>
                                                    <td><?php echo $row->IMM_DESCRIPTION; ?></td>
                                                    <td><?php echo $row->AVG_BLOOD_PRESSURE; ?></td>
                                                    <td><?php echo $row->AVG_OXY_LEVEL; ?></td>
                                                    <td><?php echo $row->AVG_SUGAR_LEVEL; ?></td>
                                                    <td><?php echo $row->ALLERGY_DESC1; ?></td>
                                                    <td><?php echo $row->ALLERGY_DESC2; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include('assets/inc/footer.php');?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
