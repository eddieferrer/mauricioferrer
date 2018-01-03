<!DOCTYPE html>
<html lang="en">

<head>
<?php include '../../includes/head.html';?>

<style>
#header-banner {
  background: url("banner.jpg") no-repeat;
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
    <?php include '../../includes/menu.html';?>

    <!-- header-banner -->
    <div id="header-banner">
        <div class="banner-content single-page text-center">
            <div class="banner-info">
                <h1>SINGLE FAMILY HOME</h1>
                <p>Key Biscayne, FL</p>
            </div><!-- / banner-info -->
        </div><!-- / banner-content -->
    </div>
    <!-- / header-banner -->
</header>
<!-- / header -->

<!-- content -->
<div id="page-content" class="container">
    <section id="project">
        <div class="row">
          <ul class="row portfolio list-unstyled lightbox" id="grid">
              <li class="col-xs-6 col-md-4 m-project">
                <span>Front View</span>
                <a href="175harbor1.jpg" class="project_image">
                  <img src="175harbor1.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="175harbor4.png" class="project_image">
                  <img src="175harbor4.png" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="175harbor3.png" class="project_image">
                  <img src="175harbor3.png" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="175harbor2.png" class="project_image">
                  <img src="175harbor2.png" alt="" class="space-bottom-30">
                </a>
              </li>
              <!-- sizer -->
              <li class="col-xs-6 col-md-4 shuffle_sizer"></li>
          </ul> <!-- / projects -->
        </div>
    </section>
    <!-- / project content -->

    <!-- project pagination -->
    <div class="pagination">
        <a href="/projects/pdxhouse/project.php" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>Previous Project</span></a>
        <a href="/projects/345woodcrest/project.php" class="btn btn-direction btn-default-filled pull-right"><span>Next Project</span><i class="fa fa-long-arrow-right"></i></a>
    </div><!-- / project pagination -->
</div><!-- / container -->
<!-- / content -->

<?php include '../../includes/footer_with_scripts.html';?>

</body>

</html>