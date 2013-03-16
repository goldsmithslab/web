<?php
    include 'common.inc.php';
    $page = new Page('Home');
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
        <div class="image_outer">
            <div id="home_photo">
                <img src="images/feb_09_b_large.jpg" alt="Corrosion Science and Electrochemistry Group 2009" />
            </div>
            <div id="languages">
                <img src="images/chinese.jpg" alt="Corrosion Science and Electrochemistry Group" />
            </div>
        </div>
        <div id="welcome">
        <h4>Welcome to the Corrosion Science and Electrochemistry Group.</h4>
        </div>
        <p>The main research interests of the CSEG include aluminum pitting and 
        corrosion, the passivation of steel, and the development of platinum and 
        non-noble electrocatalysts for use in proton exchange membrane fuel cells 
        (PEMFCs) and direct methanol fuel cells (DMFCs). Our work is highly
        practically orientated and we collaborate closely with industrial partners.</p>

        <p>Follow us on Twitter! <a href="https://twitter.com/GoldsmithsLab">@GoldsmithsLab</a></p>
    
        <?php
        $page->footer();
        ?>
    
    </div>
        
    </body>
</html>
