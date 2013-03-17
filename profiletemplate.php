<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Emma
 * Date: 17/03/13
 * Time: 16:32
 * To change this template use File | Settings | File Templates.
 * Anything with a star in - replace with your information (either name or crsid).
 */
include 'common.inc.php';
$page = new Page('*');
$page->head();

?>


<div class="campl-column9 campl-main-content" id="content">
    <div class="campl-content-container">

        <div class="campl-listing-item profile-listing clearfix">
            <div class="campl-column9">
                <div class="campl-content-container campl-listing-txt">
                    <h2>Contact Information</h2>


                    <p class="campl-break-word">Telephone: +44 (0)1223(3)34371 <br />
                        Email: <a href="mailto:*@cam.ac.uk">*@cam.ac.uk</a> <br />


                </div>
            </div>
            <div class="campl-column3">
                <div class="campl-content-container campl-listing-img">
                    <img alt="*"  src="images/*.jpg" class="campl-scale-with-grid" />
                </div>
            </div>
        </div>


        <?php
        //remove php tags and /* */ to add to webpage
         /*<h2>Research Interests</h2>


        <p></p>

        <h2>Other Interests</h2>
        <p></p>



        <h2>Publications</h2>
        <p></p> */ ?>



    </div>
    <div class="campl-content-container">
        <div class="campl-heading-container">
            <h2 class="campl-light-heading">Share this</h2>
        </div>
    </div>
    <div class="campl-content-container campl-no-top-padding">
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_pinterest_pinit"></a>
            <a class="addthis_counter addthis_pill_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-504f0d4e41e30623"></script>
        <!-- AddThis Button END -->
    </div>
</div>



<?php
$page->footer();
?>
