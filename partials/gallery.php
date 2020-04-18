
        <article>
            <header>
                <h1>GALLERY</h1>
            </header>
            <section>
                <div class="main wrapper clearfix">
                    <?php 
                        $dir = glob('../img/gallery1/{*.jpeg, *.png}', GLOB_BRACE);

                        foreach ($dir as $imageFile) {
                            $filedata = exif_read_data($imageFile);
                            if(is_array($filedata) && isset($filedata['ImageDescription'])){
                                $imageDescription = $filedata['ImageDescription'];
                            }else{
                                $imageDescription = "";
                            }
                    ?>
                    <div class="gallery">
                        <a target="_blank" href="">
                            <img src="<?php echo $imageFile; ?>" alt="Cinque Terre">
                        </a>
                        <div class="desc"><?php echo $imageDescription; ?></div>
                    </div>
                    <?php 
                        } 
                    ?>

                </div>
            </section>
        </article>
