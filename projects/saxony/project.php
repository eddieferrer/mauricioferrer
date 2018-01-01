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
                <h1>SAXONY<br/>RESIDENCES</h1>
                <p>Miami Beach, FL</p>
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
                <a href="saxony1.jpg" class="project_image">
                  <img src="saxony1.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="saxony2.jpg" class="project_image">
                  <img src="saxony2.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="saxony3.jpg" class="project_image">
                  <img src="saxony3.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Aleros</span>
                <a href="saxony4.jpg" class="project_image">
                  <img src="saxony4.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Head & Sill Details</span>
                <a href="saxony5.png" class="project_image">
                  <img src="saxony5.png" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Head & Sill Details</span>
                <a href="saxony6.png" class="project_image">
                  <img src="saxony6.png" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="saxony7.jpg" class="project_image">
                  <img src="saxony7.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Balustrade Design Concept</span>
                <a href="saxony8.png" class="project_image">
                  <img src="saxony8.png" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <span>Balustrade Design Concept</span>
                <a href="saxony9.png" class="project_image">
                  <img src="saxony9.png" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="saxony10.jpg" class="project_image">
                  <img src="saxony10.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <li class="col-xs-6 col-md-4 m-project">
                <a href="saxony11.jpg" class="project_image">
                  <img src="saxony11.jpg" alt="" class="space-bottom-30 ">
                </a>
              </li>

              <!-- sizer -->
              <li class="col-xs-6 col-md-4 shuffle_sizer"></li>
          </ul> <!-- / projects -->
        </div>
        <div class="row">
            <div class="col-sm-12">
              <h3>SAXONY RESIDENCES AT MIAMI BEACH</h3>
            </div>
            <div class="col-sm-4">
                <h4>PROJECT INFO</h4>
                <div class="project-info">
                    <div class="info">
                        <p><i class="lnr lnr-apartment"></i><span>Architectural Design by: Norman Foster</span></p>
                    </div>
                    <div class="info">
                        <p><i class="lnr lnr-map"></i><span>Location: Miami Beach, FL</span></p>
                    </div>
                </div><!-- / project-info -->
            </div><!-- / col-sm-4 -->
            <div class="col-sm-8">
                <h4>PROJECT DESCRIPTION</h4>
                <h5 class="gray">GLASS BALUSTRADE & SLIDING GLASS DOORS</h5>
                <p>Alero was center point of project. Lifestyle around outdoor terrace.</p>
                <ul class="list-featured space-bottom-20">
                  <li>GFRC panel with curved profile and integrated drainage system.</li>
                  <li>Cantilevered glass rail on a glazing shoe.</li>
                  <li>Continous corian handrail</li>
                </ul>
            </div><!-- / col-sm-8 -->
        </div><!-- / row -->
    </section>
    <!-- / project content -->

    <!-- project pagination -->
    <div class="pagination">
        <a href="/projects/capitol_crossing/project.php" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>Previous Project</span></a>
        <a href="/projects/neuroscience/project.php" class="btn btn-direction btn-default-filled pull-right"><span>Next Project</span><i class="fa fa-long-arrow-right"></i></a>
    </div><!-- / project pagination -->
</div><!-- / container -->
<!-- / content -->

<?php include '../../includes/footer_with_scripts.html';?>

</body>

</html>