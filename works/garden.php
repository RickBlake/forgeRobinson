<!doctype html>

<html lang="en-gb">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>GARDEN / JARDIN</title>
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
    <?php include '../driveAuth.php';?>

    <div class="main wrapper clearfix">
        <div id="gallery">
            <div>
                <div class="galleryHeader">
                    <h1>GARDEN / JARDIN</h1>
                </div>
                <div class="main wrapper clearfix">
                    <div id="gallery">

                        <?php 
                         
                            $folderId = '1vT5P2OnW1FP5LhAFyU_9JNa1rw2wC4vp';
                            $responseFolder = $client->get('drive/v2/files?q=\'' . $folderId . '\'+in+parents');
                            $folderData = $responseFolder->getBody();
                            $driveFolder = json_decode($folderData, true);

                            foreach ($driveFolder['items'] as $imageFile) {
                                $imagePath = 'https://drive.google.com/uc?id=' . $imageFile['id'];
                                $imageDescription = str_replace($imageFile['description'], '"', '\'') . ' <br/>©SIMON ROBINSON ' . date("Y") . ' ALL RIGHTS RESERVED';
                            
                        ?>
                        <div class="gallery-item" data-src="<?php echo $imagePath; ?>"
                            data-sub-html="<?php echo $imageDescription; ?>"
                            data-pinterest-text="Work by Forge Robinson" data-tweet-text="Work by Forge Robinson"
                            data-facebook-text="Work by Forge Robinson">
                            <img src="/img/loading.gif" data-src="<?php echo $imagePath; ?>"/>
                        </div>

                        <?php 
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div> <!-- #main-container -->

    <?php include '../footer.php';?>

    <script>
        $('#gallery').lightGallery({
            selector: '.gallery-item',
            enableDrag: false
        });
    </script>

    <script>
    window.addEventListener('load', function(){
        var allimages= document.getElementsByTagName('img');
        for (var i=0; i<allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
    }, false)
    </script>
</body>

</html>