<?php

    $imgFolder = '../img/' . $folderId . '/';
    $images = glob($imgFolder . '*.{jpg}', GLOB_BRACE);
    natsort($images);

    foreach ($images as $image) {

        $imgTitle = explode(".",basename($image, ".jpg"))[1];
        $imageDescription =  $imgTitle . " <br/><small>&copy; Simon Robinson " . date("Y") . " All rights reserved</small>";
     
 ?>
     <div class="gallery-item" data-src="<?php echo $image; ?>"
         style="background-image: url('<?php echo $image; ?>'), url('/img/loading.gif')"
         data-sub-html="<?php echo $imageDescription; ?>"
         data-pinterest-text="Work by Forge Robinson" data-tweet-text="Work by Forge Robinson"
         data-facebook-text="Work by Forge Robinson">
 
         <img src="<?php echo $image; ?>" hidden/>
         
     </div>
 
 <?php 
     } 
 ?>
 


