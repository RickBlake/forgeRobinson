<!doctype html>

<html lang="en-gb">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CONTACT</title>
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

    <div class="main-container">
        <div>
            <div class="main wrapper clearfix">
                <div id="pageContent">

                    <div class="fullwidthHeader">
                        <h1>CONTACT</h1>
                    </div>

                    <article>
                        <section>
                            <table class="contactAddress">
                                <tr>
                                    <td><p>Simon Robinson</td>   
                                    <td><p>Le Pont, 61100 Caligny, Normandie, France.</p></td>
                                </tr>
                            </table>
                            <p>TEL: +33 (0)233 96 17 16</p>
                            <p>EMAIL: info@forgerobinson.com</p>
                        </section>
                        <section>
                            <img src="img/contact.webp" width="100%"></img>
                        </section>
                    </article>

                    <aside>
                        <div class="contact-container">
                            <form action="/action_page.php">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" id="fname" name="firstname" placeholder="NAME">
                                        </td>
                                        <td>
                                            <input type="text" id="lname" name="lastname" placeholder="SURNAME">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="text" id="company" name="company" placeholder="COMPANY NAME">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="text" id="subject" name="subject"
                                                placeholder="ENQUIRY SUBJECT">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <textarea id="message" name="message" placeholder="MESSAGE"
                                                style="height:200px"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" class="button" value="SEND" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </aside>


                </div>
            </div>
        </div>
    </div> <!-- #main-container -->

    <?php include 'footer.php';?>

</body>

</html>