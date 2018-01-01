<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/head.html';?>

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

<?php include 'includes/footer_with_scripts.html';?>

<!-- contact-form -->
<script src="js/validator.min.js" type="text/javascript"></script>
<script src="js/form-scripts.js" type="text/javascript"></script>
<!-- / contact-form -->
</body>

</html>