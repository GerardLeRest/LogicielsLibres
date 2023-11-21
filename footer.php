<footer>
    <div class = "container">
        <div class="row border-top my-3 py-3 justify-content-between">    
            <div class="col-sm-12 col_md-12 col-lg-10">
                    <?php 
                        require_once('constantes.php');
                        echo "source: " . $footerFront[$indice]; 
                    ?>
            </div>
                <div class="col-sm-12 col-md-12 col-lg-2">
                    <figure class="figure"> <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.fr"> 
                        <img src="images/Cc_by-sa.png" alt="Cc-by-sa.png" class="img-responsive my-1"> 
                        <figcaption class="figure-caption">licence CC-BY-SA 4.0</figcaption>
                    </figure>
                </div>
            </div>  
        </div>
    </div>
</footer>