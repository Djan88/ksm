<?php get_header(); ?>
  <!-- BOF Titlebar -->
  <div class="jx-titlebar"> 
    <div class="container">
      <div class="sixteen columns alpha">
        <div class="jx-page-title">            
          <div class="jx-breaducrumb">
            <a href="/" >Главная </a> 
            <?php if (is_category()) { ?>
              <span><?php single_cat_title(); ?><span>
            <?php } else {?>
              <span><?php the_title(); ?><span>
            <?php } ?>
          </div>
        </div>
      </div>       
    </div>                 
  </div>    
  <!-- EOF Titlebar -->    
</header>     
<!-- EOF Main Menu -->  
<!-- BOF Main Content -->
<div role="main" class="main no-top-padding">
  <div class="jx-container jx-padding">
    <div class="container with-sidebar">
      <div class="sixteen columns alpha">        
        <div class="jx-blog-1">
          <div class="jx-blog-item">
            <div class="jx-blog-title-metabox">
              <div class="jx-title">
                <a href="news-single-page.html">Lorem ipsum dolor sit amet, consectetuer</a>
              </div>
              <div class="jx-blog-meta">
                <ul>
                  <li class="jx-date">Nov 25, 2015</li>
                  <li class="jx-author">By Ahmed Isa</li>
                  <li class="jx-category">Tiling, Painting, Construction</li>
                  <li class="jx-Tag">Floor Plan, Annual Contract</li>
                  <li class="jx-comments">3 Comments</li>
                </ul>
              </div>                    
            </div>
            <!-- EOF Title -->
            <div class="jx-image-holder">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <div class="jx-blog-image jx-image-wrapper">
                      <img src="images/blog-1.jpg" alt=""/>
                      <div class="jx-image-hoverlay"></div>                
                      <div class="jx-blog-btns-hover">
                        <span class="jx-btn-scale">
                          <a href="images/blog-1.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </span>
                        <span class="jx-btn-link"><a href="news-single-page.html"><i class="fa fa-link"></i></a></span>
                      </div>                
                    </div>
                  </li>
                  <!-- Image -->                
                  <li>
                    <div class="jx-blog-image jx-image-wrapper">
                      <iframe src="https://www.youtube.com/embed/eVOlk6XtBgc?vq&hd=1"></iframe>
                      <div class="jx-image-hoverlay"></div>
                      <div class="jx-blog-btns-hover">
                        <span class="jx-btn-scale"><a href="https://youtu.be/eVOlk6XtBgc" data-rel="prettyPhoto"><i class="fa fa-play"></i></a></span>
                        <span class="jx-btn-link"><a href="news-single-page.html"><i class="fa fa-link"></i></a></span>
                      </div>
                    </div>
                  </li>
                  <!-- Video -->      
                </ul>
              </div>        
            </div>
            <!-- EOF Blog Image -->
            <div class="jx-description">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
              </p>
            </div>
            <!-- EOF Description -->          
            <div class="jx-blog-more">
              <a href="news-single-page.html"><i class="fa fa-file-text-o"></i>Read More</a>
            </div>
            <!-- EOF Readmore-->                    
          </div>
          <div class="row"></div>        
          <div class="jx-pagination">
            <div class="page-number current"><a href="#">1</a></div>
              <div class="page-number"><a href="#">2</a></div>
              <div class="page-number"><a href="#">3</a></div>
              <div class="page-number"><a href="#">4</a></div>
              <div class="page-number"><a href="#">5</a></div> 
          </div> 
        </div>
        <!-- EOF Blog -->      
      </div>
      <!-- EOF Body Content -->        
      <div id="sidebar" class="four columns right omega">        
        <div class="jx-sidebar-block mb40">          
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase small-text">Search</div>
            <div class="jx-seperator-hr"></div>
          </div>
          <!-- Section title -->             
          <div class="jx-sidebar-search">
            <form action="#" id="contactForm-1" method="post" class="jx-form-wrapper cf">                                
              <div class="search-input search-inline-block">
                <input type="text" id="search-item" name="search_item" placeholder="Search..." class="jx-form-name" />                                
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
            </form>                        
          </div>
          <!-- Search -->
        </div>
        <!-- Widget 01 -->          
        <div class="jx-sidebar-block mb40">          
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase small-text">Recent Posts</div>
            <div class="jx-seperator-hr"></div>
          </div>
        <!-- Section title --> 
          <div class="jx-sidebar-recent-post">
            <ul>
              <li>
                <div class="image"><img src="images/blog-s-1.jpg" alt=""></div>
                <div class="post-content">
                  <div class="title">
                    <a href="news-single-page.html">Lorem ipsum dolor sit</a>
                  </div>
                  <div class="date">29 JUL 2015</div>
                </div>
              </li>                              
              <li>
                <div class="image"><img src="images/blog-s-2.jpg" alt=""></div>
                <div class="post-content">
                  <div class="title"><a href="news-single-page.html">Nulla consequat massa</a></div>
                  <div class="date">18 JUN 2015</div>
                </div>
              </li>                
              <li>
                <div class="image"><img src="images/blog-s-3.jpg" alt=""></div>
                <div class="post-content">
                  <div class="title"><a href="news-single-page.html">Vivamus elementum semper</a></div>
                  <div class="date">15 May 2015</div>
                </div>
              </li>                
            </ul>
          </div>
          <!-- Recent Post -->
        </div>
        <!-- Widget 02 -->          
        <div class="jx-sidebar-block mb40 widget-area">          
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase small-text">Categories</div>
            <div class="jx-seperator-hr"></div>
          </div>
          <!-- Section title -->             
          <div class="jx-sidebar-categories">    
            <ul>
              <li><a href="#">Construction</a></li>
              <li><a href="#">House Maintenance</a></li>
              <li><a href="#">Carpentry</a></li>
              <li><a href="#">Hardware</a></li> 
              <li><a href="#">Buildings</a></li>
              <li><a href="#">Modern Kitchens</a></li>                         
            </ul>                          
          </div>
          <!-- Categories -->
        </div>
        <!-- Widget 03 -->
        <div class="jx-sidebar-block mb40 widget-area">          
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase small-text">Tags</div>
            <div class="jx-seperator-hr"></div>
          </div>
          <!-- Section title -->               
          <div class="jx-sidebar-tags">                          
            <ul>
              <li><a href="#">Construction</a></li>
              <li><a href="#">House Maintenance</a></li>
              <li><a href="#">Carpentry</a></li>
              <li><a href="#">Hardware</a></li> 
              <li><a href="#">Buildings</a></li>
              <li><a href="#">Modern Kitchens</a></li>                         
            </ul>                                     
          </div>
          <!-- Categories -->
        </div>
        <!-- Widget 03 -->                      
        <div class="jx-sidebar-block mb40">                  
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase small-text">Testimonials</div>
            <div class="jx-seperator-hr"></div>
          </div>
          <!-- Section title -->             
          <div class="jx-sidebar-testimonials">                          
            <ul>
              <li>
                <div class="jx-tetimonials-1">                      
                  <div class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...</div>
                  <div class="jx-testimonial-details">
                    <div class="jx-testimonial-image">
                      <img src="images/team_5.jpg" alt="testimonials images">
                    </div>
                    <div class="name">Alex Simon</div>
                    <div class="position">Maxon Corp</div>
                  </div>                        
                </div>                        
              </li>                        
            </ul>                                   
          </div>
          <!-- Testimonials -->
        </div>
        <!-- Widget 03 -->                          
      </div>
    <!-- EOF Sidebar -->          
    </div>
  </div>                  
</div>
  <!-- EOF Main Content -->
<?php get_footer(); ?>
