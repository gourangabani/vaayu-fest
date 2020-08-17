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
</head>

<body id="page-top">
    <?php
    include '../components/preloader.php';
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
                            <h3 class="mb-5">
                                Dawn of a Digital Era
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-left p-3">
                            <h2 class="mb-5">
                                Events
                            </h2>
                            <h3 class="mb-5">
                                With A Digital Twist.
                            </h3>
                            <div class="grid">
                                <div class="row people">
                                    <?php
                                    foreach ($evolutionEvents as $evolutionEvent) {
                                        echo '
                                        <div class="col-md-4 col-lg-3 item">
                                            <a data-toggle="modal" href="#evolution-event-' . $evolutionEvent->eventSlug . '-modal">
                                                <div class="box rounded" style="background-image:url(\'../media/evolution/' . $evolutionEvent->eventPoster . '\')">
                                                    <div class="cover">
                                                        <h3 class="name">
                                                            ' . $evolutionEvent->eventBrochureTitle . '
                                                            <br>
                                                            (' . $evolutionEvent->eventName . ')
                                                        </h3>
                                                    </div>
                                                </div>
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
            </div>
        </section>
        <!-- evolution events -->
        <section class="separate-section container" id="evolution-events">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    
                </div>
            </div>
        </section>
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
                                        (' . $evolutionEvent->eventBrochureTitle . ')
                                    </h2>
                                    <p class="item-intro text-muted" id="purpose-modal-text">
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
</body>

</html>

<?php
include '../components/notes.php';
?>