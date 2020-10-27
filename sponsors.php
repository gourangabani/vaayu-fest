<!DOCTYPE html>
<html lang="en">

<?php
include_once './classes/models/sponsor.php';
include_once './data/sponsors.php';
?>

<head>
    <?php include_once('./components/meta.php') ?>
    <meta name="description" content="VAAYU: a metaphor of people, a carrier of hope, a treasure of memories, a haven for magical moments, a dream lived by many. It's a rising: invincible, powerful, mystical." />
    <meta property="og:title" content="Vaayu '20 - Get Empowered!" />
    <meta property="og:description" content="VAAYU: a metaphor of people, a carrier of hope, a treasure of memories, a haven for magical moments, a dream lived by many. It's a rising: invincible, powerful, mystical." />
    <title>
        Vaayu Fest - Sponsors
    </title>
    <?php include_once('./components/stylesheets.php') ?>

</head>

<body id="page-top">
    <?php include_once './components/navigation.php'; ?>
    <!-- masthead -->
    <header id="sponsorsCarouselSection">
        <div class="owl-carousel owl-theme" id="sponsorsCarousel">
            <div class="item">
                <img src="media/images/sponsors/kreative-keeda.jpg" alt="" />
            </div>
            <div class="item">
                <img src="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" />
            </div>
            <div class="item">
                <img src="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" />
            </div>
        </div>
    </header>
    <!-- sponsors -->
    <section id="sponsorsSection" class="customSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <h2 class="customSectionTitle">
                        SPONSORS
                    </h2>
                </div>
                <div class="col-lg-11 col-md-11 col-sm-12">
                    <div class="p-5">
                        <ul id="sponsors-tab" class="nav flex-column flex-sm-row text-center customTabs">
                            <li class="nav-item flex-sm-fill">
                                <a id="ilu-tab" data-toggle="tab" href="#ilu" class="nav-link border-0 text-uppercase font-weight-bold active">
                                    ILU
                                </a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="general-tab" data-toggle="tab" href="#general" class="nav-link border-0 text-uppercase font-weight-bold">
                                    General
                                </a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="mass-media-tab" data-toggle="tab" href="#mass-media" class="nav-link border-0 text-uppercase font-weight-bold">
                                    Mass Media
                                </a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="prefests-tab" data-toggle="tab" href="#prefests" class="nav-link border-0 text-uppercase font-weight-bold">
                                    Prefests
                                </a>
                            </li>
                        </ul>
                        <div id="sponsors-tab-content" class="tab-content">
                            <div id="ilu" class="tab-pane fade px-4 py-5 show active">
                                <div class="row">
                                    <?php
                                    foreach ($sponsorsILU as $sponsor) {
                                        echo '
                                        <div class="col-lg-4 col-md-4 p-3">
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/sponsors/' . $sponsor->sponsorLogo . '" alt="Sponsor - ' . $sponsor->sponsorName . '" />
                                            <h4 class="name text-center text-uppercase">
                                                ' . $sponsor->sponsorName . '
                                            </h4>
                                        </div>
                                        ';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div id="general" class="tab-pane fade px-4 py-5">
                                <div class="row">
                                    <?php
                                    foreach ($sponsorsGeneral as $sponsor) {
                                        echo '
                                        <div class="col-lg-3 col-md-4 p-3">
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/sponsors/' . $sponsor->sponsorLogo . '" alt="Sponsor - ' . $sponsor->sponsorName . '" />
                                            <h4 class="name text-center text-uppercase">
                                                ' . $sponsor->sponsorName . '
                                            </h4>
                                        </div>
                                        ';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div id="mass-media" class="tab-pane fade px-4 py-5">
                                <div class="row">
                                    <?php
                                    foreach ($sponsorsMassMedia as $sponsor) {
                                        echo '
                                        <div class="col-lg-3 col-md-4 p-3">
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/sponsors/' . $sponsor->sponsorLogo . '" alt="Sponsor - ' . $sponsor->sponsorName . '" />
                                            <h4 class="name text-center text-uppercase">
                                                ' . $sponsor->sponsorName . '
                                            </h4>
                                        </div>
                                        ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>
    <?php include_once './components/footer.php'; ?>
    <?php include_once './components/scripts.php'; ?>
    <?php include_once './components/modals.php'; ?>
</body>

</html>