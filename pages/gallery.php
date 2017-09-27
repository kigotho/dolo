       <?php require_once($_SERVER['DOCUMENT_ROOT'].'/home.php'); ?>
       <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/gallery.css"  media="screen" />   
        <section>
             <div id="gallery_section">
                    <h3>Fade in Tabs</h3>
                    <div class="cranes">
                        <img class="crane_a" src="<?php echo BASE_URL; ?>images/logo.jpg" width="125" height="82" alt="Flying Bat">
                        <img class="crane_b" src="<?php echo BASE_URL; ?>images/logo.jpg" width="125" height="82" alt="Flying Bat">   
                    </div>
                    <marquee id="marquee" behavior="scroll" direction="up" scrollamount="4">
                    <img src="<?php echo BASE_URL; ?>images/logo.jpg" width="125" height="82" alt="Flying Bat">
                    </marquee>
                    <marquee id="marquee" behavior="scroll" direction="up" scrollamount="4">
                    <img src="<?php echo BASE_URL; ?>images/logo.jpg" width="125" height="82" alt="Flying Bat">
                    </marquee>
             </div>
        </section>
        <article>
              <?php require_once($_SERVER['DOCUMENT_ROOT'].'/article.php'); ?>
        </article>
        <footer>        
             <?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
        </footer>
    </body>
</html>
