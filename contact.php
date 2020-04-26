<!doctype html>

<html lang="en-gb">

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

    <?php include 'header.php';?>

    <div class="main-container">
        <div>
            <div class="main wrapper clearfix">
                <div id="pageContent">
                    <article>
                        <section>
                            <p>Simon Robinson, Le Pont, 61100 CALIGNY, NORMANDIE, FRANCE.</p>
                            <p>TEL: +53(0)233961716</p>
                            <p>EMAIL: info@forgerobinson.com</p>
                        </section>
                        <section>
                            <img src="img/aboutPhoto.jpeg" width="100%"></img>
                        </section>
                    </article>

                    <aside>
                        <header>
                            <h1>CONTACT</h1>
                        </header>
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