<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<title>Angelica Delboni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/jplayer/jplayer.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- // IE  // -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800,700,300,600,400' rel='stylesheet' type='text/css'>
    
    <!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
	<!--<script src="js/jquery-ui.min.js" type="text/javascript"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/sorting.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script> 
    <script type="text/javascript" src="js/current.js"></script>
    <script type="text/javascript" src="js/animate.js"></script>
    <script type="text/javascript" src="js/imagesloaded.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){   
            $("#ajax-contact-form").submit(function() {
                var str = $(this).serialize();      
                $.ajax({
                    type: "POST",
                    url: "contact_form/contact_process.php",
                    data: str,
                    success: function(msg) {
                        // Message Sent - Show the 'Thank You' message and hide the form
                        if(msg == 'OK') {
                            result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
                            $("#fields").hide();
                        } else {
                            result = msg;
                        }
                        $('#note').html(result);
                    }
                });
                return false;
            });

        });     
    </script>     
</head>
<body class="animated" data-animated="fadeIn">
    <!-- #page -->
    <div id="page">
        <!-- header section -->
        <section id="top">
            <header>                                    
                <!-- logo -->
                <div id="logo">
                    <a href="index.php#top"><img src="images/logo.png" width="229" height="34" alt="" /></a>
                </div>
                
                <!-- menu -->
                <nav class="navmenu">
                    <ul>
                        <li class="active"><a href="#top">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav><!-- end nav --> 
                <div class="clear"></div>
            </header>               
        </section><!-- //header section -->
            
        <!-- home content -->
        <section class="page_section" id="home">
            <!--Slider-->
            <div class="full_slider">
                <div id="fullwidth_slider" class="flexslider">
                  <ul class="slides">

                    <li>
                    	<img src="images/slider/1.jpg" alt="" class="slide_bg" />
                        <!--<div class="full_slider_caption">
                        	Top notch multipurpose
                            <div class="slide_title">Onepage portfolio Template</div>
                        </div>-->
                    </li>

                    <!--// Add more slides here -->

                  </ul>
                </div>
             </div>          
            <!--//Slider-->
                    
            <div class="container">
            	<!--promo text-->
                <div class="promo_text_block">
                	<h1>Vivacious personality</h1>
                    <p>Intelligent. Great communication skills.
                    </p>
                </div>
                <!--//promo text-->
        </section>       
    
        <!-- about content-->
        <section class="page_section" id="about">
            <!-- section header -->
            <header>
                <div class="container"> 
                    <h1><b>About</b> <b class="color">Angelica</b> Delboni</h1>
                    <p>I have the gift of making people feel comfortable and I am very 
                        dependable.  Works as a model for more than six years in Brazil, and feel very proud of all the works that I have carried out.</p>
                </div><!-- end .container -->
            </header>
            <!-- //section header -->
            
            <!-- section content -->
            <div class="content_section container"> 
            	<div class="skill_start"></div>
                <div class="row">
                	<div class="col-md-4"><div class="marg_b"><img src="images/about1.jpg" alt="" /></div></div>
                    <div class="col-md-8">
                    	<blockquote>
                        	I am of Brazillian descent, and I love my family and friends! I love to laugh, and yes, I am a model but I also thoroughly enjoy a good meal. 
                            I love my job, and I take it very seriously. If you would like to shoot together, please reach out to me! I love to meet new people and exchange inspirations.
                        </blockquote>
                    </div>                
                </div>
                <div class="divider"></div>
                
                <div class="divider60"></div>

            	<div class="clear"></div>
                <a href="#work" class="next_section"></a>    
            </div>
            <!-- //section content -->
        </section>

        <!-- work content-->
        <section class="page_section" id="work">
            <header>
                <div class="container">
                    <h1><b>Work</b></h1>
                    <!--<p>Work sub-text</p>-->


                </div><!-- end .container -->
            </header>
<div class="content_section">           
    <div class="row">
        <div class="col-md-3">
            <div class="service">
                <a href="javascript:void(0);">
                    <span class="service_icon">*</span>
                    <span class="service_title">Print Jobs</span>
                    <ul>
                        <li>L&amp;M Web</li>
                        <li>Absorber Web</li>
                        <li>Kideo-Catalogo</li>
                        <li>Bikini Team International</li>
                        <li>Pillow Jasmine</li>
                        <li>Eikal</li>
                        <li>Ashley Furniture</li>
                        <li>Web Girl</li>
                        <li>Sminoff</li>
                        <li>Jeanne Pierre</li>
                        <li>Keurig</li>
                        <li>Bally's</li>
                        <li>Ducati</li>
                        <li>Super Challenge</li>
                    </ul>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service">
                <a href="javascript:void(0);">
                    <span class="service_icon">*</span>
                    <span class="service_title">Commercials/Videos</span>
                    <li>Sprint</li>
                    <li>Pfizer</li>
                    <li>Andes</li>
                    <li>Camaro</li>
                    <li>Bon Ton</li>
                    <li>Siemens, Inc</li>
                    <li>Bally's Fitness</li>
                    <li>Chernin Shoes</li>
                    <li>Tressemme</li>
                    <li>Sushi Samba</li> 
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service">
                <a href="javascript:void(0);">
                    <span class="service_icon">*</span>
                    <span class="service_title">TV Segments</span>
                    <li>Television Discovery ABC</li>
                    <li>Luciana Gimenez (Brazil)</li>
                    <li>A Casa e Sua (Brazil)</li>
                    <li>O programa do LeBo (Brazil)</li>
                    <li>Hebe Camargo (Brazil)</li>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service">
                <a href="javascript:void(0);">
                    <span class="service_icon">*</span>
                    <span class="service_title">Music Video</span>
                    <li>Diana Reys - Music Video</li>
                </a>
            </div>
        </div>
    </div>
</div>
</section> 


        <!-- portfolio content-->
        <section class="page_section" id="portfolio">
            <!-- section header -->
            <header>
                <div class="container">
                    <h1><b>Portfolio</b></h1>
                    <!--<p>Portfolio sub-text</p>-->
                </div><!-- end .container -->
            </header>
            <!-- //section header -->            
            <!-- section content -->
            <div class="content_section">
                <!-- Portfolio -->
                <div class="filter_block">
                    <div class="filter_navigation">
                        <ul id="options" class="splitter">
                            <li>
                                <ul data-option-key="filter" class="optionset">
                                    <li class="selected"><a data-option-value="*" href="#filter">All works</a></li>
                                    <li><a title="View all post filed under Body" data-option-value=".bodyshots" href="#filter">Body Shots</a></li>
                                    <li><a title="View all post filed under Head" data-option-value=".headshots" href="#filter">Head Shots</a></li>
                                    <li><a title="View all post filed under Misc" data-option-value=".miscshots" href="#filter">Misc</a></li>
                                    <!--<li><a title="View all post filed under Advertising" data-option-value=".advertising" href="#filter">Advertising</a></li>-->
                                </ul>
                            </li>
                        </ul>
                    </div><!-- .filter_navigation -->
                </div><!-- .filter_block -->
                
                <div class="portfolio_block image-grid columns4" id="list">
                                                             
                    <div data-category="headshots" class="headshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/3.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/3.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->       

                    <div data-category="bodyshots" class="bodyshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/4.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/4.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->   

                    <div data-category="bodyshots" class="bodyshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                
                                <a href="images/portfolio/full/5.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/5.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->   

                    <div data-category="headshots" class="headshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/6.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/6.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->   

                    <div data-category="headshots" class="headshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/7.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/7.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->


                    <div data-category="headshots" class="headshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/8.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/8.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->   

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/10.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/10.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="bodyshots" class="bodyshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/11.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/11.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->     

                    <div data-category="bodyshots" class="bodyshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/12.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/12.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/13.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/13.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="bodyshots" class="bodyshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                
                                <a href="images/portfolio/full/14.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/14.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/15.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/15.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/16.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/16.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/17.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/17.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/18.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/18.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/19.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/19.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/20.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/20.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/21.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/21.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/22.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/22.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/23.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/23.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/24.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/24.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/25.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/25.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/26.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/26.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/27.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/27.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="headshots" class="headshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/28.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/28.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/29.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/29.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="headshots" class="headshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/30.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/30.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/31.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/31.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/32.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/32.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/33.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/33.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/34.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/34.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/35.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/35.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/36.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/36.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/37.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/37.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/38.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/38.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/39.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/39.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/40.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/40.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/41.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/41.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/42.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/42.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/43.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/43.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/44.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/44.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/45.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/45.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/46.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/46.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/47.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/47.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="bodyshots" class="bodyshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/48.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/48.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/49.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/49.jpg" alt="" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    <div data-category="miscshots" class="miscshots element">
                        <div class="filter_img">
                            <div class="hover_img">
                                <a href="images/portfolio/full/50.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/50.jpg" alt="" rel="prettyPhoto" /></a>
                            </div> 
                        </div>
                    </div><!-- .element -->

                    
                </div><!-- .portfolio_block -->
                <div class="clear"></div> 
                           
            	<!-- //Portfolio -->
            	<div class="clear"></div>
                <a href="#contact" class="next_section"></a>
            </div>
			<!-- //section content -->            
        </section>
        

        <!-- Contact content -->
        <section class="page_section" id="contact">
            <!-- section header -->
            <header>
                <div class="container">
                    <h1><b>Contact information</b></h1>
                    <!--<p>sub-text for contact information!</p>-->
                </div><!-- end .container -->
            </header>
            <!-- //section header -->      
                        
            <!-- section content -->
            <div class="contact_form content_section container">
                <div class="row">
					<div class="col-md-12">
                    	<div id="note"></div>
                        <div id="fields"> 
                            <form id="ajax-contact-form" action="#">                                
                                <input type="text" class="required" name="name" value="Name" title="Name" />
                                <input type="text" class="required" name="email" value="Email" title="Email" />
                                <input type="text" name="subject" value="Subject" title="Subject" />                            
                                <textarea name="message" class="required" id="message" title="Message">Message</textarea> 
                                <input type="reset" class="send_btn" value="Clear form" />
                                <input class="send_btn" type="submit" value="Send message!"> 
                            </form> 
                        </div>
                    </div>
                    <!--//
                	<div class="col-md-4 contact_info">
                    	<p class="i1">5512 Lorem Ipsum Vestibulum 666/13</p>
                        <p class="i2">+1 800 789 50 12, +1 800 450 6935, +1 800 666 13 13</p>
                        <p class="i3"><a href="mailto:#">mail@compname.com</a></p>
                        <p class="i4">compname</p>
                        <p class="i5"><a href="javascript:void(0);">Twitter</a></p>
                        <p class="i6"><a href="javascript:void(0);">Facebook</a></p>
                        <p class="i7"><a href="javascript:void(0);">Flickr</a></p>
                        <p class="i8"><a href="javascript:void(0);">Dribbble</a></p>
                        <p class="i9"><a href="javascript:void(0);">YouTube</a></p>                    
                	</div>
                    -->
                </div>                
            </div>

            
        <!--footer-->
        <div class="footer">
        	<!-- footer_bottom -->
        	<div class="footer_bottom container">
            	<!--//
                <div class="socials">
                    <ul class="socials_list">
                        <li><a href="javascript:void(0);" class="ico_social-facebook"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-twitter"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-linked"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-delicious"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-vimeo"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-flickr"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-pinterest"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-tumblr"></a></li>                   
                        <li><a href="javascript:void(0);" class="ico_social-youtube"></a></li>                    
                        <li><a href="javascript:void(0);" class="ico_social-instagram"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-gplus"></a></li>
                        <li><a href="javascript:void(0);" class="ico_social-dribbble"></a></li>
                    </ul>         
                </div>
                -->                
                <div class="copyright">&copy; 2014 Angelica Delboni</div>
            </div>
        	<!-- //footer_bottom -->
        </div>
        <!--//footer-->
    </div><!-- end #page -->
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast', /* fast/slow/normal */
            slideshow: 5000, /* false OR interval time in ms */
            autoplay_slideshow: false, /* true/false */
            opacity: 0.80, /* Value between 0 and 1 */
            show_title: true, /* true/false */
            allow_resize: true, /* Resize the photos bigger than viewport. true/false */
            default_width: 500,
            default_height: 344,
            counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
            theme: 'dark_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
            horizontal_padding: 20, /* The padding on each side of the picture */
            hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
            wmode: 'opaque', /* Set the flash wmode attribute */
            autoplay: true, /* Automatically start videos: True/False */
            modal: false, /* If set to true, only the close button will close the window */
            deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
            overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
            keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
            changepicturecallback: function(){}, /* Called everytime an item is shown/changed */
            callback: function(){}, /* Called when prettyPhoto is closed */
            social_tools: false /* html or false to disable */
        });
    });
</script>
<!-- end #page --> 
    <header class="fixed-menu"></header> 
</body>
</html>