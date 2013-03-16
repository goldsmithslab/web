<?php
    include 'common.inc.php';
    $page = new Page('Group Info');
    $page->head();
    ?>

<body xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    
    <?php
    $page->menutop();
    $page->menuside(); 
    ?>
    
    <div id="content">
        
        <div id="main_head">
            <h1> Corrosion Science and Electrochemistry Group</h1>
        </div>
        <div id="page_head">
            <h2> Group Information</h2>
        </div>
        <div id="group_list">
            <h3>Head of Group</h3>
            <div id="group_head">
                <a href="http://www.msm.cam.ac.uk/department/profiles/burstein.php"><img src="images/gtb1000.jpg" alt="Professor Tim Burstein" /></a><br/>Professor Tim Burstein<br/>gtb1000 *<br/>
            </div>
            <h3>PhD Students</h3>

            <div class="image_outer">
                <div class="image_caption"><img src="images/kf283.jpg" alt="Kieran Fahy" title="Kieran Fahy" />
                    <div class="caption">Kieran Fahy<br/>kf283 *</div></div></div>
            <div class="image_outer">
                <a href="ep320.php"><img src="images/ep320.jpg" alt="Emma Pewsey"/></a>
                    <div class="caption">Emma Pewsey<br/>ep320 *</div></div></div>
            <div class="image_outer">
                <div class="image_caption"><img src="images/ep320.jpg" alt="Abdulaziz Moshaweh" title="Abdulaziz Moshaweh" />
                    <div class="caption">Abdulaziz Moshaweh<br/>am2018 *</div></div></div>
            <div class="image_outer">
                <div class="image_caption"><img src="images/ep320.jpg" alt="Varun Choda" title="Varun Choda" />
                    <div class="caption">Varun Choda<br/>vc273 *</div></div></div>
            <div class="image_outer">
                <div class="image_caption"><img src="images/ep320.jpg" alt="Siti Ahmad-Nor" title="Siti Ahmad-Nor" />
                    <div class="caption">Siti Ahmad-Nor<br/>sna27 *</div></div></div>


        </div>
        <div id="contact_head"></div>
            <h5>Contact Details</h5>
            <p>* Captioned email addresses are all @cam.ac.uk.</p>
            <p>Postal Address:</p>
                <p>Goldsmiths' Lab,<br/>Department of Materials Science and Metallurgy,<br/>New Museums Site,<br/>Pembroke Street,<br/>Cambridge<br/>CB2 3QZ,<br/>U.K.</p>
        </div>
        
        <?php
        $page->footer();
        ?>
        
        
    </body>
</html>
