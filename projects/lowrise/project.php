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
                <h1>LOW-RISE LUXURY CONDOMINIUM</h1>
                <p>Bay Harbor, FL</p>
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
                <a href="lowrise1.png" class="project_image">
                  <img src="lowrise1.png" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Front View</span>
                <a href="lowrise2.jpg" class="project_image">
                  <img src="lowrise2.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="lowrise3.png" class="project_image">
                  <img src="lowrise3.png" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>NE View</span>
                <a href="lowrise4.jpg" class="project_image">
                  <img src="lowrise4.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>2nd Floor Plan</span>
                <a href="lowrise5.png" class="project_image">
                  <img src="lowrise5.png" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>SE View</span>
                <a href="lowrise6.jpg" class="project_image">
                  <img src="lowrise6.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Typical Floor Plan</span>
                <a href="lowrise7.png" class="project_image">
                  <img src="lowrise7.png" alt="" class="space-bottom-30 ">
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
        <a href="/projects/key/project.php" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>Previous Project</span></a>
        <a href="/projects/midrise/project.php" class="btn btn-direction btn-default-filled pull-right"><span>Next Project</span><i class="fa fa-long-arrow-right"></i></a>
    </div><!-- / project pagination -->
</div><!-- / container -->
<!-- / content -->

<?php include '../../includes/footer_with_scripts.html';?>

</body>

</html>