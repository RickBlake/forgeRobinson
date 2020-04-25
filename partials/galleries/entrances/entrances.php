
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
                            <a target="_blank" href="">
                                <img src="<?php echo $imagePath; ?>" alt="Cinque Terre">
                            </a>
                            <div class="desc"><?php echo $imageDescription; ?></div>
                        </div>
                        <?php 
                            } 
                        ?>
                    </div>
                </div>
        </div>
