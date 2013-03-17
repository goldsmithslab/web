<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Emma
 * Date: 17/03/13
 * Time: 16:55
 * To change this template use File | Settings | File Templates.
 */

include 'common.inc.php';
$page = new Page('Contact Details');
$page->head();
?>

<div class="campl-column9 campl-main-content" id="content">
    <div class="campl-content-container">
        <h3>Address</h3>
        <p>Goldsmiths' Lab,<br/>
        Department of Materials Science and Metallurgy,<br/>
        New Museums Site,<br/>
        Pembroke Street,<br/>
        Cambridge<br/>
        CB2 3QZ,<br/>
        U.K.</p>

        <h3>Telephone</h3>
        <p>Lab: 01223 334371</p>

        <h3>Follow us on Twitter!</h3>
        <p><a href="https://twitter.com/GoldsmithsLab">@GoldsmithsLab</a></p>
    </div>
</div>

<?php
$page->footer();
?>