<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Emma
 * Date: 10/03/13
 * Time: 18:49
 * To change this template use File | Settings | File Templates.
 */
    include 'common.inc.php';
    $page = new Page('Emma Pewsey');
    $page->head();
?>


<div class="campl-column9 campl-main-content" id="content">
    <div class="campl-content-container">

        <div class="campl-listing-item profile-listing clearfix">
            <div class="campl-column9">
                <div class="campl-content-container campl-listing-txt">
                    <h2>Contact Information</h2>


                    <p class="campl-break-word">Telephone: +44 (0)1223(3)34371 <br />
                        Email: <a href="mailto:ep320@cam.ac.uk">ep320@cam.ac.uk</a> <br />


                </div>
            </div>
            <div class="campl-column3">
                <div class="campl-content-container campl-listing-img">
                    <img alt="Emma Pewsey"  src="images/Emma_Pewsey.JPG" class="campl-scale-with-grid" />
                </div>
            </div>
        </div>


        <h2>Research Interests</h2>


        <p>Corrosion isn't only a problem on an industrial scale. Advances in medicine mean it is now increasingly common for metal to be implanted inside
            a person, particularly in the form of orthopaedic implants to replace damaged bone or help
            broken bones heal. However, the body is a harsh environment for such implants to exist in, and so implants must be designed and manufactured
            carefully to minimise the risk of corrosion.</p>
        <p>Although extensive research has been carried out to optimise the corrosion behaviour of orthopaedic implants, there are still some conditions
            an implant may be exposed to which have not been fully investigated. Under certain circumstances, an implant may possibly be exposed to short voltage or current pulses, less than
            a few hundred microseconds long, which may alter the corrosion behaviour of the metal.</p>
        <p>My research investigates how the corrosion of metallic orthopaedic implants is affected by the application of such short voltage pulses, using a variety of
            novel techniques.</p>

        <h2>Other Interests</h2>
        <p>When not performing scientific research, I like to talk about it!</p>
        <p><a href="http://www.youtube.com/watch?v=g89V7pEUvyc">Sci Cam 002</a> <br/>
            Sci Cam is a science magazine-style show produced by students at the University of Cambridge.
            In this episode, I present some experiments as an introduction to the science of corrosion.</p>
        <p><a href="http://www.youtube.com/watch?v=QoWAKg6FDTM">Pewsey and Peter Present...</a><br/>
            Ever wondered why you get the urge to pee when it's cold? I help my friend Peter explain why.</p>
        <p><a href="http://europepmc.org/ScienceWritingCompetition">Access to Understanding Competition</a><br/>
            I won first prize with an article about <a href="http://dx.doi.org/10.1371/journal.pone.0038466">recent research</a> investigating why hips fracture.
            Article published in <a href="http://elife.elifesciences.org/content/2/e00646">eLife</a>.</p>







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
