<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Emma
 * Date: 18/04/13
 * Time: 16:55
 * To change this template use File | Settings | File Templates.
 */
    include 'common.inc.php';
    $page = new Page('Background Information');
    $page->head();
    ?>

 <div class="campl-column9 campl-main-content" id="content">
     <div class="campl-content-container">
         <p>There are lots of great websites out there which cover the basics of electrochemistry, corrosion, and fuel cell technology.</p>
         <div id="resources_list">
             <ul>
                 <?php
                    noauthresourcelistitem("CREST (Centre for Research in Electrochemical Science and Technology)",
                    "This is a great site from the Chemical Engineering Department here in Cambridge, which covers everything from
                    the fundamentals of electrochemistry to the most common techniques used when studying it.",
                    "http://www.cheng.cam.ac.uk/research/groups/electrochem/teaching.html");
                    noauthresourcelistitem("DoITPoMS Teaching and Learning Packages",
                     "If you've ever wanted to know anything about Materials Science, this is the place to go!",
                     "http://www.doitpoms.ac.uk/tlplib/index.php");
                 ?>
             </ul>
         </div>
     </div>
 </div>

<?php
$page->footer();
?>