<div>
    <header>
        <h1>ENTRANCES</h1>
    </header>
    <div class="main wrapper clearfix">

        <div id="gallery">

            <?php 
                $dir = getcwd() . '/*.jpg';
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

            <a class="gallery-item" href="<?php echo $imagePath; ?>">
                <img src="<?php echo $imagePath; ?>" />
            </a>

            <?php 
                } 
            ?>
        </div>
    </div>
</div>
<script>
    $('#gallery').lightGallery({
        selector: '.gallery-item'
    });
</script>