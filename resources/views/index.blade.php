<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">
<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <img class="rounded" src="img/profile.jpg" alt="">
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="intro-text">
                    <span class="skills">Please register to play the game.</span>
                </div>
                <form name="registrationForm" id="contactForm" novalidate method="POST" action="user/register">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="../js/jqBootstrapValidation.js"></script>
<script src="../js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/freelancer.min.js"></script>

</body>

</html>