
<?php
    session_start();
    include ("config.php"); // This should define $conn

    if(isset($_POST['demo'])){
        header('location:demo.php');
    }

if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_SESSION['user_id'];
        $old_pass = $_POST['old_password'];
        $new_pass = $_POST['new_password'];
        $confirm_pass = $_POST['confirm_password'];

        // Fetch user's old hashed password
        $sql = "SELECT password FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($old_pass, $row['password'])) {
            if ($new_pass === $confirm_pass) {
                $hashed_pass = password_hash($new_pass, PASSWORD_DEFAULT);
                $update = "UPDATE users SET password = '$hashed_pass' WHERE id = '$user_id'";
                if (mysqli_query($conn, $update)) {
                    echo "<script>alert('Password updated successfully.');</script>";
                } else {
                    echo "<script>alert('Failed to update password.');</script>";
                }
            } else {
                echo "<script>alert('New password and confirm password do not match.');</script>";
            }
        } else {
            echo "<script>alert('Old password is incorrect.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Datta Able - Reset password</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <form method="POST">
        <div class="auth-wrapper">
            <div class="auth-content">
                <div class="auth-bg">
                    <span class="r"></span>
                    <span class="r s"></span>
                    <span class="r s"></span>
                    <span class="r"></span>
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather icon-lock auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Reset Password</h3>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Old Password" name="old_password" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="New Password" name="new_password" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required>
                        </div>
                        <button class="btn btn-primary mb-4 shadow-2" name="submit" type="submit">Reset Password</button>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="auth-register.php">Signup</a></p>
                    </div>
                </div>

                <!-- <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather icon-mail auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Reset Password</h3>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <button class="btn btn-primary mb-4 shadow-2">Reset Password</button>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p>
                    </div>
                </div> -->
            </div>
        </div>
    </form>
    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>

<!-- Mirrored from lite.codedthemes.com/datta-able/bootstrap/auth-reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jul 2025 04:19:55 GMT -->
</html>
