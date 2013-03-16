<?php
    include 'common.inc.php';
    $page = new Page('Group Photos');
    $page->head();
    ?>
    
    <body>
    
    <?php
    $page->menutop();
    $page->menuside(); 
    ?>
    
    <div id="content" class="group_photo">
        
        <div id="main_head">
            <h1> Corrosion Science and Electrochemistry Group</h1>
        </div>
        <div id="page_head">
            <h2> Group Photos</h2>
        </div>
        
        <div class="image_outer">
                <div class="image_caption"><a href="images/feb_09_a_large.jpg"><img src="images/feb_09_a_thumb.jpg" alt="Feb 2009" title="Click here for larger image"/></a>
                <div class="caption">February 2009</div></div>
                <div class="image_caption"><a href="images/feb_09_b_large.jpg"><img src="images/feb_09_b_thumb.jpg" alt="Feb 2009" title="Click here for larger image"/></a>
                <div class="caption">February 2009</div></div></div>
        <div class="image_outer">
                <div class="image_caption"><a href="images/nov_07_a_large.jpg"><img src="images/nov_07_a_thumb.jpg" alt="Nov 2007" title="Click here for larger image"/></a>
                <div class="caption">November 2007</div></div>
                <div class="image_caption"><a href="images/nov_07_b_large.jpg"><img src="images/nov_07_b_thumb.jpg" alt="Nov 2007" title="Click here for larger image"/></a>
                <div class="caption">November 2007</div></div></div>
          <div class="image_outer">
                <div class="image_caption"><a href="images/a2006_large.jpg"><img src="images/a2006_thumb.jpg" alt="2006" title="Click here for larger image"/></a>
                <div class="caption">2006</div></div></div>
        
        
        
        <?php
        $page->footer();
        ?>
        
    </div>
    
    </body>
</html>
        
