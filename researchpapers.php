<?php
    include 'common.inc.php';
    $page = new Page('Research Papers');
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
            <h2> Research Papers</h2>
            <h4> A selection of recent work, including Fuel Cells and Cyclic Thermammetry</h4>
        </div>
        <div id="papers">
            <ul>
              
              <?php 
              paperslistitem("Degradation of the Pt/C air cathode in acidic solution examined by cyclic thermammetry ",
                            "Smith G.; Burstein G. T.",
                            "Journal of Power Sources, 196(22), 9188-9194 (2011)",
                            "10.1016/j.jpowsour.2011.07.011");
              paperslistitem("Passivity and electrocatalysis of nanostructured nickel encapsulated in carbon ",
                            "Haslam Gareth E.; Chin Xiao-Yao; Burstein G. Tim",
                            "Physical Chemistry Chemical Physics 13(28) 12968-12974 (2011)",
                            "10.1039/c1cp20701f");              
              paperslistitem("Combined anodic/cathodic transient currents within nucleating pits on Al-Fe alloy surfaces ",
                            "Speckert L.; Burstein G. T.",
                            "Corrosion Science, 53(2), 534-539 (2011)",
                            "10.1016/j.corsci.2010.11.008");
              paperslistitem("The temperature dependence of passivity breakdown on a titanium alloy determined by cyclic noise thermammetry", 
                            "G.T. Burstein, M. Carboneras, and B.T. Daymond",
                            "Electrochimica Acta 55 (2010) 7860-7866",
                            "10.1016/j.electacta.2010.02.069");
              paperslistitem("Synthesis of Nanoparticulate Tungsten Carbide Under Microwave Irradiation",
                            "Essaki Kenji; Rees Eric J.; Burstein Gordon T.",
                            "Journal of the American Ceramic Society, 93(3) 692-695 (2010)",
                            "10.1111/j.1551-2916.2009.03462.x"); 
              paperslistitem("The remarkable passivity of austenitic stainless steel in sulphuric acid solution and the effect of repetitive temperature cycling",
                            "G.T. Burstein and B.T. Daymond",
                            "Corrosion Science 51 (2009) 2249-2252",
                            "10.1016/j.corsci.2009.07.010");
              paperslistitem("Influence of precursor preparation on the synthesis of WC under microwave irradiation",
                            "Essaki K.; Rees E. J.; Burstein G. T.",
                            "Materials Letters 63(26) 2185-2187 (2009)",
                            "10.1016/j.matlet.2009.07.010");
              paperslistitem("Hydrogen electrocatalysts from microwave-synthesised nanoparticulate carbides",
                            "E.J. Rees, K. Essaki, C.D.A. Brady, G.T. Burstein",
                            "Journal of Power Sources 188(1) 75-81 (2009)",
                            "10.1016/j.jpowsour.2008.11.074");
              paperslistitem("Synthesis and Characterisation of Nanoparticulate WC Electrocatalysts",
                            "K. Essaki, E.J. Rees, G.T. Burstein, and G.E. Haslam",
                            "ECS Transactions, 25 (2009) 141-153",
                            "10.1149/1.3210566");
              paperslistitem("Characterization of Nickel-Carbon Thin Film Electrocatalysts for Low-Temperature Acidic Fuel Cells",
                            "X.Y. Chin, G.E. Haslam, E.J. Rees, G.T. Burstein, and Z.H. Barber",
                            "ECS Transactions, 25 (2009) 155-165",
                            "10.1149/1.3210567");
              paperslistitem("Electrocatalysis by nanocrystalline tungsten carbides and the effects of codeposited silver",
                            "C.D.A. Brady, E.J. Rees, and G.T. Burstein",
                            "Journal of Power Sources 179 (2008) 17-26",
                            "10.1016/j.jpowsour.2008.01.002");
              paperslistitem("Passivation  and electrocatalytic behavior of an amorphous nickel-carbon film in sulphuric acid",
                            "C.D.A. Brady, E.J. Rees, G.T. Burstein, and Z.H. Barber",
                            "Journal of the Electrochemical Society 155 (2008) B461-466",
                            "10.1149/1.2869868");
              paperslistitem("Depassivation currents transients measured between identical twin microelectrodes in open circuit",
                            "G.T. Burstein and C. Liu",
                            "Corrosion Science 50 (2008) 2-7",
                            "10.1016/j.corsci.2006.06.036");
              paperslistitem("Solid-state synthesis of tungsten carbide from tungsten oxide and carbon, and its catalysis by nickel",
                            "Rees E. J.; Brady C. D. A.; Burstein G. T.",
                            "Materials Letters 62(1) 1-3 (2008)",
                            "10.1016/j.matlet.2007.04.088");
              paperslistitem("Repassivation and Pitting of freshly generated aluminium surfaces in acidic nitrate solution",
                            "G.T. Burstein, R.M. Organ",
                            "Corrosion Science 47 (2005) 2932-2955",
                            "10.1016/j.corsci.2005.05.054");
              paperslistitem("Cyclic Thermammetry. Description of a new technique for the investigation of pitting corrosion and repassivation",
                            "G.T. Burstein, J.J. Moloney",
                            "Electrochemistry Communications 6 (10) 1037-1041 (2004)",
                            "10.1016/j.elecom.2004.08.006");
              paperslistitem("Characteristics of a direct methanol fuel cell based on a novel electrode assembly using microporous polymer membranes, in which we have researched a low cost alternative to the Nafion polymer electrolyte membrane used in many current fuel cells",
                            "R.W. Reeve, G.T. Burstein, K.R. Williams",
                            "Journal of Power Sources 128 (2004) 1-12",
                            "10.1016/j.jpowsour.2003.07.006");
              paperslistitem("Electrocatalytic properties of a nickel-tantalum-carbon alloy in an acidic electrolyte, in which the performance of our 'NiTaC' base electrocatalyst is evaluated",
                            "D.R. McIntyre, A. Vossen, J.R. Wilde, G.T. Burstein",
                            "Journal of Power Sources 108 (2002) 1-7",
                            "10.1016/S0378-7753(01)01009-6");
              paperslistitem("Effect of carbon monoxide on the electrooxidation of hydrogen by tungsten carbide",
                            "D.R. McIntyre, G.T. Burstein, A. Vossen",
                            "Journal of Power Sources 107 (2002) 67-73",
                            "10.1016/S0378-7753(01)00987-9");
                                                                                   
                                ?>
              
            </ul>
        </div>
        
        <?php
        $page->footer();
        ?>
        
    </div>   
    
    
    </body> 
    
</html>