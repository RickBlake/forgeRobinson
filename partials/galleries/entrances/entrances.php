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
            <div class="gallery-item" data-src="<?php echo $imagePath; ?>"
                data-pinterest-text="Work by Forge Robinson" 
                data-tweet-text="Work by Forge Robinson" 
                data-facebook-text="Work by Forge Robinson">  
                <img src="<?php echo $imagePath; ?>" />      
            </div>

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