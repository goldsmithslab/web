<?php
    include 'common.inc.php';
    $page = new Page('Vacancies');
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
            <h2> Studentships and Vacancies</h2>
        </div>
        <div id="post-doc">
            <h3> Post-doctoral Research Associate</h3>
            <p> No vacancies at this time.</p>
        </div>
        <div id="phd">
            <h3> PhD Studentships</h3>
            <h4> PhD Research in Fuel Cells</h4>
            <p>The lab is actively involved in research into the development of non-noble electrocatalysts for hydrogen fuel cells as well as 
            understanding the degradation mechanisms of existing platinum electrodes. Previous PhD projects can be found here:
            <a href="JM_studentship_08.doc">Download Description</a></p>
            <p>PhD opportunities in fuel cell research may still be available and interested persons should contact Professor Tim Burstein 
            directly to discuss this.<br /> Tel: -44-(0)-1223-334361.<br /> Email: gtb1000 AT cam.ac.uk</p>
        </div>
        
        <?php
        $page->footer();
        ?>
        
    </div>
        
    </body> 
    
</html>