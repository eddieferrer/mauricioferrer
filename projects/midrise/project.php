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
                <h1>MID-RISE CONDOMINIUM</h1>
                <p>Miami, FL</p>
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
                <span>NW View</span>
                <a href="midrise1.jpg" class="project_image">
                  <img src="midrise1.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>NE View</span>
                <a href="midrise3.jpg" class="project_image">
                  <img src="midrise3.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Typical Floor Plan View</span>
                <a href="midrise2.png" class="project_image">
                  <img src="midrise2.png" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>SE View</span>
                <a href="midrise4.jpg" class="project_image">
                  <img src="midrise4.jpg" alt="" class="space-bottom-30">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>SW View</span>
                <a href="midrise5.jpg" class="project_image">
                  <img src="midrise5.jpg" alt="" class="space-bottom-30">
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
        <a href="/projects/lowrise/project.php" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>Previous Project</span></a>
        <a href="/projects/478bay/project.php" class="btn btn-direction btn-default-filled pull-right"><span>Next Project</span><i class="fa fa-long-arrow-right"></i></a>
    </div><!-- / project pagination -->
</div><!-- / container -->
<!-- / content -->

<?php include '../../includes/footer_with_scripts.html';?>

</body>

</html>