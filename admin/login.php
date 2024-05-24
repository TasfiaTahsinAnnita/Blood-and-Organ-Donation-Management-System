<!DOCTYPE html>
<html>
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
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-image: url('admin_image/8.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 600px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0); /* Change this value for more or less transparency */
      border-radius: 8px;
    }

    .card {
      background-image: url('admin_image/9.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      padding: 20px;
      border-radius: 8px;
    }

    .form-group {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container">
      <div class="text-center">
        <h1 class="mt-4 mb-3" style="color:#ad210b;">
          Blood Bank & Management
          <br>Admin Login Portal
        </h1>
      </div>
      <div class="card">
        <div class="form-group">
          <label class="font-italic font-weight-bold"style="color:cyan">Username<span style="color:red">*</span></label>
          <input type="text" name="username" placeholder="Enter your username" class="form-control" required>
        </div>
        <div class="form-group">
          <label class="font-italic font-weight-bold"style="color:cyan">Password<span style="color:red">*</span></label>
          <input type="password" name="password" placeholder="Enter your Password" class="form-control" required>
        </div>
        <div class="form-group text-center">
          <input type="submit" name="login" class="btn btn-primary" value="LOGIN" style="cursor:pointer">
        </div>
      </div>
    </div>
    <br>
    <?php
      include 'conn.php';

      if (isset($_POST["login"])) {
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        $sql = "SELECT * FROM admin_info WHERE admin_username='$username' AND admin_password='$password'";
        $result = mysqli_query($conn, $sql) or die("query failed.");

        if (mysqli_num_rows($result) > 0) {
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION["username"] = $username;
          header("Location: dashboard.php");
        } else {
          echo '<div class="alert alert-danger" style="font-weight:bold">Username and Password are not matched!</div>';
        }
      }
    ?>
  </form>
</body>
</html>
