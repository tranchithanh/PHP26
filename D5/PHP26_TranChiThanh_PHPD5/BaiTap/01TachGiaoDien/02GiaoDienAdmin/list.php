<?php
    require_once "inc/header.php";
?>
            <div class="bottom-spacing">
                  <!-- Button -->
                  <?php
                    require_once "main/button_add.php";
                  ?>
            </div>
            
            <div class="grid_12">
                <!-- Example table -->
                <?php
                    require_once "main/list.php";
                ?>
                <div class="pagination">           
                    <div class="numbers">
                        <span>Page:</span> 
                        <a href="">1</a> 
                        <span>|</span> 
                        <a href="">2</a> 
                        <span>|</span> 
                        <span class="current">3</span> 
                        <span>|</span> 
                        <a href="">4</a> 
                        <span>|</span> 
                        <a href="">5</a> 
                        <span>|</span> 
                        <a href="">6</a> 
                        <span>|</span> 
                        <a href="">7</a> 
                        <span>|</span> 
                        <span>...</span> 
                        <span>|</span> 
                        <a href="">99</a>
                    </div> 
                    <div style="clear: both;"></div> 
                </div>
                
			</div> <!-- End .grid_12 -->
                
<?php
    require_once "inc/footer.php";
?>