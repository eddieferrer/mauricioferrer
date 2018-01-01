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
<link rel="icon" href="/images/favicon.png">
<!-- page title -->
<title>MAURICIO FERRER - RA, LEED AP</title>
<!-- bootstrap css -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
<link href="/css/style.css" rel="stylesheet">
<link href="/css/animate.css" rel="stylesheet">
<link href="/css/magnific-popup.css" rel="stylesheet">

<link rel="stylesheet" href="/css/mf_style.css">


<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/css/linear-icons.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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

<!-- footer -->
<footer>
    <div class="container">
        <p class="footer-info">© MAURICIO FERRER</p>
    </div><!-- / container -->
</footer>
<!-- / footer -->

<!-- javascript -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>

<!-- portfolio -->
<script src="/js/custom.js"></script>
<script src="/js/jquery.shuffle.min.js"></script>
<!-- / portfolio -->

<!-- lightbox -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
// This will create a single gallery from all elements that have class "lightbox"
$('.lightbox').each(function() {
    $(this).magnificPopup({
        delegate: 'a.project_image', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});
</script>
<!-- / lightbox -->

<!-- preloader -->
<script src="/js/preloader.js"></script>
<!-- / preloader -->

<!-- / javascript -->
</body>

</html>