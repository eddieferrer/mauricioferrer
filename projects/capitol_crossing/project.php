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
                <h1>CAPITOL CROSSING<br/>
                  NORTH BLOCK</h1>
                <p>Washington, DC</p>
            </div><!-- / banner-info -->
        </div><!-- / banner-content -->
    </div>
    <!-- / header-banner -->
</header>
<!-- / header -->

<!-- project content area -->
<div id="page-content" class="container">
    <section id="project">
        <div class="row">
          <ul class="row portfolio list-unstyled lightbox" id="grid">

              <li class="col-xs-6 col-md-4 m-project">
                <span>Under Construction</span>
                <a href="capitol3.jpg" class="project_image">
                  <img src="capitol3.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Render by KRJDA</span>
                <a href="capitol1.jpg" class="project_image">
                  <img src="capitol1.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Render by KRJDA</span>
                <a href="capitol2.jpg" class="project_image">
                  <img src="capitol2.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>
              <!-- sizer -->
              <!-- <li class="col-xs-6 col-md-4 shuffle_sizer"></li> -->
          </ul> <!-- / projects -->
        </div>
        <div class="row">
            <div class="col-sm-12">
              <h3>CAPITOL CROSSING NORTH BLOCK</h3>
            </div>
            <div class="col-sm-4">
                <h4>PROJECT INFO</h4>
                <div class="project-info">
                    <div class="info">
                        <p><i class="lnr lnr-apartment"></i><span>Architectural Design by: KRJDA</span></p>
                    </div>
                    <div class="info">
                        <p><i class="lnr lnr-map"></i><span>Location: Washington, DC</span></p>
                    </div>
                </div><!-- / project-info -->
            </div><!-- / col-sm-4 -->
            <div class="col-sm-8">
                <h4>PROJECT DESCRIPTION</h4>
                <h5 class="gray">EXTERIOR CURTAINWALL CLADDING</h5>
                <p></p>
            </div><!-- / col-sm-8 -->
        </div><!-- / row -->
    </section>
    <!-- / project content -->

    <!-- project pagination -->
    <div class="pagination">
        <a href="/projects/400woodcrest/project.php" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>Previous Project</span></a>
        <a href="/projects/saxony/project.php" class="btn btn-direction btn-default-filled pull-right"><span>Next Project</span><i class="fa fa-long-arrow-right"></i></a>
    </div><!-- / project pagination -->
</div><!-- / container -->
<!-- / content -->

<?php include '../../includes/footer_with_scripts.html';?>

</body>

</html>