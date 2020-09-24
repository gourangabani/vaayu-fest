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
    <meta name="description" content="In our constant endeavour to evolve and grow, we're back with an updated, redesigned mobile application; a dynamic platform equipped to take on these changing times. It's got everything you need to know about the festival: events, departments, contact points and much more! Plus, there are surprises around the corner. Stay tuned." />
    <meta property="og:title" content="Vaayu '20" />
    <meta property="og:description" content="In our constant endeavour to evolve and grow, we're back with an updated, redesigned mobile application; a dynamic platform equipped to take on these changing times. It's got everything you need to know about the festival: events, departments, contact points and much more! Plus, there are surprises around the corner. Stay tuned." />
    <title>
        Vaayu Fest - App
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
        <!-- app -->
        <section class="separate-section container bg-gradient" id="app">
            <div class="separate-section-content">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <h2 class="mb-5">
                        Vaayu Fest v2-0
                    </h2>
                    <h3 class="mb-5">
                        A fresh new design, added quirkiness, and a few changes with time.
                    </h3>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <p>
                                In our constant endeavour to evolve and grow, we're back with an updated, redesigned mobile application; a dynamic platform equipped to take on these changing times. It's got everything you need to know about the festival: events, departments, contact points and much more! Plus, there are surprises around the corner. Stay tuned.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="https://play.google.com/store/apps/details?id=com.enfinilabs.vaayufest&hl=en">
                                <img class="p-3" src="<?php echo $base ?>assets/img/app-store-badge.png" style="width: 100%;" />
                            </a>
                            <a href="https://apps.apple.com/in/app/vaayufest/id1481102009">
                                <img class="p-3" src="<?php echo $base ?>assets/img/play-store-badge.png" style="width: 100%;" />
                            </a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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