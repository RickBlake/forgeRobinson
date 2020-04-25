<div>
    <header>
        <h1>ENTRANCES</h1>
    </header>
    <div class="main wrapper clearfix">

        <div class="gallery">

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

            <div class="gallery-item">
                <a href="<?php echo $imagePath; ?>" title="<?php echo $imageDescription; ?>">
                    <img src="<?php echo $imagePath; ?>">
                </a>
            </div>
            <?php 
                } 
            ?>
        </div>
    </div>
</div>
<script>
    $('.gallery').magnificPopup({
        delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
      });
</script>