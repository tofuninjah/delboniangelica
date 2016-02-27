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
    <link rel="shortcut icon" href="images/favicon.ico">>
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800,700,300,600,400' rel='stylesheet' type='text/css'>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/sorting.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery.ba-throttle-debounce.js"></script>
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
                        <div class="full_slider_caption">
                            <div class="slide_title"> </div>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider/1.jpg" alt="" class="slide_bg" />
                        <div class="full_slider_caption">
                            <div class="slide_title"> </div>
                        </div>
                    </li>
                  </ul>
                </div>
             </div>
            <!--//Slider-->

            <div class="container">
                <div class="divider"></div>
                <!--promo text-->
                <div class="promo_text_block">
                    <h1>Vivacious personality</h1>
                    <p>Intelligent. Great communication skills.
                    </p>
                </div>
                <!--//promo text-->
                <div class="divider"></div>

                <div class="row">

                </div>
            </div>


        </section>

        <!-- about content-->
        <section class="page_section" id="about">
            <!-- section header -->
            <header>
                <div class="container">
                    <h1><b>About</b> <b class="color">Angelica</b> Delboni</h1>
                    <p>I have the gift of making people feel comfortable and I am very
                        dependable. I feel very proud of all the works that I have carried out.</p>
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

                        <h3>Skills / Training</h3>
                        <ul>
                            <li>"On camera" - Second City Chicago</li>
                            <li>Acting #1 and # 2 - Act One Studios Chicago</li>
                            <li>TV Production & Directing - Columbia College </li>
                            <li>TV Host - Carolyne Berry - Los Angeles </li>
                            <li>Study Scene - Michelle Danner - Santa Monica </li>
                        </ul>

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
                                    <li>McDonalds</li>
                                    <li>L&amp;M Web</li>
                                    <li>Absorber Web</li>
                                    <li>KIDCO - Catalog</li>
                                    <li>Bikini Team International</li>
                                    <li>Pillow Jasmine</li>
                                    <li>Eikal</li>
                                    <li>Ashley Furniture</li>
                                    <li>Web Girl</li>
                                    <li>Smirnoff</li>
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

                <a href="#portfolio" class="next_section"></a>

            </div>
            <div class="clear"></div>
            </section>


        <!-- portfolio content-->
        <section class="page_section" id="portfolio">
            <!-- section header -->
            <header>
                <div class="container">
                    <h1><b>Portfolio</b></h1>
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
                                <ul>
                                    <li><a title="View all post filed under Work/Profile"  href="#work-profile">Work/Profile</a></li>
                                    <li><a title="View all post filed under Head Shots"  href="#headshots">Head Shots</a></li>
                                    <li><a title="View all post filed under Body Shots"  href="#bodyshots">Body Shots</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- .filter_navigation -->
                </div><!-- .filter_block -->


            <!-- section content -->
            <div class="content_section">

                <div class="module_wall_grid">
                    <a name="work-profile" class="anch"></a>
                    <!--promo text-->
                    <div class="promo_text_block">
                        <h2>Work / Profile</h2>
                    </div>
                    <!--//promo text-->
                    <div id="owl-1" class="owl-carousel">
                        <div class="owl-item-div">
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/3.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/3.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="owl-item-div">
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/10.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/10.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/11.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/11.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/12.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/12.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/13.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/13.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/15.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/15.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/18.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/18.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/19.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/19.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/20.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/20.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/21.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/21.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/22.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/22.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/23.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/23.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/24.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/24.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/25.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/25.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/34.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/34.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/35.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/35.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/36.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/36.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/37.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/37.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/38.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/38.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/39.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/39.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/40.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/40.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/42.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/42.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/43.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/43.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/44.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/44.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/45.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/45.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/46.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/46.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/47.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/47.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/49.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/49.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/50.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/50.jpg" alt="" rel="prettyPhoto" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/51.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/51.jpg" alt="" rel="prettyPhoto" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/52.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/52.jpg" alt="" rel="prettyPhoto" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <div class="filter_img">
                                        <div class="hover_img">
                                            <a href="images/portfolio/full/53.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/53.jpg" alt="" rel="prettyPhoto" /></a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                    </div>
                    <!--// Head Shots -->
                    <a name="headshots" class="anch"></a>
                    <!--promo text-->
                    <div class="promo_text_block">
                        <h2>Head Shots</h2>
                    </div>

                    <!--//promo text-->
                    <div id="owl-2" class="owl-carousel">
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/6.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/6.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/8.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/8.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/17.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/17.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/27.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/27.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/28.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/28.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                       <div>
                            <li>
                               <div class="filter_img">
                                   <div class="hover_img">
                                       <a href="images/portfolio/full/30.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/30.jpg" alt="" /></a>
                                   </div>
                               </div>
                           </li>
                       </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/33.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/33.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                    <!--// Body Shots -->

                    <a name="bodyshots" class="anch"></a>
                    <!--promo text-->
                    <div class="promo_text_block">
                        <h2>Body Shots</h2>
                    </div>
                    <!--//promo text-->
                    <div id="owl-3" class="owl-carousel">
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/4.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/4.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">

                                        <a href="images/portfolio/full/5.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/5.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">

                                        <a href="images/portfolio/full/14.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/14.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/16.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/16.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/29.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/29.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/31.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/31.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/32.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/32.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/48.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/48.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/54.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/54.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/55.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/55.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li>
                                <div class="filter_img">
                                    <div class="hover_img">
                                        <a href="images/portfolio/full/56.jpg" rel="prettyPhoto[pp_gal]"><img src="images/portfolio/56.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                    <script type="text/javascript" src="js/grid.js"></script>
                    <script type="text/javascript">
                        jQuery(window).load(function(){
                            jQuery(function() {
                                Grid.init();
                            });
                        });
                    </script>
                </div><!--.module_cont -->
                <div class="clear"></div>

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
                </div>
            </div>
            <div class="clear"></div>
            <a href="#top" class="next_section back2top"></a>
        </section>

        <!--footer-->
        <div class="footer">
            <!--footer_sidebar-->
            <div class="footer_sidebar">
            </div>
            <!--//footer_sidebar-->
            <!-- footer_bottom -->
            <div class="footer_bottom container">
                <div class="copyright">&copy; 2014 Angelica Delboni</div>
            </div>
            <!-- //footer_bottom -->
        </div>
        <!--//footer-->

    </div><!-- end #page -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            var owl_opts = {
                // Most important owl features
                items : 3,
                itemsCustom : false,
                singleItem : false,
                itemsScaleUp : false,

                //Basic Speeds
                slideSpeed : 200,
                paginationSpeed : 800,
                rewindSpeed : 1000,

                //Autoplay
                autoPlay : false,
                stopOnHover : false,

                // Navigation
                navigation : true,
                navigationText : ["prev","next"],
                rewindNav : true,
                scrollPerPage : false,

                //Pagination
                pagination : true,
                paginationNumbers: false,

                // Responsive
                responsive: true,
                responsiveRefreshRate : 200,
                responsiveBaseWidth: window,

                // CSS Styles
                baseClass : "owl-carousel",
                theme : "owl-theme",

                //Lazy load
                lazyLoad : false,
                lazyFollow : true,
                lazyEffect : "fade",

                //Auto height
                autoHeight : false,

                //Auto Width
                autoWidth : true,

                //JSON
                jsonPath : false,
                jsonSuccess : false,

                //Mouse Events
                dragBeforeAnimFinish : true,
                mouseDrag : true,
                touchDrag : true,

                //Transitions
                transitionStyle : false,

                // Other
                addClassActive : false,

                //Callbacks
                beforeUpdate : false,
                afterUpdate : false,
                beforeInit: false,
                afterInit: false,
                beforeMove: false,
                afterMove: false,
                afterAction: false,
                startDragging : false,
                afterLazyLoad : false

            };

            $("#owl-1").owlCarousel(owl_opts);
            $("#owl-2").owlCarousel(owl_opts);
            $("#owl-3").owlCarousel(owl_opts);

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