<?php 

    $path;
    if (file_exists('../vendor/autoload.php')) {
        $path = '../vendor/autoload.php';
    } else {
        $path = '../../vendor/autoload.php';
    }
    require_once $path;

?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>

<div class="header-container">
        <header class="wrapper clearfix">

            <div>
                <a href="/">
                    <img id="logo" class="title" src="/img/logo.jpg"></img>
                </a>
            </div>

            <select id="lang-select">
                <option value="en" data-imagesrc="/img/en-flag-small.png"></option>
                <option value="fr" data-imagesrc="/img/fr-flag-small.png"></option>
            </select>

            <nav>
                <ul>
                    <li class="dropdown">
                        <a href="#">ABOUT <i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="/mission.php" class="navLink">MISSION</a>
                            <a href="/simon.php" class="navLink">SIMON</a>
                            <a href="/antony.php" class="navLink">ANTONY</a>
                            <a href="/betsy.php" class="navLink">BETSY</a>
                            <a href="/press.php" class="navLink">PRESS</a>
                        </div>
                    </li>
                    <li><a href="/works/" class="navLink">WORKS</a></li>
                    <li class="dropdown">
                        <a href="#">APPROACH <i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="/process.php" class="navLink">PROCESS</a>
                            <a href="/sketchbook.php" class="navLink">SKETCHBOOK</a>
                            <!--<a href="/challenges.php" class="navLink">CHALLENGES</a>-->
                        </div>
                    </li>
                    <li><a href="/contact.php" class="navLink">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <script>

        $('#lang-select').ddslick({
            width:70,
            onSelected: function(data){

                var oldURL = window.location.href;
                var type = "Active";
                if (history.pushState) {

                    var newUrl = oldURL.split("&")[0] + "&lang=" + data.selectedData.value;
                    window.history.pushState({ path: newUrl }, '', newUrl);
                }
                return false;
            }   
        });


    </script>

    