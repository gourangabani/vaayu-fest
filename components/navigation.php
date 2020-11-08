<nav id="mainNav" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/index.php">
            <img src="assets/graphics/vaayu-20-logo-transparent-compressed.png" alt="Vaayu Fest - Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php
            if (basename($_SERVER['REQUEST_URI']) == 'index.php' || basename($_SERVER['REQUEST_URI']) == '' || basename($_SERVER['REQUEST_URI']) == NULL || basename($_SERVER['REQUEST_URI']) == '/') {
                echo '
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#aboutSection">
                            The Fest
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#gallerySection">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#temporaryTeamSection">
                            Team
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sponsors.php">
                            Sponsors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="happenings.php">
                            Happenings
                        </a>
                    </li>
                </ul>
                ';
            } else {
                echo '
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#aboutSection">
                            The Fest
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#gallerySection">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#temporaryTeamSection">
                            Team
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sponsors.php">
                            Sponsors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="happenings.php">
                            Happenings
                        </a>
                    </li>
                </ul>
                ';
            }
            ?>
        </div>
    </div>
</nav>