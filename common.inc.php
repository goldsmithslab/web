<?php
//page class encapsulating page title, navigation bars, footer

class Page{
    private $pagetitle;
    private $year=2013;
    private $site_maintainer='ep320';
    
    function __construct($title){
        $this->pagetitle = $title;
    }

    function menutop(){
?>
        <div id="header">
        <div id="links_top">
            <ul>
                <li><a href="index.php">Group Home</a></li>
                <li><a href="groupinfo.php">Group Information</a></li>
                <li><a href="researchpapers.php">Research Papers</a></li>
                <li><a href="studentships.php">Vacancies</a></li>
                <li><a href="groupphoto.php">Group Photo</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="alumni.php">Alumni</a></li>
            </ul>
        </div>
    </div>
<?php         
    }
    
    function menuside(){
?>
     <div id="links_side">  
        <ul>
            <li><a href="http://www.cam.ac.uk"><img src="images/cam_logo.jpg" alt="www.cam.ac.uk" /></a></li>
            <li><a href="http://www.msm.cam.ac.uk">Department of Materials Science and Metallurgy</a></li>
            <li><a href="index.php">Group Home</a></li>            
            <li><a href="groupinfo.php">Group Information</a></li>
            <li><a href="researchpapers.php">Research Papers</a></li>
            <li><a href="studentships.php">Vacancies</a></li>
            <li><a href="groupphoto.php">Group Photo</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="alumni.php">Alumni</a></li>
        </ul>
    </div>
<?php
    }
    
    function head(){
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Corrosion Science and Electrochemistry Group - 
        <?php
         echo $this->pagetitle;
         ?>        
        </title>   
        
        <link rel="stylesheet" type="text/css" media="screen,print" href="Style.css" />
        <link rel="stylesheet" type="text/css" media="screen,print" href="full-stylesheet.css" />

 </head>   
        <?php  }
        
        function footer()
     { 
          ?>
     <div id="footer">
    Goldsmiths' Lab, <?php echo htmlspecialchars($this->year); ?>.
    Site designed and maintained by <?php echo htmlspecialchars($this->site_maintainer) ?>.
    </div>
<?php     }

}  

//globals

function paperslistitem($papertitle, $authors, $journalinfo, $doi)
    {   ?>
    <li><a href="http://dx.doi.org/<?php echo htmlspecialchars($doi); ?>" 
    title="<?php echo htmlspecialchars($papertitle); ?>">  
    <?php echo htmlspecialchars($papertitle); ?> 
    </a><br/> <?php echo htmlspecialchars($authors); ?> 
    <br/> <?php echo htmlspecialchars($journalinfo); ?> </li> 
    
<?php    }

function resourcelistitem($resourcename, $authors, $description, $url)
    {   ?>
    <li><a href="<?php echo htmlspecialchars($url); ?>" 
    title="<?php echo htmlspecialchars($resourcename); ?>">  
    <?php echo htmlspecialchars($resourcename); ?> 
    </a> (<?php echo htmlspecialchars($authors); ?>) 
    <br/> <?php echo htmlspecialchars($description); ?> </li>
        
<?php    }
?>

<?php
         


        

       
    
    


