<div>
    <header>
        <h1>ENTRANCES</h1>
    </header>
    <div class="main wrapper clearfix">

        <div class="gallery">

            <?php 
                $dir = getcwd() . '/*.jpeg';
                $relativePath = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));

                $imageList = glob($dir, GLOB_BRACE);

                foreach ($imageList as $imageFile) {
                    $filedata = exif_read_data($imageFile);
                    $imagePath = $relativePath . '/' . $filedata['FileName'];
                    if(is_array($filedata) && isset($filedata['ImageDescription'])){
                        $imageDescription = $filedata['ImageDescription'];
                    }else{
                        $imageDescription = "";
                    }
            ?>

            <div class="gallery-item">
                <a href="<?php echo $imagePath; ?>">
                    <img src="<?php echo $imagePath; ?>">
                </a>
                <div class="desc"><?php echo $imageDescription; ?></div>
            </div>
            <?php 
                } 
            ?>
        </div>
    </div>
</div>
<script>
    $('.gallery').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image'
        // other options
      });
</script>