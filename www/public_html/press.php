<!doctype html>

<html lang="en-gb">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PRESS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>

    <?php include 'header.php';?>

    <div class="fullwidthHeader">
        <h1>PRESS</h1>
    </div>
    <div class="panoramic">
        <img src="img/press.jpg"></img>
    </div>

    <div class="main-container">
        <div>
            <div class="main wrapper clearfix">
                <div id="pageContent">
                    <br />
                    <h2>Article - L'Orne Combattante 04/06/2009</h2>
                    <img src="/img/press1.png" width="100%" />
                    <br /><br />
                    <h2>Article - Ouest France 23/09/2016</h2>
                    <img src="/img/press3.png" width="100%" />
                    <br /><br />
                    <h2>Article - L'Orne Combattane 26/05/2020</h2>
                    <img src="/img/press2.png" width="100%" />

                    <br /><br />
                    <h2>Anvil's Ring</h2>

                    <div style="<?php isEn() ?>">

                        <p class="pdfLink">
                            <table>
                                <tr><td rowspan="2"><a href="/pdf/Anvils-Ring-1.pdf" target="_blank"><img src="/img/pdf.png" class="pdfIcon"/></a>
                                </td><td><a href="/pdf/Anvils-Ring-1.pdf" target="_blank">Article - Anvils Ring. Summer 2013
                                    Edition.</a></td></tr>
                            </table>       
                        </p>

                        <p class="pdfLink">
                            <table>
                                <tr><td rowspan="2"><a href="/pdf/How-Design-Happens-1.pdf" target="_blank"><img src="/img/pdf.png" class="pdfIcon"/></a>
                                </td><td><a href="/pdf/How-Design-Happens-1.pdf" target="_blank">How Design Happens Part One.</a></td></tr>
                            </table>       
                        </p>

                        <p class="pdfLink">
                            <table>
                                <tr><td rowspan="2"><a href="/pdf/How-Design-Happens-2.pdf" target="_blank"><img src="/img/pdf.png" class="pdfIcon"/></a>
                                </td><td><a href="/pdf/How-Design-Happens-2.pdf" target="_blank">How Design Happens Part Two.</a></td></tr>
                            </table>       
                        </p>

                        <h2>BBC Broadcast, 29 January 2006</h2>
                        <p> The history of Blacksmithing - not just any metal gates.</p>
                    </div>

                    <div style="<?php isFr() ?>">

                        <p class="pdfLink">
                            <table>
                                <tr><td rowspan="2"><a href="/pdf/Anvils-Ring-1.pdf" target="_blank"><img src="/img/pdf.png" class="pdfIcon"/></a>
                                <tr><td><a href="/pdf/Anvils-Ring-1.pdf" target="_blank">Article paru dans Anvils Ring, numéro d'été
                                    2013.</a></td></tr>
                            </table>       
                        </p>

                        <p class="pdfLink">
                            <table>
                                <tr><td rowspan="2"><a href="/pdf/How-Design-Happens-1.pdf" target="_blank"><img src="/img/pdf.png" class="pdfIcon"/></a>
                                <tr><td><a href="/pdf/How-Design-Happens-1.pdf" target="_blank">Le Processus du Dessin, première partie.</a></td></tr>
                            </table>       
                        </p>

                        <p class="pdfLink">
                            <table>
                                <tr><td rowspan="2"><a href="/pdf/How-Design-Happens-2.pdf" target="_blank"><img src="/img/pdf.png" class="pdfIcon"/></a>
                                <tr><td><a href="/pdf/How-Design-Happens-2.pdf" target="_blank">Le Processus du Dessin, deuxième
                                    partie.</a></td></tr>
                            </table>       
                        </p>

                        <h2>Diffusion de la BBC, 29 janvier 2006</h2> 
                        <p>L'histoire de la ferronnerie - pas n'importe quel portail.</p>

                    </div>
                    <audio controls="controls">
                        <source src="/audio/blacksmith-prog.mp3" type="audio/mpeg" />
                        Your browser does not support the audio element.
                    </audio>


                    <div class="videoWrapper">

                        <iframe src="https://www.youtube.com/embed/5RXvZj2xrwc" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                    <div class="videoWrapper">

                        <iframe frameborder="0" src="https://www.dailymotion.com/embed/video/x7smgik" allowfullscreen
                            allow="autoplay"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- #main-container -->

    <?php include 'footer.php';?>

</body>

</html>