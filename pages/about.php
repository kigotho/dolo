        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/home.php'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/about.css"  media="screen" />   
        <section>
             <div id="about_section">
                    <h3>Fade in Tabs</h3>
                    
                    <div class="tab">
                      <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
                      <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                    </div>
                    
                    <div id="London" class="tabcontent">
                      <p>London is the capital city of England.</p>
                    </div>
                    
                    <div id="Paris" class="tabcontent">
                      <p>Paris is the capital of France.</p> 
                    </div>
                    
                    <div id="Tokyo" class="tabcontent">
                      <p>Tokyo is the capital of Japan.</p>
                    </div>
                    
                    <script>
                    function openCity(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }
                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                    </script>
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