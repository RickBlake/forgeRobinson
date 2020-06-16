<?php 

    $path;
    if (file_exists('../vendor/autoload.php')) {
        $path = '../vendor/autoload.php';
    } else {
        $path = '../../vendor/autoload.php';
    }
    require_once $path;

?>

<div class="header-container">
        <header class="wrapper clearfix">
            <img id="logo" class="title" src="/img/logo.webp"></img>
            <nav>
                <ul>
                    <li class="dropdown">
                        <a href="#">ABOUT <i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="/mission.php" class="navLink">MISSION</a>
                            <a href="/simon.php" class="navLink">SIMON</a>
                            <a href="/antony.php" class="navLink">ANTONY</a>
                            <a href="/press.php" class="navLink">PRESS</a>
                        </div>
                    </li>
                    <li><a href="/works/" class="navLink">WORKS</a></li>
                    <li class="dropdown">
                        <a href="#">APPROACH <i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="/process.php" class="navLink">PROCESS</a>
                            <a href="/sketchbook.php" class="navLink">SKETCHBOOK</a>
                            <a href="/challenges.php" class="navLink">CHALLENGES</a>
                        </div>
                    </li>
                    <li><a href="/contact.php" class="navLink">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </div>