<!DOCTYPE html>
<html lang="en">

<?php
include_once './classes/models/department.php';
include_once './data/departments.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        Vaayu Fest - Team
    </title>
    <!-- bootstrap core css -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- owl carusel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- normalise -->
    <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css" rel="stylesheet" type="text/css"> -->
    <!-- custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- imported animations -->
    <link href="assets/css/imported-animations/animated-card-slider-plugin/demo.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php include './components/navigation.php'; ?>

    <!-- masthead -->
    <header id="homeMasthead" class="customHeader text-center text-white">
        <div id="homeMastheadOverlay" class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="media/vaayu-reveal-2.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">
                        VAAYU '20
                    </h1>
                    <p class="lead mb-0">
                        Get Empowered!
                    </p>
                </div>
            </div>
        </div>
    </header>
    <!-- team -->
    <section id="teamSection" class="customSection">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <h2 class="sectionTitle">
                        TEAM
                    </h2>
                </div>
                <div class="col-lg-11 col-md-11 col-sm-12">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="owl-carousel owl-theme" id="teamCarousel">
                                <?php
                                foreach ($departments as $department) {
                                    if ($department->departmentSlug == 'financier' || $department->$departmentVertical == verticals::topFive) {
                                        $departmentNamePrefix = '';
                                    } else {
                                        $departmentNamePrefix = 'HoD';
                                    }
                                    echo '
									<div class="item" data-hash="team-' . $department->departmentSlug . '">
										<div class="card customCard text-white">
											<img class="customCardBackground" src="media/images/aayush-rathi.png" alt="' . $department->departmentName . '" />
											<div class="card-img-overlay">
												<img class="customCardImage" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
												<h4 class="card-title">
													' . $department->departmentHeadName . '
												</h4>
												<h6 class="customCardSubtitle">
													' . $departmentNamePrefix . ' ' . $department->departmentName . '
												</h6>
											</div>
										</div>
									</div>
									';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder mb-1 mr-1 ml-1">
                                    <div class="row">
                                        <div class="col-md-2 customLabel">
                                            <h6>
                                                STAR
                                            </h6>
                                        </div>
                                        <div class="col-md-10 p-2 text-center customButtonHolder">
                                            <?php
                                            foreach ($departmentsTopFive as $department) {
                                                echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder m-1">
                                    <div class="row">
                                        <div class="col-md-2 customLabel">
                                            <h6>
                                                ADMIN 1
                                            </h6>
                                        </div>
                                        <div class="col-md-10 p-2 text-center customButtonHolder">
                                            <?php
                                            foreach ($departmentsAdminOne as $department) {
                                                echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder m-1">
                                    <div class="row">
                                        <div class="col-md-2 customLabel">
                                            <h6>
                                                ADMIN 2
                                            </h6>
                                        </div>
                                        <div class="col-md-10 p-2 text-center customButtonHolder">
                                            <?php
                                            foreach ($departmentsAdminTwo as $department) {
                                                echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder m-1">
                                    <div class="row">
                                        <div class="col-md-2 customLabel">
                                            <h6>
                                                EVENTS 1
                                            </h6>
                                        </div>
                                        <div class="col-md-10 p-2 text-center customButtonHolder">
                                            <?php
                                            foreach ($departmentsEventsOne as $department) {
                                                echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder m-1">
                                    <div class="row">
                                        <div class="col-md-2 customLabel">
                                            <h6>
                                                EVENTS 2
                                            </h6>
                                        </div>
                                        <div class="col-md-10 p-2 text-center customButtonHolder">
                                            <?php
                                            foreach ($departmentsEventsTwo as $department) {
                                                echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="py-5">
        <div class="container">
            <p class="m-0 text-center small">
                Copyright &copy; Vaayu Fest 2020
            </p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- jquery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- bootstrap core javascript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- imported animations -->
    <!-- 1 -->
    <script src="assets/js/imported-animations/cool-layout-with-complex-chainable-animation.js"></script>
    <!-- 2 -->
    <script src="assets/js/imported-animations/animated-card-slider-plugin/jquery.event.move.js"></script>
    <script src="assets/js/imported-animations/animated-card-slider-plugin/jquery.event.swipe.js"></script>
    <script src="assets/js/imported-animations/animated-card-slider-plugin/jquery.cardslider.min.js"></script>
    <script>
        $('.my-slider').cardslider({
            swipe: true,
            dots: true
        });
    </script>
    <!-- custom -->
    <script src="assets/js/owl-carousel-custom.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- gsap -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
    <!-- scroll magic -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <!-- animate -->
    <script src="assets/js/animate.js"></script>
    <!-- font awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
</body>

</html>