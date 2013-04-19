<?php
//page class encapsulating page title, navigation bars, footer

class Page{
    private $pagetitle;
    private $year=2013;
    private $site_maintainer='ep320';
    
    function __construct($title){
        $this->pagetitle = $title;
    }


    
    function head(){
// puts the header on each page. .campl global-header = the Cambridge University headers at the top. Do not change!
?>
    <!DOCTYPE html>

    <!--[if lt IE 7]>      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>		   <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="no-js"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Corrosion Science and Electrochemistry Group - <?php echo $this->pagetitle; ?></title>
        <meta name="description" content="" />
        <meta name="author" content="" />


        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

        <!-- CSS : implied media="all" -->
        <link rel="stylesheet" href="stylesheets/full-stylesheet.css" />
        <link rel="stylesheet" href="stylesheets/styleguide.css" />


        <script type="text/javascript" src="//use.typekit.com/hyb5bko.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <script type="text/javascript">  document.documentElement.className += " js";</script>
    </head>
<body>
	<a href="#primary-nav" class="campl-skipTo">skip to primary navigation</a>
    <a href="#content" class="campl-skipTo">skip to content</a>

    <div class="campl-row campl-global-header">
        <div class="campl-wrap clearfix">
            <div class="campl-header-container campl-column8" id="global-header-controls">
                <a href="http://www.cam.ac.uk" class="campl-main-logo">
                    <img alt="University of Cambridge"  src="images/interface/main-logo-small.png" />
                </a>

                <ul class="campl-unstyled-list campl-horizontal-navigation campl-global-navigation clearfix">
                    <li>
                        <a  href="#study-with-us" >Study at Cambridge</a>
                    </li>
                    <li>
                        <a href="#about-the-university" >About the University</a>
                    </li>
                    <li>
                        <a href="http://www.cam.ac.uk/research" class="campl-no-drawer" >Research at Cambridge</a>
                    </li>
                </ul>
            </div>

            <div class="campl-column2">
                <div class="campl-quicklinks">
                </div>
            </div>

            <div class="campl-column2">

                <div class="campl-site-search" id="site-search-btn">

                    <label for="header-search" class="hidden">Search site</label>
                    <div class="campl-search-input">
                        <form action="http://search.cam.ac.uk/web" method="get">
                            <input id="header-search" type="text" name="query" value="" placeholder="Search"/>

                            <input type="image" class="campl-search-submit " src="images/interface/btn-search-header.png"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="campl-row campl-global-header campl-search-drawer">
        <div class="campl-wrap clearfix">
            <form class="campl-site-search-form" id="site-search-container" action="">
                <div class="campl-search-form-wrapper clearfix">
                    <input type="text" class="text" placeholder="Search"/>
                    <input type="image" class="campl-search-submit" src="images/interface/btn-search.png" />
                </div>
            </form>
        </div>
    </div>

    <div class="campl-row campl-global-navigation-drawer">

        <div class="campl-wrap clearfix">
            <div class="campl-column12 campl-home-link-container">
                <a href="" >Home</a>
            </div>
        </div>
        <div class="campl-wrap clearfix">
            <div class="campl-column12 campl-global-navigation-mobile-list campl-global-navigation-list">
                <div class="campl-global-navigation-outer clearfix" id="study-with-us">
                    <ul class="campl-unstyled-list campl-global-navigation-header-container ">
                        <li><a href="http://www.cam.ac.uk/study-at-cambridge" >Study at Cambridge</a></li>
                    </ul>
                    <div class="campl-column4">
                        <ul class="campl-global-navigation-container campl-unstyled-list campl-global-navigation-secondary-with-children">
                            <li>
                                <a href="http://www.study.cam.ac.uk/undergraduate/" >Undergraduate</a>
                                <ul class="campl-global-navigation-tertiary campl-unstyled-list">
                                    <li>
                                        <a href="http://www.study.cam.ac.uk/undergraduate/courses/" >Courses</a>
                                    </li>
                                    <li>
                                        <a href="http://www.study.cam.ac.uk/undergraduate/apply/" >Applying</a>
                                    </li>
                                    <li>
                                        <a href="http://www.study.cam.ac.uk/undergraduate/events/" >Events and open days</a>
                                    </li>
                                    <li>
                                        <a href="http://www.study.cam.ac.uk/undergraduate/finance/" >Fees and finance</a>
                                    </li>
                                    <li>
                                        <a href="http://www.becambridge.com/" >Student blogs and videos</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="campl-column4">
                        <ul class="campl-global-navigation-container campl-unstyled-list campl-global-navigation-secondary-with-children">
                            <li>
                                <a href="http://www.admin.cam.ac.uk/students/gradadmissions/prospec/" >Graduate</a>
                                <ul class="campl-global-navigation-tertiary campl-unstyled-list">
                                    <li>
                                        <a href="http://www.admin.cam.ac.uk/students/gradadmissions/prospec/whycam/" >Why Cambridge</a>
                                    </li>
                                    <li>
                                        <a href="http://www.admin.cam.ac.uk/students/gradadmissions/prospec/studying/qualifdir/" >Qualifications directory</a>
                                    </li>
                                    <li>
                                        <a href="http://www.admin.cam.ac.uk/students/gradadmissions/prospec/apply/" >How to apply</a></li>
                                    <li><a href="http://www.admin.cam.ac.uk/students/studentregistry/fees/" >Fees and funding</a></li>
                                    <li><a href="http://www.admin.cam.ac.uk/students/gradadmissions/prospec/faq/index.html" >Frequently asked questions</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="campl-column4">
                        <ul class="campl-global-navigation-container campl-unstyled-list last">
                            <li>
                                <a href="http://www.cam.ac.uk/about-the-university/international-cambridge/studying-at-cambridge" >International students</a>
                            </li>
                            <li>
                                <a href="http://www.ice.cam.ac.uk" >Continuing education</a>
                            </li>
                            <li>
                                <a href="http://www.admin.cam.ac.uk/offices/education/epe/" >Executive and professional education</a>
                            </li>
                            <li>
                                <a href="http://www.educ.cam.ac.uk" >Courses in education</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="campl-global-navigation-outer clearfix" id="about-the-university">
                    <ul class="campl-global-navigation-header-container campl-unstyled-list">
                        <li><a href="http://www.cam.ac.uk/about-the-university" >About the University</a></li>
                    </ul>
                    <div class="campl-column4">
                        <ul class="campl-global-navigation-container campl-unstyled-list">
                            <li>
                                <a href="http://www.cam.ac.uk/about-the-university/how-the-university-and-colleges-work" >How the University and Colleges work</a>
                            </li>
                            <li>
                                <a href="http://www.cam.ac.uk/about-the-university/history" >History</a>
                            </li>
                            <li>
                                <a href="http://www.cam.ac.uk/about-the-university/visiting-the-university" >Visiting the University</a>
                            </li>
                            <li>
                                <a href="http://www.cam.ac.uk/about-the-university/term-dates-and-calendars" >Term dates and calendars</a>
                            </li>
                            <li class="last">
                                <a href="http://map.cam.ac.uk" >Map</a>
                            </li>
                        </ul>
                    </div>
                    <div class="campl-column4">
                        <ul class="campl-global-navigation-container campl-unstyled-list">
                            <li>
                                <a href="http://www.cam.ac.uk/for-media" >For media</a>
                            </li>
                            <li>
                                <a href="http://www.cam.ac.uk/video-and-audio" >Video and audio</a>
                            </li>
                            <li>
                                <a href="http://webservices.admin.cam.ac.uk/faesearch/map.cgi" >Find an expert</a>
                            </li>
                            <li>
                                <a href="http://www.cam.ac.uk/about-the-university/publications" >Publications</a>
                            </li>
                            <li class="last">
                                <a href="http://www.cam.ac.uk/about-the-university/international-cambridge" >International Cambridge</a>
                            </li>
                        </ul>
                    </div>
                    <div class="campl-column4">
                        <ul class="campl-global-navigation-container campl-unstyled-list">
                            <li>
                                <a href="http://www.cam.ac.uk/news" >News</a>
                            </li>
                            <li>
                                <a href="http://www.admin.cam.ac.uk/whatson" >Events</a>
                            </li>
                            <li>
                                <a href="http://www.cam.ac.uk/public-engagement" >Public engagement</a>
                            </li>
                            <li>
                                <a href="http://www.jobs.cam.ac.uk" >Jobs</a>
                            </li>
                            <li class="last">
                                <a href="http://www.philanthropy.cam.ac.uk" >Giving to Cambridge</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="campl-global-navigation-outer clearfix" id="our-research">
                    <ul class="campl-global-navigation-header-container campl-unstyled-list">
                        <li><a href="" >Research at Cambridge</a></li>
                    </ul>
                </div>
            </div>

            <ul class="campl-unstyled-list campl-quicklinks-list campl-global-navigation-container ">
                <li>
                    <a href="http://www.cam.ac.uk/for-staff" >For staff</a>
                </li>
                <li>
                    <a href="http://www.admin.cam.ac.uk/students/gateway" >For current students</a>
                </li>
                <li>
                    <a href="http://www.alumni.cam.ac.uk" >For alumni</a>
                </li>
                <li>
                    <a href="http://www.cam.ac.uk/for-business" >For business</a>
                </li>
                <li>
                    <a href="http://www.cam.ac.uk/colleges-and-departments" >Colleges &amp; departments</a>
                </li>
                <li>
                    <a href="http://www.cam.ac.uk/libraries-and-facilities" >Libraries &amp; facilities</a>
                </li>
                <li>
                    <a href="http://www.cam.ac.uk/museums-and-collections" >Museums &amp; collections</a>
                </li>
                <li class="last">
                    <a href="http://www.cam.ac.uk/email-and-phone-search" >Email &amp; phone search</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- .campl-global-header ends -->

    <!-- start of group header -->

    <div class="campl-row campl-page-header campl-sub-section-page">
        <div class="campl-wrap clearfix">
            <div class="campl-column12">
                <div class="campl-content-container">
                    <div class="campl-breadcrumb" id="breadcrumb">
                        <ul class="campl-unstyled-list campl-horizontal-navigation clearfix">
                            <!-- Directory list at top of page -->
                            <li class='first-child'>
                                <a href="http://www.cam.ac.uk" class="campl-home ir">Home</a>
                            </li>
                            <li>
                                <a href="http://www.msm.cam.ac.uk">Department of Materials Science and Metallurgy</a>
                            </li>
                            <li>
                                <a href="http://www.msm.cam.ac.uk/corrosion">Corrosion Science and Electrochemistry Group</a>
                            </li>
                            <li>
                                <p class="campl-current"><?php echo $this->pagetitle; ?></p>
                            </li>
                        </ul>

                    </div>
                    <!-- Group Title -->
                    <p class="campl-page-title">Corrosion Science and Electrochemistry Group</p>

                    <p class="campl-mobile-parent"><a href=""><span class="campl-back-btn campl-menu-indicator"></span>Studying at Cambridge</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu bar at top -->
    <div class="campl-row campl-page-header">
        <div class="campl-wrap clearfix campl-local-navigation" id="local-nav">
            <div class="campl-local-navigation-container">
                <ul class="campl-unstyled-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="groupinfo.php" class="campl-selected">People</a>
                        <ul class="campl-unstyled-list local-dropdown-menu">
                            <li><a href="groupinfo.php">Group Overview</a></li>
                            <li><a href="groupinfo.php#grouphead">Group Head</a>
                            </li>
                            <li><a href="groupinfo.php#phdstudents">PhD Students</a>

                            </li>
                            <li><a href="groupinfo.php#visitors">Visiting Scientists</a>

                            </li>
                            <li><a href="groupinfo.php#recentalum">Recent Alumni</a>

                            </li>
                            <li><a href="groupinfo.php#famousalum">Distinguished Alumni</a>

                            </li>

                        </ul>
                    <li><a href="researchpapers.php">Research</a></li>
                    <li><a href="resources.php">Resources</a></li>
                    <li><a href="resources.php.php" class="campl-selected">People</a>
                        <ul class="campl-unstyled-list local-dropdown-menu">
                            <li><a href="resources.php">Resources</a></li>
                            <li><a href="resources.php#background">Introduction to Electrochemistry</a>
                            </li>
                            <li><a href="resources.php.php#presentations">Group Presentations</a>

                            </li>
                            <li><a href="resources.php#lab">Lab Resources</a>

                            </li>

                        </ul>
                    <li><a href="studentships.php">Vacancies</a></li>
                    <li><a href="contact.php">Contact Us</a></li>


                </ul>
            </div>
        </div>


        <!-- Page Title -->
        <div class="campl-wrap clearfix campl-page-sub-title campl-recessed-sub-title">
            <div class="campl-column3 campl-spacing-column">
                &nbsp;
            </div>
            <div class="campl-column9">
                <div class="campl-content-container">
                    <h1 class="campl-sub-title"><?php echo $this->pagetitle; ?></h1>
                </div>
            </div>
        </div>
    </div>

        <!-- Side bar -->
		<div class="campl-row campl-content campl-recessed-content">
			<div class="campl-wrap clearfix">
				<div class="campl-column3">
                    <div class="campl-tertiary-navigation">
                        <div class="campl-tertiary-navigation-structure">
                            <ul class="campl-unstyled-list campl-vertical-breadcrumb">
                                <li><a href="index.php">Home<span class="campl-vertical-breadcrumb-indicator"></span></a></li>
                                <li><a href="groupinfo.php">People<span class="campl-vertical-breadcrumb-indicator"></span></a>
                                <ul class="campl-unstyled-list campl-vertical-breadcrumb-navigation">
                                       <li> <ul class='campl-unstyled-list campl-vertical-breadcrumb-children'>
                                            <li><a href="groupinfo.php#grouphead">Group Head</a></li>
                                            <li><a href="groupinfo.php#phdstudents">PhD Students</a></li>
                                            <li><a href="groupinfo.php#visitors">Visiting Scientists</a></li>
                                            <li><a href="groupinfo.php#recentalum">Recent Alumni</a></li>
                                            <li><a href="groupinfo.php#famousalum">Distinguished Alumni</a></li>
                                        </ul></li>


                                </ul></li>
                                <li><a href="researchpapers.php">Research<span class="campl-vertical-breadcrumb-indicator"></span></a></li>
                                <li><a href="resources.php">Resources<span class="campl-vertical-breadcrumb-indicator"></span></a></li>
                                <li><a href="studentships.php">Vacancies<span class="campl-vertical-breadcrumb-indicator"></span></a></li>
                                <li><a href="contact.php">Contact Us<span class="campl-vertical-breadcrumb-indicator"></span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
    <!-- end of group header -->
    <!-- content start -->


        <?php  }
        
        function footer()
     { // start of group footer
          ?>



            </div>
        </div>
     <div class="campl-row campl-local-footer">
         <div class="campl-wrap clearfix">
             <div class="campl-column3 campl-footer-navigation">
                 <div class="campl-content-container campl-navigation-list">
                     <ul class="campl-unstyled-list"><li><a href="http://www.admin.cam.ac.uk/univ/information/foi/">FOI</a></li>
                         <li><a href="http://www.msm.cam.ac.uk/privacy.html">Privacy</a></li>
                         <li>Site maintained by <?php echo htmlspecialchars($this->site_maintainer) ?>.</li>
                         <li>Goldsmith's Lab, <?php echo htmlspecialchars($this->year); ?>.</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

         <!-- Global footer - do not change! -->
     <div class="campl-row campl-global-footer">
         <div class="campl-wrap clearfix">
             <div class="campl-column3 campl-footer-navigation">
                 <div class="campl-content-container campl-footer-logo">
                     <img alt="University of Cambridge"  src="images/interface/main-logo-small.png" class="campl-scale-with-grid" />
                     <p>&#169; 2013 University of Cambridge</p>
                     <ul class="campl-unstyled-list campl-global-footer-links">
                         <li>
                             <a href="http://www.cam.ac.uk/university-a-z">University A-Z</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/contact-the-university">Contact the University</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/about-this-site/accessibility">Accessibility</a>
                         </li>
                         <li>
                             <a href="http://www.admin.cam.ac.uk/univ/information/foi/">Freedom of information</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/about-this-site/terms-and-conditions">Terms and conditions</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="campl-column3 campl-footer-navigation">
                 <div class="campl-content-container campl-navigation-list">

                     <div class="link-list">
                         <h3><a href="">Study at Cambridge</a></h3>
                         <ul class="campl-unstyled-list">
                             <li>
                                 <a href="http://www.study.cam.ac.uk/undergraduate/">Undergraduate</a>
                             </li>
                             <li>
                                 <a href="http://www.admin.cam.ac.uk/students/gradadmissions/prospec/">Graduate</a>
                             </li>
                             <li>
                                 <a href="http://www.cam.ac.uk/about-the-university/international-cambridge/studying-at-cambridge">International students</a>
                             </li>
                             <li>
                                 <a href="http://www.ice.cam.ac.uk">Continuing education</a>
                             </li>
                             <li>
                                 <a href="http://www.admin.cam.ac.uk/offices/education/epe/">Executive and professional education</a>
                             </li>
                             <li>
                                 <a href="http://www.educ.cam.ac.uk">Courses in education</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="campl-column3 campl-footer-navigation">
                 <div class="campl-content-container campl-navigation-list">
                     <h3><a href="http://www.cam.ac.uk/about-the-university">About the University</a></h3>
                     <ul class="campl-unstyled-list campl-page-children">
                         <li>
                             <a href="http://www.cam.ac.uk/about-the-university/how-the-university-and-colleges-work">How the University and Colleges work</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/about-the-university/visiting-the-university">Visiting the University</a>
                         </li>
                         <li>
                             <a href="http://map.cam.ac.uk">Map</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/news">News</a>
                         </li>
                         <li>
                             <a href="http://www.admin.cam.ac.uk/whatson">Events</a>
                         </li>
                         <li>
                             <a href="http://www.jobs.cam.ac.uk">Jobs</a>
                         </li>
                         <li>
                             <a href="http://www.philanthropy.cam.ac.uk">Giving to Cambridge</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="campl-column3 campl-footer-navigation last">
                 <div class="campl-content-container campl-navigation-list">
                     <h3><a href="http://www.cam.ac.uk/research">Research at Cambridge</a></h3>
                     <ul class="campl-unstyled-list">
                         <li>
                             <a href="http://www.cam.ac.uk/research/news">News</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/research/features">Features</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/research/discussion">Discussion</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/research/spotlight-on">Spotlight on...</a>
                         </li>
                         <li>
                             <a href="http://www.cam.ac.uk/research/research-at-cambridge">About research at Cambridge</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <!-- .campl-global-footer ends -->

     <script type="text/javascript" src="javascripts/libs/ios-orientationchange-fix.js"></script>
     <script type="text/javascript" src="javascripts/libs/jquery-min.js"></script>
     <script type="text/javascript" src="javascripts/libs/modernizr.js"></script>
     <script type="text/javascript" src="javascripts/custom.js"></script>
</body>
</html>

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

function noauthresourcelistitem($resourcename, $description, $url)
{   ?>
<li><a href="<?php echo htmlspecialchars($url); ?>"
       title="<?php echo htmlspecialchars($resourcename); ?>">
    <?php echo htmlspecialchars($resourcename); ?>
</a>
    <br/> <?php echo htmlspecialchars($description); ?> </li>

<?php    } ?>
