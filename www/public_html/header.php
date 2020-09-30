<?php 

    $path;
    if (file_exists('../vendor/autoload.php')) {
        $path = '../vendor/autoload.php';
    } else {
        $path = '../../vendor/autoload.php';
    }
    require_once $path;

    function isEn() {
        if($_GET['lang'] == 'en'){
            echo "display: block;";
        } else {
            echo "display: none;";
        }
    }

    function isFr() {
        if($_GET['lang'] == 'fr'){
            echo "display: block;";
        } else {
            echo "display: none;";
        }
    }

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
                            <a href="/mission.php?lang=<?php echo$_GET['lang']?>" class="navLink">MISSION</a>
                            <a href="/simon.php?lang=<?php echo$_GET['lang']?>" class="navLink">SIMON</a>
                            <a href="/antony.php?lang=<?php echo$_GET['lang']?>" class="navLink">ANTONY</a>
                            <a href="/betsy.php?lang=<?php echo$_GET['lang']?>" class="navLink">BETSY</a>
                            <a href="/press.php?lang=<?php echo$_GET['lang']?>" class="navLink">PRESS</a>
                        </div>
                    </li>
                    <li><a href="/works/" class="navLink">WORKS</a></li>
                    <li class="dropdown">
                        <a href="#">APPROACH <i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="/process.php?lang=<?php echo$_GET['lang']?>" class="navLink">PROCESS</a>
                            <a href="/sketchbook.php?lang=<?php echo$_GET['lang']?>" class="navLink">SKETCHBOOK</a>
                            <!--<a href="/challenges.php" class="navLink">CHALLENGES</a>-->
                        </div>
                    </li>
                    <li><a href="/contact.php?lang=<?php echo$_GET['lang']?>" class="navLink">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <script>

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;
        
            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');
        
                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };

        var _ddlLoaded = false;

        $('#lang-select').ddslick({
            width:70,
            onSelected: function(data){

                console.log(data.selectedData.value);
                console.log(getUrlParameter('lang'));

                if(_ddlLoaded  === false) {
                    _ddlLoaded = true;
                } else if(data.selectedData.value != getUrlParameter('lang')){
                    var oldURL = window.location.href;
                    var newUrl = oldURL.split("?")[0] + "?lang=" + data.selectedData.value;
                    console.log(newUrl);
                    window.location.href = newUrl;
                }
            }   
        });

        let langIndex = getUrlParameter('lang') === 'en' ? 0 : 1;
        $('#lang-select').ddslick('select', {index: langIndex });

    </script>

    