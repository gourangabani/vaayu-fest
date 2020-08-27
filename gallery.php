<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'components/meta.php';
    ?>
    <meta name="description" content="What was conceived out of pure passion for empowering the youth of our nation, has now transformed into one of the fastest growing cultural festivals of India. Boasting an annual footfall of about 35000, Vaayu is so much more than what meets the eye: an assemblage of people from throughout the country, an opportunity to jump start your career under the guidance of the most renowned entities, a median that promotes youth empowerment through every facet of its activities, but most importantly, it is a place where everlasting bonds are forged." />
    <meta property="og:title" content="Vaayu '20" />
    <meta property="og:description" content="Vaayu is a national level college festival of NMIMS" />
    <title>
        Vaayu Fest - Gallery
    </title>
    <?php
    include 'components/stylesheets.php';
    ?>
    <link rel="stylesheet" type="text/css" href="css/gallery/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/gallery/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/gallery/component.css" />
    <script src="js/gallery/modernizr.custom.js"></script>
    <link rel="stylesheet" type="text/css" href="css/animated-ticker.css" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/gallery/magnific-popup.css">
</head>

<body id="page-top">
    <?php
    include 'components/preloader.php';
    include 'components/navigation.php';
    ?>
    <div class="container-fluid">
        <!-- gallery images -->
        <section class="separate-section container" id="gallery-images">
            <div class="separate-section-content">
                <div class="p-5 bg-dark rounded shadow mb-5">
                    <h2 class="mb-5 text-white">
                        <?php echo ucfirst($_GET['path']); ?>
                    </h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1 gallery-grid-wrap">
                            <ul class="gallery-grid swipe-rotate" id="gallery-grid">
                                <?php
                                $data['images'] = scandir('media/images/gallery/' . $_GET['path'] . '/');
                                $index = 0;
                                foreach ($data['images'] as $row) {
                                    if ($index >= 2) {
                                        echo '
                                        <li>
                                            <a href="media/images/gallery/' . $_GET['path'] . '/' . $row . '">
                                                <img src="media/images/gallery/' . $_GET['path'] . '/' . $row . '" alt="">
                                            </a>
                                        </li>
                                        ';
                                    }
                                    $index += 1;
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    include 'components/scripts.php';
    ?>
    <script src="js/gallery/masonry.pkgd.min.js"></script>
    <script src="js/gallery/imagesloaded.pkgd.min.js"></script>
    <script src="js/gallery/classie.js"></script>
    <script src="js/gallery/colorfinder-1.1.js"></script>
    <script src="js/gallery/gridScrollFx.js"></script>
    <script src="js/animated-ticker.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="js/gallery/jquery.magnific-popup.js"></script>
    <script>
        new GridScrollFx(document.getElementById('gallery-grid'), {
            viewportFactor: 0.4
        });
        $(document).ready(function() {
            $('#gallery-grid').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        return 'Public Relations<small>Vaayu Fest</small>';
                    }
                }
            });
        });
    </script>
</body>

</html>

<?php
include 'components/notes.php';
?>