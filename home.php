<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    </style>
</head>

<body>
    <div class="header">
        <?php
        $active = "home";
        include('head.php'); ?>

    </div>
    <?php include'ticker.php'; ?>

    <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
        <div class="container">
            <div id="content-wrap" style="padding-bottom:75px;">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                    </ul>

                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image\home.jpg" alt="image\home.jpg" width="100%" height="500">

                        </div>
                        <div class="carousel-item">
                            <img src="image\2.jpg" alt="image\2.jpg" width="100%" height="500">
                        </div>

                    </div>

                    
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <br>
                <h1 style="text-align:center;font-size:45px;">Welcome to BloodBank & Donor Management System</h1>
                <br>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header card bg-info text-white">The need for blood</h4>

                            <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                                <?php
                                include 'conn.php';
                                $sql = $sql = "select * from pages where page_type='needforblood'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row['page_data'];
                                    }
                                }

                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header card bg-info text-white">Blood Tips</h4>

                            <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                                <?php
                                include 'conn.php';
                                $sql = $sql = "select * from pages where page_type='bloodtips'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row['page_data'];
                                    }
                                }

                                ?>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header card bg-info text-white">Who you could Help</h4>

                            <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                                <?php
                                include 'conn.php';
                                $sql = $sql = "select * from pages where page_type='whoyouhelp'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row['page_data'];
                                    }
                                }

                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header card bg-info text-white">Donor Benefits</h4>

                            <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                                <?php
                                include 'conn.php';
                                $sql = $sql = "select * from pages where page_type='donorbenefits'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row['page_data'];
                                    }
                                }

                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header card bg-info text-white">Donation Process</h4>

                            <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                                <?php
                                include 'conn.php';
                                $sql = $sql = "select * from pages where page_type='donationprocess'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row['page_data'];
                                    }
                                }

                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header card bg-info text-white">Eligibility Criteria</h4>

                            <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                                <?php
                                include 'conn.php';
                                $sql = $sql = "select * from pages where page_type='eligibilitycriteria'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row['page_data'];
                                    }
                                }

                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <br>
               
                <div class="row">
                    <div class="col-lg-6">
                        <h2>BLOOD GROUPS</h2>
                        <p>
                            <?php
                            include 'conn.php';
                            $sql = $sql = "select * from pages where page_type='bloodgroups'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['page_data'];
                                }
                            }

                            ?>
                        </p>

                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded" src="image\3.jpg" alt="">
                    </div>
                </div>

                <hr>

                <div class="row mb-4">
                    <div class="col-md-8">
                        <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                        <p>
                            <?php
                            include 'conn.php';
                            $sql = $sql = "select * from pages where page_type='universal'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['page_data'];
                                }
                            }

                            ?>
                        </p>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="align:center; background-color:#ff0000;color:#273746 ">Become a Blood Donor </a>
                        <a class="btn btn-lg btn-secondary btn-block" href="donate_organ.php" style="align:center; background-color:#ff0000;color:#273746 ">Become an Organ Donor </a>

                    </div>
                </div>

            </div>
        </div>

        <?php include('footer.php'); ?>
    </div>

</body>

</html>
