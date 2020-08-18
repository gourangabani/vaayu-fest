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
        <!-- evolution register -->
        <section class="separate-section container bg-gradient" id="register-evolution">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <div class="row">
                        <div class="col-md-12 text-left p-3">
                            <?php
                            if ($_GET['eventType'] == 'individual') {
                                include_once './forms/registerIndividual.php';
                            } elseif ($_GET['eventType'] == 'team') {
                                if ($_GET['event'] == 'write-camera-action') {
                                    include_once './forms/registerTeamWriteCameraAction.php';
                                } elseif ($_GET['event'] == 'crisimulation') {
                                    include_once './forms/registerTeamCrisimulation.php';
                                } elseif ($_GET['event'] == 'escape-in') {
                                    include_once './forms/registerTeamEscapeIn.php';
                                } else {
                                    // redirect
                                }
                            } else {
                                // redirect
                            }
                            ?>
                            <div class="d-flex justify-content-center mt-5">
                                <div id="progress-placeholder" class="" style="width: 3rem; height: 3rem;" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div id="response-placeholder" class="alert" role="alert"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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