<!DOCTYPE html>
<html lang="en">

<?php
include_once './classes/department.php';
include_once './classes/sponsor.php';
include_once './data/departments.php';
include_once './data/sponsors.php';
?>

<head>
    <?php
    include 'components/meta.php';
    ?>
    <meta name="description" content="What was conceived out of pure passion for empowering the youth of our nation, has now transformed into one of the fastest growing cultural festivals of India. Boasting an annual footfall of about 35000, Vaayu is so much more than what meets the eye: an assemblage of people from throughout the country, an opportunity to jump start your career under the guidance of the most renowned entities, a median that promotes youth empowerment through every facet of its activities, but most importantly, it is a place where everlasting bonds are forged." />
    <meta property="og:title" content="Vaayu '20" />
    <meta property="og:description" content="Vaayu is a national level college festival of NMIMS" />
    <title>
        Vaayu Fest - Home
    </title>
    <?php
    include 'components/stylesheets.php';
    ?>
</head>

<body id="page-top">
    <?php
    include 'components/preloader.php';
    include 'components/navigation.php';
    ?>
    <div class="container-fluid">
        <!-- masthead -->
        <section class="separate-section masthead 100vh" id="masthead">
            <div class="separate-section-content container">
                <h1 class="typewriter">
                    Vaayu '20
                </h1>
                <h2 class="typewriter">
                    Get Empowered
                </h2>
                <hr>
            </div>
        </section>
        <!-- about us -->
        <section class="separate-section container" id="about-us">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <h2 class="mb-5">
                        About Us
                    </h2>
                    <h3 class="mb-5">
                        Get Empowered
                    </h3>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <p>
                                What was conceived out of pure passion for empowering the youth of our nation, has now
                                transformed into one of the fastest growing cultural festivals of India. Boasting an
                                annual footfall of about 35000, Vaayu is so much more than what meets the eye: an
                                assemblage of people from throughout the country, an opportunity to jump start your
                                career under the guidance of the most renowned entities, a median that promotes youth
                                empowerment through every facet of its activities, but most importantly, it is a place
                                where everlasting bonds are forged.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery -->
        <section class="separate-section container" id="gallery">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <h2 class="mb-5">
                        Gallery
                    </h2>
                    <h3 class="mb-5">
                        Memories Never Lost
                    </h3>
                    <div class="grid">
                        <div class="row people">
                            <div class="col-md-4 col-lg-3 item">
                                <a href="gallery.php?path=2018">
                                    <div class="box rounded" style="background-image:url('https://www.vaayufest.org/media/images/gallery/2018/11.jpg')">
                                        <div class="cover">
                                            <h3 class="name">
                                                2018
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-lg-3 item">
                                <a href="gallery.php?path=2017">
                                    <div class="box rounded" style="background-image:url('https://www.vaayufest.org/media/images/gallery/2017/1.jpg')">
                                        <div class="cover">
                                            <h3 class="name">
                                                2017
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-lg-3 item">
                                <a href="gallery.php?path=2016">
                                    <div class="box rounded" style="background-image:url('https://www.vaayufest.org/media/images/gallery/2016/(1).jpg')">
                                        <div class="cover">
                                            <h3 class="name">
                                                2016
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-lg-3 item">
                                <a href="gallery.php?path=2015">
                                    <div class="box rounded" style="background-image:url('https://www.vaayufest.org/media/images/gallery/2015/(10).jpg')">
                                        <div class="cover">
                                            <h3 class="name">
                                                2015
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-lg-3 item">
                                <a href="gallery.php?path=celebrities">
                                    <div class="box rounded" style="background-image:url('https://www.vaayufest.org/media/images/gallery/2015/(12).jpg')">
                                        <div class="cover">
                                            <h3 class="name">
                                                Celebrities
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- events -->
        <section class="separate-section container" id="events">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <h2 class="mb-5">
                        Events
                    </h2>
                    <h3 class="mb-5">
                        Empowering Imagination. Creating Impact.
                    </h3>
                    <div class="grid">
                        <div class="row people">
                            <div class="col-lg-4 item">
                                <a href="evolution/">
                                    <div class="box rounded" style="background-image:url('./media/images/events/evolution.jpg')">
                                        <div class="cover"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 item">
                                <a data-toggle="modal" href="#qadar-modal">
                                    <div class="box rounded" style="background-image:url('./media/images/events/qadar.jpg')">
                                        <div class="cover"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- team -->
        <section class="separate-section container" id="team">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <h2 class="mb-5">
                        Team
                    </h2>
                    <h3 class="mb-5">
                        Witty. Weird. Learners.
                    </h3>
                    <ul id="team-tab" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
                        <li class="nav-item flex-sm-fill">
                            <a id="top-5-tab" data-toggle="tab" href="#top-5" class="nav-link border-0 text-uppercase font-weight-bold active">
                                <i class="fas fa-star"></i>
                            </a>
                        </li>
                        <li class="nav-item flex-sm-fill">
                            <a id="admin-1-tab" data-toggle="tab" href="#admin-1" class="nav-link border-0 text-uppercase font-weight-bold">
                                Admin 1
                            </a>
                        </li>
                        <li class="nav-item flex-sm-fill">
                            <a id="admin-2-tab" data-toggle="tab" href="#admin-2" class="nav-link border-0 text-uppercase font-weight-bold">
                                Admin 2
                            </a>
                        </li>
                        <li class="nav-item flex-sm-fill">
                            <a id="events-1-tab" data-toggle="tab" href="#events-1" class="nav-link border-0 text-uppercase font-weight-bold">
                                Events 1
                            </a>
                        </li>
                        <li class="nav-item flex-sm-fill">
                            <a id="events-2-tab" data-toggle="tab" href="#events-2" class="nav-link border-0 text-uppercase font-weight-bold">
                                Events 2
                            </a>
                        </li>
                    </ul>
                    <div id="team-tab-content" class="tab-content">
                        <div id="top-5" class="tab-pane fade px-4 py-5 show active">
                            <div class="row">
                                <?php
                                foreach ($departmentsTopFive as $department) {
                                    if ($department->departmentSlug == 'chairperson') {
                                        echo '
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 p-3">
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
                                            <h3 class="name text-center">
                                                ' . $department->departmentHeadName . '
                                            </h3>
                                            <h6 class="text-muted text-center">
                                                ' . $department->departmentName . '
                                            </h6>
                                        </div>
                                        <div class="col-md-4"></div>
                                        ';
                                    } else {
                                        echo '
                                        <div class="col-md-3 p-3">
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
                                            <h3 class="name text-center">
                                                ' . $department->departmentHeadName . '
                                            </h3>
                                            <h6 class="text-muted text-center">
                                                ' . $department->departmentName . '
                                            </h6>
                                        </div>
                                        ';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div id="admin-1" class="tab-pane fade px-4 py-5">
                            <div class="row">
                                <?php
                                foreach ($departmentsAdminOne as $department) {
                                    if ($department->departmentSlug != 'financier') {
                                        echo '
                                        <div class="col-md-3 p-3 text-center">
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="HoD ' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
                                            <h3 class="name text-center">
                                                ' . $department->departmentHeadName . '
                                            </h3>
                                            <a class="btn btn-custom-primary w-100" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
                                                HoD ' . $department->departmentName . '
                                            </a>
                                        </div>
                                        ';
                                    } else {
                                        echo '
                                        <div class="col-md-3 p-3 text-center">
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
                                            <h3 class="name text-center">
                                                ' . $department->departmentHeadName . '
                                            </h3>
                                            <a class="btn btn-custom-primary w-100" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
                                                ' . $department->departmentName . '
                                            </a>
                                        </div>
                                        ';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div id="admin-2" class="tab-pane fade px-4 py-5">
                            <div class="row">
                                <?php
                                foreach ($departmentsAdminTwo as $department) {
                                    echo '
                                    <div class="col-md-3 p-3 text-center">
                                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="HoD ' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
                                        <h3 class="name text-center">
                                            ' . $department->departmentHeadName . '
                                        </h3>
                                        <a class="btn btn-custom-primary w-100" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
                                            HoD ' . $department->departmentName . '
                                        </a>
                                    </div>
                                    ';
                                }
                                ?>
                            </div>
                        </div>
                        <div id="events-1" class="tab-pane fade px-4 py-5">
                            <div class="row">
                                <?php
                                foreach ($departmentsEventsOne as $department) {
                                    echo '
                                    <div class="col-md-3 p-3 text-center">
                                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="HoD ' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
                                        <h3 class="name text-center">
                                            ' . $department->departmentHeadName . '
                                        </h3>
                                        <a class="btn btn-custom-primary w-100" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
                                            HoD ' . $department->departmentName . '
                                        </a>
                                    </div>
                                    ';
                                }
                                ?>
                            </div>
                        </div>
                        <div id="events-2" class="tab-pane fade px-4 py-5">
                            <div class="row">
                                <?php
                                foreach ($departmentsEventsTwo as $department) {
                                    echo '
                                    <div class="col-md-3 p-3 text-center">
                                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="HoD ' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
                                        <h3 class="name text-center">
                                            ' . $department->departmentHeadName . '
                                        </h3>
                                        <a class="btn btn-custom-primary w-100" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
                                            HoD ' . $department->departmentName . '
                                        </a>
                                    </div>
                                    ';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sponsors -->
        <section class="separate-section container" id="sponsors">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <h2 class="mb-5">
                        Sponsors
                    </h2>
                    <h3 class="mb-5">
                        Pockets
                    </h3>
                    <ul id="sponsors-tab" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
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
                    </ul>
                    <div id="sponsors-tab-content" class="tab-content">
                        <div id="ilu" class="tab-pane fade px-4 py-5 show active">
                            <div class="row">
                                <?php
                                foreach ($sponsorsILU as $sponsor) {
                                    echo '
                                    <div class="col-md-3 p-3">
                                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/sponsors/' . $sponsor->sponsorLogo . '" alt="Sponsor - ' . $sponsor->sponsorName . '" />
                                        <h3 class="name text-center">
                                            ' . $sponsor->sponsorName . '
                                        </h3>
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
                                    <div class="col-md-3 p-3">
                                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/sponsors/' . $sponsor->sponsorLogo . '" alt="Sponsor - ' . $sponsor->sponsorName . '" />
                                        <h3 class="name text-center">
                                            ' . $sponsor->sponsorName . '
                                        </h3>
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
                                    <div class="col-md-3 p-3">
                                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/sponsors/' . $sponsor->sponsorLogo . '" alt="Sponsor - ' . $sponsor->sponsorName . '" />
                                        <h3 class="name text-center">
                                            ' . $sponsor->sponsorName . '
                                        </h3>
                                    </div>
                                    ';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us -->
        <section class="separate-section container" id="contact-us">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <h2 class="mb-5">
                        Always Listening
                    </h2>
                    <div class="row">
                        <?php
                        foreach ($departmentsContactUs as $department) {
                            echo '
                            <div class="col-md-3 p-2">
                                <img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3 power-2" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="Contact - ' . $department->departmentName . '" />
                                <h6 class="text-muted text-center">
                                    ' . $department->departmentName . '
                                </h6>
                                <h6 class="text-muted text-center">
                                    <a class="social-icon p-2" href="mailto:' . $department->departmentHeadEmail . '">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                    <a class="social-icon p-2" href="tel:‭' . $department->departmentHeadMobile . '">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </h6>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    foreach ($departments as $department) {
        if ($department->departmentSlug != 'financier') {
            echo '
            <div class="portfolio-modal modal fade" id="hod-' . $department->departmentSlug . '-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <img src="' . $base . 'assets/img/close-icon.svg" alt="Close Modal" />
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="modal-body">
                                        <h2 class="text-uppercase pb-5">
                                            ' . $department->departmentName . '
                                        </h2>
                                        <p class="item-intro text-muted">
                                            ' . $department->departmentDescription . '
                                        </p>
                                        <button class="btn btn-custom-primary" data-dismiss="modal" type="button">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
    }
    ?>
    <?php
    include 'components/modals.php';
    ?>
    <?php
    include 'components/scripts.php';
    ?>
</body>

</html>

<?php
include 'components/notes.php';
?>