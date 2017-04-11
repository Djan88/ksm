<?php get_header(); ?>
  <!-- BOF Titlebar -->
  <div class="jx-titlebar"> 
    <div class="container">
      <div class="sixteen columns alpha">
        <div class="jx-page-title">            
          <div class="jx-breaducrumb">
            <a href="/" >Главная </a> 
            <?php if (is_category()) { ?>
              <span><?php single_cat_title(); ?></span>
            <?php } else {?>
              <span><?php the_title(); ?></span>
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
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php
                echo '<div class="jx-blog-item">'; 
                echo '<div class="jx-blog-title-metabox">';
                echo '<div class="jx-title">';
                echo '<a href="';
                echo the_permalink();
                echo '">';
                echo the_title();
                echo '</a>';
                echo '</div>';
                echo '<div class="jx-blog-meta">';
                echo '<ul>';
                echo '<li class="jx-date">';
                echo the_time('j f Y');
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '<div class="jx-description">';
                echo '<div class="container">';
                echo '<div class="three columns">';
                echo the_post_thumbnail('thumbnail');
                echo '</div>';
                echo '<div class="nine columns">';
                echo the_content(__('<b> Читать далее...</b>'));
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="jx-blog-more">';
                echo '<a href="';
                echo the_permalink();
                echo '">';
                echo 'Узнать больше';
                echo '</a>';
                echo '</div>';
                echo '</div>';
              ?>
          <?php endwhile; else: ?>
              <section>
                <div class="container">
                  <div class="row" style="text-align: center;">
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                  </div>
                </div>
              </section> 
          <?php endif; ?>
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
            <div class="jx-title jx-uppercase small-text">Поиск</div>
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
