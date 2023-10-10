<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Forgot Password | wolmart</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template"/>
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {families: ['Poppins:400,500,600,700']}
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>

<body>
<div class="page-wrapper">
    <!-- Start of Header -->
    <?php
    require "header.php"
    ?>
    <!-- End of Header -->

    <!-- Start of Main -->
    <main class="main login-page">
        <!-- Start of Page Header -->
        <div class="page-header">
            <div class="container">
                <h1 class="page-title mb-0">Forgot Password</h1>
            </div>
        </div>
        <!-- End of Page Header -->

        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Forgot Password</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->
        <div class="page-content">
            <div class="container">
                <div class="login-popup">
                    <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                        <ul class="nav nav-tabs text-uppercase" role="tablist">
                            <li class="nav-item">
                                <a href="#forgot-password" class="nav-link active">Forgot-Password</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="forgot-password">
                                <div id="sendVerificationDiv">
                                    <div class="form-group mb-3">
                                        <label>Email address *</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                    <button id="svc-btn" onclick="sendVerificationEmail();" class="btn btn-dark w-100">
                                        Send Verification
                                        Code
                                    </button>
                                </div>


                                <div id="verifyDiv" class="d-none">
                                    <div class="form-group mb-3">
                                        <label>Verification Code</label>
                                        <input type="text" class="form-control" name="v-code" id="v-code" required>
                                    </div>
                                    <button onclick="verify();" class="btn btn-success w-100">Verify</button>

                                </div>

                                <div id="newPasswordDiv" class="d-none">
                                    <div class="form-group mb-3">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" name="newPassword"
                                               id="newPassword" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>confirm</label>
                                        <input type="password" class="form-control" name="confirm-password"
                                               id="confirmPassword" required>
                                    </div>

                                    <button onclick="resetPassword();" class="btn btn-primary w-100">Reset
                                        Password
                                    </button>
                                </div>

                                <div id="si_error"
                                     class="alert alert-error alert-bg alert-block alert-inline mt-5 d-none ">
                                    <h4 class="alert-title">
                                        <i class="w-icon-exclamation-triangle"></i>Oh snap!
                                    </h4>
                                    Change a few things up and try submitting again.
                                    <ul>
                                        <li>
                                            <span id="si_error_msg">Inform your username</span>
                                        </li>

                                    </ul>
                                    <button class="btn btn-link btn-close" aria-label="button">
                                        <i class="close-icon"></i>
                                    </button>
                                </div>

                            </div>

                        </div>
                        <p class="text-center">Back to <a href="login.php">Login</a></p>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End of Main -->

    <!-- Start of Footer -->
    <?php
    require "footer.php";
    ?>
    <!-- End of Footer -->
</div>
<!-- End of Page Wrapper -->

<!-- Start of Sticky Footer -->

<?php
require "sticky-footer.php";
?>
<!-- End of Sticky Footer -->

<!-- Start of Scroll Top -->
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i>
    <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
    </svg>
</a>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<?php
require "mobile-menu.php";


?>
<!-- End of Mobile Menu -->

<!-- Plugin JS File -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>