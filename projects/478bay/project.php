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
                <a href="478bay1.jpg" class="project_image">
                  <img src="478bay1.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="478bay2.png" class="project_image">
                  <img src="478bay2.png" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Rear Elevation</span>
                <a href="478bay3.png" class="project_image">
                  <img src="478bay3.png" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Rear View</span>
                <a href="478bay4.jpg" class="project_image">
                  <img src="478bay4.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Exterior Views</span>
                <a href="478bay5.jpg" class="project_image">
                  <img src="478bay5.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Exterior Views</span>
                <a href="478bay6.jpg" class="project_image">
                  <img src="478bay6.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Exterior Views</span>
                <a href="478bay7.jpg" class="project_image">
                  <img src="478bay7.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Front View</span>
                <a href="478bay8.jpg" class="project_image">
                  <img src="478bay8.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Rear View</span>
                <a href="478bay9.jpg" class="project_image">
                  <img src="478bay9.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Pool View</span>
                <a href="478bay10.jpg" class="project_image">
                  <img src="478bay10.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="478bay11.jpg" class="project_image">
                  <img src="478bay11.jpg" alt="" class="space-bottom-30">
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
        <a href="/projects/midrise/project.php" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>Previous Project</span></a>
        <a href="/projects/pdxhouse/project.php" class="btn btn-direction btn-default-filled pull-right"><span>Next Project</span><i class="fa fa-long-arrow-right"></i></a>
    </div><!-- / project pagination -->
</div><!-- / container -->
<!-- / content -->

<?php include '../../includes/footer_with_scripts.html';?>

</body>

</html>