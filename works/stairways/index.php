<!doctype html>

<html lang="en-gb">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>STAIRWAYS / ESCALIERS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>

    <?php include '../../header.php';?>
    <?php include '../../driveAuth.php';?>

    <div class="main wrapper clearfix">
        <div id="gallery">
            <div>
                <div class="galleryHeader">
                    <h1>STAIRWAYS / ESCALIERS</h1>
                </div>
                <div class="main wrapper clearfix">
                    <div id="gallery">

                        <?php 
                         
                            $folderId = '1KyPlyBiSggkpEbMyvlfsTAOozSmkec9R';
                            $responseFolder = $client->get('drive/v3/files?q=\'' . $folderId . '\'+in+parents');
                            $folderData = $responseFolder->getBody();
                            $driveFolder = json_decode($folderData, true);

                            foreach ($driveFolder['files'] as $imageFile) {

                                $responseFile = $client->get('drive/v2/files/' . $imageFile['id']);
                                $fileData = $responseFile->getBody();
                                $driveFile = json_decode($fileData, true);

                                $imagePath = "https://drive.google.com/uc?id=" . $driveFile['id'];
                                $imageDescription = $driveFile['description'] . " <br/>©SIMON ROBINSON " . date("Y") . " ALL RIGHTS RESERVED";
                            
                                ?>
                        <div class="gallery-item" data-src="<?php echo $imagePath; ?>"
                            data-sub-html="<?php echo $imageDescription; ?>"
                            data-pinterest-text="Work by Forge Robinson" data-tweet-text="Work by Forge Robinson"
                            data-facebook-text="Work by Forge Robinson">
                            <img src="<?php echo $imagePath; ?>" />
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

    <?php include '../../footer.php';?>
    <script>
        $('a.dynamicLoad').click(function (e) {
            e.preventDefault(); // prevent the browser from following the link
            e.stopPropagation(); // prevent the browser from following the link

            $('#pageContent').load($(this).attr('href')).hide().fadeIn();;
            $('#logo').fadeIn();
            console.log('page loaded');
        });
    </script>

    <script>
        $('#gallery').lightGallery({
            selector: '.gallery-item',
            enableDrag: false
        });
    </script>
</body>

</html>