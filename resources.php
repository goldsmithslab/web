<?php
    include 'common.inc.php';
    $page = new Page('Resources');
    $page->head();
    ?>
    


    
    <div class="campl-column9 campl-main-content" id="content">
        <div class="campl-content-container">

            <div class="campl-listing-item event-listing clearfix">
                <h2 id="background">Introduction to Electrochemistry</h2>
                    <div class="campl-content-container campl-listing-txt">
                        <p class="campl-listing-title"><a href="http://www.cheng.cam.ac.uk/research/groups/electrochem/teaching.html">CREST (Centre for Research in Electrochemical Science and Technology)</a></p>

                        <p>This is a great site from the Chemical Engineering Department here in Cambridge, which covers everything from
                            the fundamentals of electrochemistry to the most common techniques used to study it.</p>
                    </div>

                <div class="campl-content-container campl-listing-txt">
                    <p class="campl-listing-title"><a href="http://www.doitpoms.ac.uk/tlplib/index.php">DoITPoMS</a></p>

                    <p>Developed by members of the department, everything you could ever want to know about Materials Science is here! The following are
                    of particular interest to electrochemists:<br/>
                        <a href="http://www.doitpoms.ac.uk/tlplib/aqueous_corrosion/index.php">Kinetics of Aqueous Corrosion</a><br/>
                        <a href="http://www.doitpoms.ac.uk/tlplib/pourbaix/index.php">The Nernst Equation and Pourbaix Diagrams</a><br/>
                        <a href="http://www.doitpoms.ac.uk/tlplib/fuel-cells/index.php">Fuel Cells</a><br/>
                        <a href="http://www.doitpoms.ac.uk/tlplib/batteries/index.php">Batteries</a><br/>
                    </p>
                </div>

            </div>

            <div class="campl-listing-item event-listing clearfix">
                <h2 id="presentations">Group Posters and Presentations</h2>
                <div class="campl-content-container campl-listing-txt">
            <?php
                resourcelistitem("Poster on Passivity and Corrosion of Supermartensitic Stainless Steels",
                    "Abdulaziz Moshaweh and Tim Burstein",
                    "Departmental Prizewinner",
                    "poster_Abdulaziz2012.pdf");
            resourcelistitem("The Effect of Short Voltage Pulses on 316L Stainless Steel",
            "E. J. Pewsey and G. T. Burstein",
            "",
            "ep320poster.pdf");
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
            "Presentation from November 2006. (This presentation should open in a new window. It is a powerpoint .ppt file and you will need a browser or reader capable of viewing it.) I was asked to give a presentation outlining fuel cells (2.3 MB) to a group in Computer Science. Without the explanatory speech, this is the slideshow.",
            "FuelCellsPresentation.ppt");
            ?>
        </div>
                </div>

                <div class="campl-listing-item event-listing clearfix">
                    <h2 id="lab">Shared Lab Resources</h2>
                    <div class="campl-content-container campl-listing-txt">
                        <?php
                        resourcelistitem("PDF of Linux/LaTeX Installation Guide",
                            "Eric",
                            "Instructions for installing LaTeX.",
                            "http://www.msm.cam.ac.uk/corrosion/guide-ejr.pdf");
                        ?>



    </div></div>
        
        <?php
        $page->footer();
        ?>       

