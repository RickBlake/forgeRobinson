<?php
    if($folderId == 'sketchbook'){
        $imgFolder = './img/' . $folderId . '/';
    }else{
        $imgFolder = '../img/' . $folderId . '/';
    }
    $images = glob($imgFolder . '*.{jpg}', GLOB_BRACE);
    natsort($images);

    foreach ($images as $image) {

        $imgTitle = basename($image, ".jpg");
        $firstDot = strpos($imgTitle, '.');
        $imgName = substr($imgTitle, $firstDot+1, strlen($imgTitle)-1);
        $imageDescription =  $imgName . " <br/><small>&copy; Simon Robinson " . date("Y") . " All rights reserved</small>";
     
 ?>
     <div class="gallery-item" data-src="<?php echo $image; ?>"
         style="background-image: url('<?php echo addslashes($image); ?>'), url('/img/loading.gif')"
         data-sub-html="<?php echo $imageDescription; ?>"
         data-pinterest-text="Work by Forge Robinson" data-tweet-text="Work by Forge Robinson"
         data-facebook-text="Work by Forge Robinson">
 
         <img src="<?php echo $image; ?>" hidden/>
         
     </div>
 
 <?php 
     } 
 ?>
 


