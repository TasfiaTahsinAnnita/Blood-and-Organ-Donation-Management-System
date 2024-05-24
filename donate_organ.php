<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Donate Organ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<?php
$active = 'donate_organ';
include('head.php');
?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
        <div id="content-wrap" style="padding-bottom:50px;">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mt-4 mb-3">Donate Organ</h1>
                </div>
            </div>
            <form name="organ_donor" action="saveorgan.php" method="post">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="font-italic">Full Name<span style="color:red">*</span></div>
                        <div><input type="text" name="fullname" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="font-italic">Blood Group<span style="color:red">*</span></div>
                        <div>
                            <select name="blood" class="form-control" required>
                                <option value="" selected disabled>Select</option>
                                <?php
                                include 'conn.php';
                                $sql = "SELECT * FROM blood";
                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['blood_group']}'>{$row['blood_group']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-4 mb-4">
                        <div class="font-italic">Organ Name<span style="color:red">*</span></div>
                        <div><input type="text" name="organ" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="font-italic">Reason for Donation<span style="color:red">*</span></div>
                        <div><input type="text" name="reason" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="font-italic">Contact Number<span style="color:red">*</span></div>
                        <div><input type="text" name="contact" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="font-italic">Amount Demanded<span style="color:red">*</span></div>
                        <div><input type="text" name="amount" class="form-control" required></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="font-italic">Address<span style="color:red">*</span></div>
                        <div><textarea class="form-control" name="address" required></textarea></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
</div>

</body>

</html>
