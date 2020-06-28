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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
                            <img class="profile" src="img/contact.jpg" width="100%"></img>
                        </section>
                    </article>

                    <aside>
                        <div class="contact-container">
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
                                            <input type="text" id="email" name="email" placeholder="EMAIL">
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
                                            <div class="g-recaptcha" data-sitekey="6LcC-agZAAAAADMs2dmYS6Iq3yCsWvruooogPLYi"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span id="validation-info" class="info"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button id="submitBtn" class="submitButton" onClick="sendContact();">Send</button>
                                            <button id="sentBtn" class="messageSent hidden">Message Sent</button>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div> <!-- #main-container -->

    <?php include 'footer.php';?>

</body>

<script>
    function sendContact() {
        var valid;	
        valid = validateContact();
        if(valid) {
            jQuery.ajax({
                url: "mail.php",
                data:'fname='+$("#fname").val()+
                '&lname='+$("#lname").val()+
                '&email='+$("#email").val()+
                '&company='+$("#company").val()+
                '&subject='+$("#subject").val()+
                '&message='+$("#message").val()+
                '&gRecaptchaResponse='+grecaptcha.getResponse(),
                type: "POST",
                success:function(data){
                    $("#submitBtn").addClass('hidden');
                    $("#sentBtn").removeClass('hidden');
                    $("#fname").prop('disabled', true);
                    $("#lname").prop('disabled', true);
                    $("#email").prop('disabled', true);
                    $("#company").prop('disabled', true);
                    $("#subject").prop('disabled', true);
                    $("#message").prop('disabled', true);
                },
                error:function (){}
            });
        }
    }

    function validateContact() {
        var valid = true;	
        $("#validation-info").html("Please complete all your contact details.");

        if(!$("#fname").val()) {
            $("#fname").css('border-color','#DC143C');
            valid = false;
        }else{
            $("#fname").css('border-color','#405951');
        }

        if(!$("#lname").val()) {
            $("#lname").css('border-color','#DC143C');
            valid = false;
        }else{
            $("#lname").css('border-color','#405951');
        }

        if(!$("#company").val()) {
            $("#company").css('border-color','#DC143C');
            valid = false;
        }else{
            $("#company").css('border-color','#405951');
        }

        if(!$("#email").val()) {
            $("#email").css('border-color','#DC143C');
            valid = false;
        }else if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#validation-info").html("The email address you entered is not valid.");
            $("#email").css('border-color','#DC143C');
            valid = false;
        }else{
            $("#email").css('border-color','#405951');
        }

        if(!$("#subject").val()) {
            $("#subject").css('border-color','#DC143C');
            valid = false;
        }else{
            $("#subject").css('border-color','#405951');
        }

        if(!$("#message").val()) {
            $("#message").css('border-color','#DC143C');
            valid = false;
        }else{
            $("#message").css('border-color','#405951');
        }

        if(valid) {
            var v = grecaptcha.getResponse();
            if(v.length == 0)
            {
                $("#validation-info").html("Please confirm you are not a robot.");
                valid = false;
            }
        }

        if(valid) $("#validation-info").html("");
        return valid;
    }


</script>

</html>