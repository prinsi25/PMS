<?php 
    include("config.php");
	// $con=mysqli_connect("localhost","root","","pharmacy");
	if(isset($_POST['submit']))
	{
        $name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$sql="insert into `user`(`name`,`email`,`password`)values('$name','$email','$password')";
		mysqli_query($con,$sql);

		echo "data inserted...";
        header("Location: auth-signin.php");
        exit;
          
	}

 ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lite.codedthemes.com/datta-able/bootstrap/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jul 2025 04:19:50 GMT -->
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
    <form method="post">
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
                            <i class="feather icon-user-plus auth-icon"></i>
                        </div>
                        <h3 class="mb-4">register</h3>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="name">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" placeholder="password" name="password">
                        </div>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-1" checked="">
                                <label for="checkbox-fill-1" class="cr"> Save Details</label>
                            </div>
                        </div>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                                <!-- <label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a> weekly.</label> -->
                            </div>
                        </div>
                            <button class="btn btn-primary shadow-2 mb-4" name="submit" type="submit">register</button>
                        <p class="mb-0 text-muted">Allready have an account? <a href="auth-signin.html"> Log in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>    
    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from lite.codedthemes.com/datta-able/bootstrap/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jul 2025 04:19:50 GMT -->
</html>
