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
                <p>Portland, OR</p>
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
              <li class="col-xs-6 col-md-8 m-project">
                <a href="pdxhouse1.png" class="project_image">
                  <img src="pdxhouse1.png" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="pdxhouse3.jpg" class="project_image">
                  <img src="pdxhouse3.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Front Views</span>
                <a href="pdxhouse5.jpg" class="project_image">
                  <img src="pdxhouse5.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Front Views</span>
                <a href="pdxhouse6.jpg" class="project_image">
                  <img src="pdxhouse6.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Gallery View</span>
                <a href="pdxhouse2.jpg" class="project_image">
                  <img src="pdxhouse2.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-8 m-project">
                <a href="pdxhouse4.png" class="project_image">
                  <img src="pdxhouse4.png" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-8 m-project">
                <span>Front View</span>
                <a href="pdxhouse8.png" class="project_image">
                  <img src="pdxhouse8.png" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-2 m-project">
                <span>Exterior Views</span>
                <a href="pdxhouse7.png" class="project_image">
                  <img src="pdxhouse7.png" alt="" class="space-bottom-30">
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
        <a href="/projects/478bay/project.php" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>Previous Project</span></a>
        <a href="/projects/175harbor/project.php" class="btn btn-direction btn-default-filled pull-right"><span>Next Project</span><i class="fa fa-long-arrow-right"></i></a>
    </div><!-- / project pagination -->
</div><!-- / container -->
<!-- / content -->

<?php include '../../includes/footer_with_scripts.html';?>

</body>

</html>