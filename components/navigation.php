<?php
require 'developmentMachineLogic.php';
?>

<!-- navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Vaayu Fest</span>
        <span class="d-none d-lg-block"><img class="img-fluid mx-auto mb-2" src="<?php $_SERVER['DOCUMENT_ROOT'] . '/' . $base; ?>/assets/img/vaayu-20-logo-transparent.png" alt="Logo" /></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <?php
    echo basename($_SERVER['REQUEST_URI']);
    echo $_SERVER['SERVER_NAME'];
    if (basename($_SERVER['REQUEST_URI']) != 'index.php') {
        echo '
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="' . $_SERVER['DOCUMENT_ROOT'] . '/' . $base . '/index.php">
                        Home
                    </a>
                </li>
            </ul>
        </div>
        ';
    } else {
        echo '
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about-us">
                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#gallery">
                        Gallery
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">
                        Team
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#sponsors">
                        Sponsors
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact-us">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
        ';
    }
    ?>
    <div class="social-icons">
        <a class="social-icon" href="https://instagram.com/vaayufest"><i class="fab fa-instagram"></i></a>
        <a class="social-icon" href="https://facebook.com/VaayuFest"><i class="fab fa-facebook-f"></i></a>
        <a class="social-icon" href="https://twitter.com/VaayuFest"><i class="fab fa-twitter"></i></a>
        <a class="social-icon" href="https://linkedin.com/company/vaayu-fest"><i class="fab fa-linkedin-in"></i></a>
        <a class="social-icon" href="https://snapchat.com/add/vaayufest"><i class="fab fa-snapchat"></i></a>
    </div>
</nav>