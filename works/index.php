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

                                <a class="gallery-item" 
                                    href="/works/entrances.php"
                                    style="display:block; background-image: url('/img/entrances.webp')">
                                    <div class="content">
                                        ENTRANCES </br>
                                        <i>ENTREES</i>
                                    </div>
                                </a>

                                <a class="gallery-item" 
                                    href="/works/stairways.php"
                                    style="display:block; background-image: url('/img/stairways.webp')">
                                    <div class="content">
                                        STAIRWAYS </br>
                                        <i>ESCALIERS</i>
                                    </div>
                                </a>

                                <a class="gallery-item" 
                                    href="/works/grilles.php"
                                    style="display:block; background-image: url('/img/grilles.webp')">
                                    <div class="content">
                                        GRILLES </br>
                                        <i>GRILLES</i>
                                    </div>
                                </a>

                                <a class="gallery-item" 
                                    href="/works/lighting.php"
                                    style="display:block; background-image: url('/img/lighting.webp')">
                                    <div class="content">
                                        LIGHTING </br>
                                        <i>ECLAIRAGE</i>
                                    </div>
                                </a>

                                <a class="gallery-item" 
                                    href="/works/sculpture.php"
                                    style="display:block; background-image: url('/img/sculpture.webp')">
                                    <div class="content">
                                        SCULPTURE </br>
                                        <i>SCULPTURE</i>
                                    </div>
                                </a>

                                <a class="gallery-item" 
                                    href="/works/garden.php"
                                    style="display:block; background-image: url('/img/garden.webp')">
                                    <div class="content">
                                        GARDEN </br>
                                        <i>JARDIN</i>
                                    </div>
                                </a>

                                <a class="gallery-item" 
                                    href="/works/furniture.php"
                                    style="display:block; background-image: url('/img/furniture.webp')">
                                    <div class="content">
                                        FURNITURE </br>
                                        <i>MEUBLES</i>
                                    </div>
                                </a>

                                <a class="gallery-item" 
                                    href="/works/churches.php"
                                    style="display:block; background-image: url('/img/churches.webp')">
                                    <div class="content">
                                        CHURCHES </br>
                                        <i>EGLISES</i>
                                    </div>
                                </a>

                                <a class="gallery-item" 
                                    href="/works/various.php"
                                    style="display:block; background-image: url('/img/various.webp')">
                                    <div class="content">
                                        VARIOUS </br>
                                        <i>DIVERSES</i>
                                    </div>
                                </a>                           

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