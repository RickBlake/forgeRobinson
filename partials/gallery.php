<div>
    <div class="main wrapper clearfix">
        <article>
            <header>
                <h1>GALLERY</h1>
            </header>
            <section>
                <div class="main wrapper clearfix">
                    <?php 
                        $dir = glob('../img/gallery1/{*.jpeg, *.png}', GLOB_BRACE);

                        foreach ($dir as $value) {
                    ?>
                    <div class="gallery">
                        <a target="_blank" href="">
                            <img src="<?php echo $value; ?>" alt="Cinque Terre">
                        </a>
                        <div class="desc"><?php echo $value; ?></div>
                    </div>
                    <?php } 
                    ?>

                </div>
            </section>
        </article>
    </div>
</div>