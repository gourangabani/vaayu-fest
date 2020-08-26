<!DOCTYPE html>
<html lang="en">

<?php
include_once './classes/eventEvolution.php';
include_once './data/eventsEvolution.php';
?>

<head>
    <?php
    include '../components/meta.php';
    ?>
    <meta name="description" content="There's nothing stopping us. We're here for you, with the same enthusiasm, crazy events, fun workshops, dance and drama, games, entertainment and a lot more through our prefest." />
    <meta property="og:title" content="Vaayu '20" />
    <meta property="og:description" content="Evolution, Dawn of a Digital Era" />
    <title>
        Vaayu Fest - Evolution
    </title>
    <?php
    include '../components/stylesheets.php';
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <div class="preloader">
        <video autoplay muted class="preloader">
            <source src="<?php echo $base; ?>media/evolution/preloader.mp4" type="video/mp4">
        </video>
    </div>
    <?php
    include '../components/navigation.php';
    ?>
    <div class="container-fluid">
        <!-- evolution about -->
        <section class="separate-section container" id="evolution-about">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <div class="row">
                        <div class="col-md-12 text-left p-3">
                            <h2 class="mb-5">
                                Evolution
                            </h2>
                            <h3 class="mb-5" id="evolution-head">
                                <span id="evolution-head">
                                    Dawn of a Digital Era
                                </span>
                                <br>
                                27th August 2020 - 3rd September 2020
                            </h3>
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                <div class="flex-grow-1">
                                    <p>
                                        There's nothing stopping us. We're here for you, with the same enthusiasm, crazy events, fun workshops, dance and drama, games, entertainment and a lot more through our prefest. But this time, with a digital twist to it. Keep yourselves ready to transform with Vaayu'20 as it marks the beginning of, Evolution, Dawn of a Digital Era.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <a class="btn btn-custom-primary p-4 w-100 mb-3" type="button" href="../media/evolution/evolution-events-brochure.pdf" target="_blank">
                                        Brochure!
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a data-toggle="modal" class="btn btn-custom-primary p-4 w-100 mb-3" type="button" href="#register-modal">
                                        Events
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a class="btn btn-custom-primary p-4 w-100 mb-3" type="button" href="register.php?eventType=workshops">
                                        Workshops
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a data-toggle="modal" class="btn btn-custom-primary p-4 w-100 mb-3" type="button" href="#contact-modal">
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- evolution events -->
        <section class="separate-section container" id="evolution-events">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <div class="row">
                        <div class="col-md-12 text-left p-3">
                            <h2 class="mb-5">
                                Events
                            </h2>
                            <h3 class="mb-5">
                                Workshops
                            </h3>
                            <div class="grid">
                                <div class="row people">
                                    <?php
                                    foreach ($evolutionEvents as $evolutionEvent) {
                                        if ($evolutionEvent->eventType == eventType::workshop) {
                                            echo '
                                            <div class="col-md-4 col-lg-3 item p-3">
                                                <a data-toggle="modal" href="#evolution-event-' . $evolutionEvent->eventSlug . '-modal">
                                                    <div class="box rounded shadow-lg" style="background-image:url(\'../media/evolution/' . $evolutionEvent->eventPoster . '\')">
                                                        <div class="cover">
                                                            <h5 class="name">
                                                                ' . $evolutionEvent->eventBrochureTitle . '
                                                                <br>
                                                                [' . $evolutionEvent->eventName . ']
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-left p-3">
                            <h3 class="mb-5">
                                Individual
                            </h3>
                            <div class="grid">
                                <div class="row people">
                                    <?php
                                    foreach ($evolutionEvents as $evolutionEvent) {
                                        if ($evolutionEvent->eventType == eventType::individual) {
                                            echo '
                                            <div class="col-md-4 col-lg-3 item p-3">
                                                <a data-toggle="modal" href="#evolution-event-' . $evolutionEvent->eventSlug . '-modal">
                                                    <div class="box rounded shadow-lg" style="background-image:url(\'../media/evolution/' . $evolutionEvent->eventPoster . '\')">
                                                        <div class="cover">
                                                            <h5 class="name">
                                                                ' . $evolutionEvent->eventBrochureTitle . '
                                                                <br>
                                                                [' . $evolutionEvent->eventName . ']
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-left p-3">
                            <h3 class="mb-5">
                                Team
                            </h3>
                            <div class="grid">
                                <div class="row people">
                                    <?php
                                    foreach ($evolutionEvents as $evolutionEvent) {
                                        if ($evolutionEvent->eventType == eventType::team) {
                                            echo '
                                            <div class="col-md-4 col-lg-3 item p-3">
                                                <a data-toggle="modal" href="#evolution-event-' . $evolutionEvent->eventSlug . '-modal">
                                                    <div class="box rounded shadow-lg" style="background-image:url(\'../media/evolution/' . $evolutionEvent->eventPoster . '\')">
                                                        <div class="cover">
                                                            <h5 class="name">
                                                                ' . $evolutionEvent->eventBrochureTitle . '
                                                                <br>
                                                                [' . $evolutionEvent->eventName . ']
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="portfolio-modal modal fade" id="register-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="<?php echo $base; ?>assets/img/close-icon.svg" alt="Close Modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <a class="btn btn-custom-primary p-3 mb-3" type="button" href="register.php?eventType=individual">
                                            Individual Events
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a class="btn btn-custom-primary p-3 mb-3" type="button" href="register.php?eventType=team&event=write-camera-action">
                                            Write Camera Action [Monologue Event]
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a class="btn btn-custom-primary p-3 mb-3" type="button" href="register.php?eventType=team&event=crisimulation">
                                            Crisimulation [Crisis Simulation Event]
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a class="btn btn-custom-primary p-3 mb-3" type="button" href="register.php?eventType=team&event=escape-in">
                                            Excape In [Escape Room]
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="<?php echo $base; ?>assets/img/close-icon.svg" alt="Close Modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="mb-3">
                                            Diya Maini
                                            <br>
                                            [HoD Hospitality]
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-3">
                                        <a class="btn btn-custom-primary p-3 mb-3" type="button" href="mailto:hospitality@vaayufest.org">
                                            <i class="fas fa-envelope"></i> hospitality@vaayufest.org
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a class="btn btn-custom-primary p-3 mb-3" type="button" href="tel:+919814831300‬">
                                            <i class="fas fa-phone"></i> +91 98148 31300‬
                                        </a>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    foreach ($evolutionEvents as $evolutionEvent) {
        echo '
        <div class="portfolio-modal modal fade" id="evolution-event-' . $evolutionEvent->eventSlug . '-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        ' . $evolutionEvent->eventBrochureTitle . '
                                        <br>
                                        [' . $evolutionEvent->eventName . ']
                                    </h2>
                                    <p>
                                        ' . $evolutionEvent->eventDescription . '
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
    ?>
    <?php
    include '../components/scripts.php';
    ?>
    <script src="js/ajax.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
</body>

</html>

<?php
include '../components/notes.php';
?>