<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Emma
 * Date: 10/03/13
 * Time: 18:49
 * To change this template use File | Settings | File Templates.
 */
    include 'common.inc.php';
    $page = new Page('Group Info');
    $page->head();
?>

<body>

<?php
    $page->menutop();
    $page->menuside();
?>

<div id = content>
    <div id="main_head">
        <h1> Corrosion Science and Electrochemistry Group</h1>
    </div>
    <div id="page_head">
        <h2>Emma Pewsey</h2>
    </div>
    <div id = research_ints>
        <h4>Research Interests</h4>
        <p>Corrosion isn't only a problem on an industrial scale. Advances in medicine mean it is now increasingly common for metal to be implanted inside
            a person over a long duration.people to have
        metal implanted inside them. A common procedure nowadays is the use of orthopaedic implants, to replace damaged bone or help
        broken bones heal. However, the body is a harsh environment for such implants to exist in, and so implants must be designed and manufactured
         carefully to minimise the risk of corrosion.</p>
        <p>Although extensive research has been carried out to optimise the corrosion behaviour of orthopaedic implants, there are still some conditions
            an implant may be exposed to which have not been fully investigated. Under certain circumstances, an implant may possibly be exposed to short voltage or current pulses, less than
        a few hundred microseconds long, which may alter the corrosion behaviour of the metal.</p>
        <p>My research investigates how the corrosion of metallic orthopaedic implants is affected by the application of such short voltage pulses, using a variety of
            novel techniques.</p>
    </div>
    <div id = publications>
        <h4>Publications</h4>
    </div>
    <div id = other>
        <h4>Other Interests</h4>
        <p>When not performing scientific research, I like to talk about it!</p>
        <p><a href="http://www.youtube.com/watch?v=g89V7pEUvyc">Sci Cam 002</a> <br/>
        Sci Cam is a science magazine-style show produced by students at the University of Cambridge.
        In this episode, I present some experiments as an introduction to the science of corrosion.</p>
        <p><a href="http://www.youtube.com/watch?v=QoWAKg6FDTM">Pewsey and Peter Present...</a><br/>
        Ever wondered why you get the urge to pee when it's cold? I help my friend Peter explain why.</p>
        <p><a href="http://europepmc.org/ScienceWritingCompetition">Access to Understanding Competition</a><br/>
        Won first prize with an article about <a href="10.1371/journal.pone.0038466">recent research</a> investigating why hips fracture. Article published in <a href="http://elife.elifesciences.org/content/2/e00646">eLife</a>.</p>

    </div>




</div>

<?php
$page->footer();
?>


</body>
</html>