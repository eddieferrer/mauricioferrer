<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mauricion Ferrer - RA, LEED AP">
<meta name="keywords" content="Mauricio Ferrer" />
<meta name="author" content="Mauricio Ferrer">

<!-- favicon -->
<link rel="icon" href="images/favicon.png">
<!-- page title -->
<title>MAURICIO FERRER - RA, LEED AP</title>
<!-- bootstrap css -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="css/mf_style.css">

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/linear-icons.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
#header-banner {
  background: url("images/banner-bg.jpg") no-repeat;
  background-size: cover;
  background-position: center;
  background-color: #cccccc;
}
</style>
</head>

<body>

<!-- preloader -->
<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>
<!-- / preloader -->

<!-- header -->
<header>
    <?php include 'includes/menu.html';?>

    <!-- header-banner -->
    <div id="header-banner">
        <div class="banner-content single-page text-center">
            <div class="banner-info">
                <h1>CONTACT ME</h1>
                <p>Get in touch with me.</p>
            </div><!-- / banner-info -->
        </div><!-- / banner-content -->
    </div>
    <!-- / header-banner -->
</header>
<!-- / header -->

<!-- content -->

<div id="page-content" class="container">
    <div class="row contact-area">
        <div class="col-sm-6 contact-text">
            <img src="images/at-work.jpg" alt="">
            <p></p>
        </div><!-- / contact-text -->

        <div class="col-sm-6 contact-form-area">
            <!-- contact form 1col -->
            <div id="contact-form">
                <form id="contactForm" data-toggle="validator">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="FULL NAME" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" placeholder="MESSAGE" required></textarea>
                    <div class="help-block with-errors"></div>
                    </div>
                    <button type="submit" id="form-submit" class="btn btn-md btn-primary-filled btn-form-submit">SUBMIT FORM</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </form>
            </div><!-- / contact form 1col -->
        </div><!-- / col-sm-6 -->
    </div><!-- / contact-area -->

</div><!-- / container -->

<!-- / content -->

<!-- footer -->
<footer>
    <div class="container">
        <p class="footer-info">© MAURICIO FERRER
            <!-- <span class="social pull-right">
                <a href="#x"><i class="fa fa-facebook"></i></a>
                <a href="#x"><i class="fa fa-twitter"></i></a>
                <a href="#x"><i class="fa fa-instagram"></i></a>
            </span> -->
        </p>
    </div><!-- / container -->
</footer>
<!-- / footer -->

<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>

<!-- contact-form -->
<script src="js/validator.min.js" type="text/javascript"></script>
<script src="js/form-scripts.js" type="text/javascript"></script>
<!-- / contact-form -->

<!-- preloader -->
<script src="js/preloader.js"></script>
<!-- / preloader -->

<!-- / javascript -->
</body>

</html>