<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Emma
 * Date: 18/04/13
 * Time: 16:55
 * To change this template use File | Settings | File Templates.
 */
    include 'common.inc.php';
    $page = new Page('Group Resources');
    $page->head();
    ?>

 <div class="campl-column9 campl-main-content" id="content">
     <div class="campl-content-container">
         <p>A selection of posters, reports and presentations explaining the research of group members past and present.</p>
         <div id="resources_list">
             <ul>
                 <?php
                    resourcelistitem("Poster on Passivity and Corrosion of Supermartensitic Stainless Steels",
                     "Abdulaziz Moshaweh and Tim Burstein",
                     "Departmental Prizewinner",
                     "poster_Abdulaziz2012.pdf");
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
 </div>

<?php
$page->footer();
?>