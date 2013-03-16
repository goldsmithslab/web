<?php
    include 'common.inc.php';
    $page = new Page('Alumni');
    $page->head();
    ?>
    
    <body>
    
    <?php
    $page->menutop();
    $page->menuside(); 
    ?>
    
    <div id="content">
        
        <div id="main_head">
            <h1> Corrosion Science and Electrochemistry Group</h1>
        </div>
        <div id="page_head">
            <h2> Alumni</h2>
        </div>
        <div id="recent_alumni_head">
            <h3>Recent Alumni</h3>
        </div>
        
        <?php
    
        //Put images that aren't the standard-sized headshots at the end, otherwise bad things happen
        ?>

        <div class="image_outer">
            <div class="image_caption"><img src="images/btd24.jpg" alt="Ben Daymond" title="Ben Daymond" />
                <div class="caption">Ben Daymond</div></div></div>
        <div class="image_outer">
            <div class="image_caption"><img src="images/xyc21.jpg" alt="Yao Chin" title="Yao Chin" />
                <div class="caption">Yao Chin</div></div></div>
         
        
        <div id="great_alumni_head">
             <h3>Distinguished Alumni</h3>
        </div>
        <div id="great_alumni_body">
        <div class="image_caption"><img src="images/evans.jpg" alt="Ulick Evans" title="Ulick Evans" />
        <div class="caption">Photo by R Leigh, Cambridge</div></div>
        <div id="great_alumni_text">
            <ul>
            <li><h6>Name</h6>Ulick Evans</li>
            <li><h6>Location</h6>Cambridge, UK</li>
            <li><h6>Positions</h6>Emeritus Reader in Metallic Corrosion, FRS, the ‘Father of Corrosion’</li>
            <li><h6>Subjects</h6>Oxide film growth, corrosion fatigue, fuel cells</li>
            <li><h6>Useful Links</h6><a href="http://www.jstor.org/discover/10.2307/769872?uid=3738032&amp;uid=2&amp;uid=4&amp;sid=21100690489001">Biographical Memoir by Sir Alan Cottrell</a></li>
            </ul>
        </div>
        </div>
        
        <?php
        $page->footer();
        ?>
        
        </div>
                
    </body>
</html>
