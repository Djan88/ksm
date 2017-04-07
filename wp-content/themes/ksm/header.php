<!DOCTYPE html>
<html lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php the_title(); ?></title>
	<meta name="keywords" content="HTML5 Template">
  <meta name="description" content="Vectus HTML5 Template - v1.0">
	<meta name="author" content="janxcode.com">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
  <!-- Web Fonts  -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,500,300' rel='stylesheet' type='text/css'>
  <!-- Theme Style -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">   
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme-animate.css">   
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme-elements.css">   
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">   
  <!-- Skin CSS -->
	<link id="skin" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skins/sun.css">
  <!-- Icon Fonts -->
  <link rel='stylesheet' href='<?php bloginfo("template_url"); ?>/fonts/font-awesome.min.css' type='text/css' media='screen' />    
  <!-- Library Css -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skeleton.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/flexslider/flexslider.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/isotope/isotope.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/owl/owl.carousel.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/prettyPhoto/prettyPhoto.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/vendor/rs-plugin/css/settings.css" media="screen" /> 
  <!-- Responsive Theme -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme-responsive.css">
  <!-- Library Js -->
	<script src="<?php bloginfo('template_url'); ?>/vendor/modernizr.js"></script>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114x114.png">
  <?php wp_head(); ?>
</head>  
<body>
	<!-- BOF Loader -->
  <div class="loader">
    <div class="spinner spinner-double-bounce">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
	</div>
  <!-- EOF Loader -->
    <!-- BOF Header -->   
    <header>
      <!-- BOF Top Bar -->
      <div class="jx-header-1">
        <!-- BDF TOOLBAR -->
        <div class="jx-topbar">
          <div class="container">
            <div class="eight columns left">
              <div class="jx-left-topbar">Добро пожаловать на сайт нашей компании</div>
            </div>
            <!-- Left Items -->
            <div class="eight columns right">
              <div class="jx-right-topbar">
                <div class="email left"><i class="fa fa-envelope"></i> Info@rebuild.com</div>
                  <ul class="right">
                    <!-- <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="cart">0</span>
                      </a>
                    </li>
                    <li><span>$0.00</span></li> -->
                    <li><a href="#"><i class="fa fa-user"></i></a></li>
                    <li>
                      <a href="http://www.facebook.com/janxcode">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://www.twitter.com/janxcode">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://www.googleplus.com/janxcode">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </li>
                  </ul>
                  <!-- Social icons-->
                </div>
              </div>
              <!-- Right Items -->
            </div>
          </div>
          <!-- EDF TOOLBAR --> 
          <div class="jx-header header-line">
            <div class="container">
              <div class="four columns">
                <div class="jx-header-logo">
                  <a href="/">
                    <img src="<?php bloginfo('template_url'); ?>/images/header_logo.png" alt="" />
                  </a>
                </div>
                <!-- Logo -->
                </div>                
                <div class="twelve columns">
                  <div class="header-info">
                    <div class="toll-free">
                      <i class="fa fa-phone"></i> БЕСПЛАТНЫЙ ЗВОНОК
                    </div>
                    <ul>
                      <li class="top-space">
                        <div class="icon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="position">
                          <div class="location">Месторасположение</div>
                          <div class="address">КРЫМ, РФ</div>
                        </div>
                      </li>
                      <li class="top-space">
                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                        <div class="position">
                          <div class="time">Время работы</div>
                          <div class="date">ПН. - ПТ. 8:00 - 18:00</div>
                        </div>
                      </li>
                      <li>
                        <div class="toll-free-number">8 800 21 76 00</div>
                      </li> 
                    </ul>
                  </div>
                    <!-- Header Info -->
                </div>                
	            </div>
            </div>     
          </div>
          <!-- EOF Top Bar -->
        <!-- EDF Header -->
        <div class="jx-menu-holder jx-sticky">
        	<div class="container">
            <div class="header-menu-left">
              <div class="nav_container">
                <ul id="jx-main-menu" class="menu">
                  <!-- Item 1 -->
                  <li class="with-sub"><a href="/">Home</a>
                    <ul class="submenu">                                    	
                      <li class="col">
                        <ul>                                        
                          <li><a href="index.html">Home 1</a></li>
                          <li><a href="home-1.html">Home 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>       
                  <!-- Item 2 -->
                  <li class="with-sub"><a href="">Features</a>
                    <ul class="submenu">                                    	
                      <li class="col">
                        <ul>                                        
                          <li class="has-child"><a href="#">Headers</a>
                            <ul class="submenu">                                    	
                              <li>
                                <ul>                                        
                                  <li><a href="header-default.html">Default Header</a></li>
                                  <li><a href="header-without-topbar.html">Header Without Topbar</a></li>
                                  <li><a href="header-center-logo.html">Header Centered Logo</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <!-- Sub-tem 01 -->
                          <li class="has-child">
                            <a href="#">Pages</a>
                              <ul class="submenu">                                    
                                <li>
                                  <ul>                                        
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="our-team.html">Our Team</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="404-error.html">404 Page</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                            <!-- Sub-tem 02 -->
                            <li class="has-child">
                              <a href="#">Shortcodes</a>
                                <ul class="submenu">
                                  <li>
                                    <ul>                                        
                                      <li><a href="typography.html">Typography</a></li>
                                      <li><a href="grid-columns.html">Grid Columns</a></li>
                                      <li><a href="price-table.html">Price Table</a></li>
                                      <li><a href="service-box.html">Service Box</a></li>
                                      <li><a href="tag-box.html">Tag Box</a></li>
                                      <li><a href="testimonial.html">Testimonial</a></li>
                                      <li><a href="tabs.html">Tabs</a></li>
                                      <li><a href="counters.html">Counters</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <!-- Sub-tem 03 -->
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="about-us.html">About Us</a></li>
                      <!-- Item 3 -->
                      <li class="with-sub">
                        <a href="#">Services</a>
                        <ul class="submenu">
                          <li class="col">
                            <ul>
                              <li><a href="construction-managments.html">Construction Managments</a></li>
                              <li><a href="carpentry.html">Carpentry</a></li>
                              <li><a href="electrical.html">Electrical</a></li>
                              <li><a href="plumbing.html">Plumbing</a></li>
                              <li><a href="tiling-painting.html">Tiling and Painting</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="with-sub"><a href="#">Projects</a>
                        <ul class="submenu">
                          <li class="col">
                            <ul>                                      
                              <li><a href="projects.html">Classic Projects</a></li>
                              <li><a href="grid-projects.html">Grid Projects</a></li>
                              <li><a href="project-view.html">Single Project</a></li>
                            </ul>
                          </li>
                        </ul>                                
                      </li>
                      <li class="with-sub"><a href="#">News</a>
                        <ul class="submenu">
                          <li class="col">
                            <ul>                                      
                              <li><a href="news.html">News</a></li>
                              <li><a href="news-single-page.html">News Single Page</a></li>
                            </ul>
                          </li>
                        </ul>  
                      </li>
                      <li><a href="contact.html">Contact Us</a></li>
                    </ul>                  	                  
                  </div>
                  <!-- EOF Menu -->
                </div>
                <!-- MENU -->
                <div class="header-search-right">
                  <div class="jx-header-search">
                    <form role="search" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>">
                      <div id="search-input" class="search-inline-block">
                        <input id="search_text" placeholder="Что искать?" class="jx-form-name" type="text" value="" name="s" id="s">
                      </div>
                      <div id="jx-search-submit">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        <!-- Submit Button -->  
                      </div>
                    </form>
                  </div>
                </div>
                <!-- SEARCH FORM -->
              </div>
            </div>

        <!-- BOF Main Menu -->
