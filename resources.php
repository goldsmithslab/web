<?php
    include 'common.inc.php';
    $page = new Page('Resources');
    $page->head();
    ?>
    


    
    <div class="campl-column9 campl-main-content" id="content">
        <div class="campl-content-container">

        <p>Here are some resources from the group. These are available for general 
        interest, but please check with the authors before duplicating or citing the content. 
        Of course the content is not warranteed for any purpose. All rights reserved.</p>
        <div id="resources_list">
            <ul>
            <?php
                resourcelistitem("Poster on Passivity and Corrosion of Spuermartensitic Stainless Steels",
                    "Abdulaziz Moshaweh and Tim Burstein",
                    "Departmental Prizewinner",
                    "poster_Abdulaziz2012.pdf");
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
        </div></div></div>
        
        <?php
        $page->footer();
        ?>       

