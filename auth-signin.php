
<?php 
session_start();
include("config.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];  

        header("Location: index.php");
        exit;
    } else {
        $error = "Email or Password are incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lite.codedthemes.com/datta-able/bootstrap/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jul 2025 04:19:50 GMT -->
<head>
    <title>Pharmacy Management</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

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
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>

                        <h3 class="mb-4">Login</h3>
                        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="email" name="email">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" placeholder="password" name="password">

                        </div>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                            </div>
                        </div>

                        <button class="btn btn-primary shadow-2 mb-4" name="submit" type="submit">Login</button>
<<<<<<< HEAD
                        <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.php">Reset</a></p>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="auth-register.php">Register</a></p>
=======
                        <p class="mb-2 text-muted">
                            Forgot password? <a href="auth-reset-password.php">Reset</a>
                        </p>
                        <p class="mb-0 text-muted">
                            Don’t have an account? <a href="auth-signup.html">Signup</a>
                        </p>

                        <!-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html">Reset</a></p>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p> -->
>>>>>>> 94ae4590a0eb216f0578e7a3eb273e9d27ef5ce7
                    </div>
                </div>
            </div>
        </div>

    </form>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from lite.codedthemes.com/datta-able/bootstrap/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jul 2025 04:19:51 GMT -->
</html>
