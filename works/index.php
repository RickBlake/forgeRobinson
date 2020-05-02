<!doctype html>

<html lang="en-gb">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>WORKS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>

    <?php include '../header.php';?>

    <div class="main-container">
        <div>
            <div class="main wrapper clearfix">
                <div id="pageContent">
                    <div>
                        <div class="fullwidthHeader">
                            <h1>WORKS</h1>
                        </div>
                        <div class="main wrapper clearfix">
                            <div id="gallery">

                                <div class="gallery-item">
                                    <a href="/works/entrances/" class="image-container">
                                        <img src="/img/ENTRANCES.webp">
                                        <div class="en-desc">ENTRANCES</div>
                                        <div class="fr-desc">ENTREES</div>
                                    </a>
                                </div>

                                <div class="gallery-item">
                                    <a target="_blank" href="" class="dynamicLoad image-container">
                                        <img src="/img/STAIRWAYS.webp">
                                        <div class="en-desc">STAIRWAYS</div>
                                        <div class="fr-desc">ESCALIERS</div>
                                    </a>
                                </div>

                                <div class="gallery-item">
                                    <a target="_blank" href="" class="dynamicLoad image-container">
                                        <img src="/img/GRILLES.webp">
                                        <div class="en-desc">GRILLES</div>
                                        <div class="fr-desc">GRILLES</div>
                                    </a>
                                </div>

                                <div class="gallery-item">
                                    <a target="_blank" href="" class="dynamicLoad image-container">
                                        <img src="/img/LIGHTING.webp">
                                        <div class="en-desc">LIGHTING</div>
                                        <div class="fr-desc">ECLAIRAGE</div>
                                    </a>
                                </div>

                                <div class="gallery-item">
                                    <a target="_blank" href="" class="dynamicLoad image-container">
                                        <img src="/img/SCULPTURE.webp">
                                        <div class="en-desc">SCULPTURE</div>
                                        <div class="fr-desc">SCULPTURE</div>
                                    </a>
                                </div>

                                <div class="gallery-item">
                                    <a target="_blank" href="" class="dynamicLoad image-container">
                                        <img src="/img/GARDEN.webp">
                                        <div class="en-desc">GARDEN</div>
                                        <div class="fr-desc">JARDIN</div>
                                    </a>
                                </div>

                                <div class="gallery-item">
                                    <a target="_blank" href="" class="dynamicLoad image-container">
                                        <img src="/img/FURNITURE.webp">
                                        <div class="en-desc">FURNITURE</div>
                                        <div class="fr-desc">MEUBLES</div>
                                    </a>
                                </div>

                                <div class="gallery-item">
                                    <a target="_blank" href="" class="dynamicLoad image-container">
                                        <img src="/img/CHURCHES.webp">
                                        <div class="en-desc">CHURCHES</div>
                                        <div class="fr-desc">EGLISES</div>
                                    </a>
                                </div>

                                <div class="gallery-item">
                                    <a target="_blank" href="" class="dynamicLoad image-container">
                                        <img src="/img/VARIOUS.webp">
                                        <div class="en-desc">VARIOUS</div>
                                        <div class="fr-desc">DIVERSES</div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> <!-- #main-container -->

    <?php include '../footer.php';?>
    <script>
        $('a.dynamicLoad').click(function (e) {
            e.preventDefault(); // prevent the browser from following the link
            e.stopPropagation(); // prevent the browser from following the link

            $('#pageContent').load($(this).attr('href')).hide().fadeIn();;
            $('#logo').fadeIn();
            console.log('page loaded');
        });
    </script>
</body>

</html>