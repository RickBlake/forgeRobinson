<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="header-container">
        <header class="wrapper clearfix">
            <!-- <h1 class="title">dsdsdsd -->
            <img id="logo" class="title" src="img/forceRobinsonLogo.png"></img>
            <!-- </h1> -->
            <nav>
                <ul>
                    <li class="dropdown">
                        <a href="#">ABOUT <i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="partials/mission.html" class="dynamicLoad">MISSION</a>
                            <a href="partials/simon.html" class="dynamicLoad">SIMON</a>
                            <a href="partials/antony.html" class="dynamicLoad">ANTONY</a>
                            <a href="partials/press.html" class="dynamicLoad">PRESS</a>
                        </div>
                    </li>
                    <li><a href="partials/works.html" class="dynamicLoad">WORKS</a></li>
                    <li class="dropdown">
                        <a href="#">APPROACH <i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="partials/process.html" class="dynamicLoad">PROCESS</a>
                            <a href="partials/galleries/sketchbook/sketchbook.php" class="dynamicLoad">SKETCHBOOK</a>
                            <a href="partials/challenges.html" class="dynamicLoad">CHALLENGES</a>
                        </div>
                    </li>
                    <li><a href="partials/contact.html" class="dynamicLoad">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="main-container">
        <div>
            <div class="main wrapper clearfix">
                <div id="pageContent">

                </div>
            </div>
        </div>
    </div> <!-- #main-container -->

    <div class="footer-container">
        <footer>
            <div class="wrapper">
                <p>©SIMON ROBINSON <?php echo date("Y");?> ALL RIGHTS RESERVED</p>
            </div>    
        </div>
        </footer>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.5.0.min.js"><\/script>')
    </script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/js/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.1.0/lg-thumbnail.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lg-hash/1.0.4/lg-hash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lg-share/1.1.0/lg-share.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lg-zoom/1.1.0/lg-zoom.min.js"></script>

</body>

</html>