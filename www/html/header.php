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

            <a href="/">
                <img id="logo" class="title" src="/img/logo.jpg"></img>
            </a>

            <nav>
                <!--
                <form method="post" action="#">
                    <select name="langSelect" id="langSelect" onchange="this.form.submit()">
                        <option value="" <?php if($_SESSION['lang']== "") echo "selected"; ?>>Default</option>
                        <option value="eng" <?php if($_SESSION['lang']== "eng") echo "selected"; ?>>English</option>
                        <option value="fr" <?php if($_SESSION['lang']== "fr") echo "selected"; ?>>French</option>
                    </select>
                </form>
                
                <?php
                    if(isset($_POST['langSelect'])){  
                        session_start();
                        $_SESSION['lang'] = $_POST['langSelect']; 
                        echo "You have selected: " .$_SESSION['lang']; 
                    }
                ?>
                -->
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
                            <a href="/challenges.php" class="navLink">CHALLENGES</a>
                        </div>
                    </li>
                    <li><a href="/contact.php" class="navLink">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </div>