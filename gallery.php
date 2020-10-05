<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/meta.php') ?>
    <meta name="description" content="VAAYU: a metaphor of people, a carrier of hope, a treasure of memories, a haven for magical moments, a dream lived by many. It's a rising: invincible, powerful, mystical." />
    <meta property="og:title" content="Vaayu '20 - Get Empowered!" />
    <meta property="og:description" content="VAAYU: a metaphor of people, a carrier of hope, a treasure of memories, a haven for magical moments, a dream lived by many. It's a rising: invincible, powerful, mystical." />
    <title>
        Vaayu Fest - Gallery
    </title>
    <?php include_once('./components/stylesheets.php') ?>
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/gallery/normalize.css" /> -->
    <link rel="stylesheet" type="text/css" href="assets/css/gallery/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/gallery/component.css" />
    <script src="assets/js/gallery/modernizr.custom.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/animated-ticker.css" />
    <!-- magnific popup core css file -->
    <link rel="stylesheet" href="assets/css/gallery/magnific-popup.css">
</head>

<body id="page-top">
    <?php include_once './components/navigation.php'; ?>
    <!-- gallery -->
    <section id="gallerySection" class="customSection customStandaloneSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <h2 class="customSectionTitle customStandaloneSectionTitle">
                        <?php echo ucfirst($_GET['path']); ?>
                    </h2>
                </div>
                <div class="col-lg-11 col-md-11 col-sm-12">
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
            <div class="row">
            </div>
        </div>
    </section>
    <?php include_once './components/footer.php'; ?>
    <?php include_once './components/scripts.php'; ?>
    <?php include_once './components/modals.php'; ?>
    <script src="assets/js/gallery/masonry.pkgd.min.js"></script>
    <script src="assets/js/gallery/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/gallery/classie.js"></script>
    <script src="assets/js/gallery/colorfinder-1.1.js"></script>
    <script src="assets/js/gallery/gridScrollFx.js"></script>
    <script src="assets/js/animated-ticker.js"></script>
    <!-- magnific popup core js file -->
    <script src="assets/js/gallery/jquery.magnific-popup.js"></script>
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