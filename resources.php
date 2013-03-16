<?php
    include 'common.inc.php';
    $page = new Page('Resources');
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
            <h2> Resources</h2>
        </div>
        <p>Here are some resources from the group. These are available for general 
        interest, but please check with the authors before duplicating or citing the content. 
        Of course the content is not warranteed for any purpose. All rights reserved.</p>
        <div id="resources_list">
            <ul>
            <?php
            resourcelistitem("PDF of Linux/LaTeX Installation Guide",
            "Eric",
            "Instructions for Installing LaTeX. This is actually for my use, so don't expect it to make a lot of sense. It may be useful for installing stuff.",
            "http://www.msm.cam.ac.uk/corrosion/guide-ejr.pdf");
            resourcelistitem("Poster on Thermammetry",
            "Ben T Daymond, Monica Caboneras and G Tim Burstein",
            "Departmental Prizewinner",
            "btd-thermammetry.pdf");
            resourcelistitem("Summary of group work on practical fuel cells",
            "E.J. Rees, C.D.A. Brady, Z.H. Barber, G.T. Burstein",
            "Poster. About 600 KB",
            "ejr-fuelcell.pdf");
            resourcelistitem("Presentation outlining fuel cells",
            "Eric",
            "Presentation from November 2006. (This presentation should open in a new window. It is a powerpoint .ppt file and you will need a browser or reader capable of viewing it.) I was asked to give a presentation outlining fuel cells (2.3 MB) to a group in Computer Science. Without the explanatory speech, this is the slideshow, and I believe there are one or two updates to be made when I have time.",
            "FuelCellsPresentation.ppt");
            ?>
            </ul>
        </div>
        
        <?php
        $page->footer();
        ?>       
        
    </div>
                
    </body>
</html>
