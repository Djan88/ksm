<?php get_header(); ?>
  <!-- BOF Titlebar -->
  <div class="jx-titlebar"> 
    <div class="container">
      <div class="sixteen columns alpha">
        <div class="jx-page-title">            
          <div class="jx-breaducrumb"><a href="/" >Главная </a> <span><?php the_title(); ?></span></div>
        </div>
      </div>       
    </div>                 
  </div>    
  <!-- EOF Titlebar -->    
</header>     
  <!-- EOF Main Menu -->    
  <!-- BOF Main Content -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div role="main" class="main no-top-padding">      
  <div class="jx-container jx-padding">
    <div class="container">
      <!-- Portfolio Slider-->
      <div class="eleven columns">            
        <div class="jx-protfolio-details">                            
          <div id="slider" class="flexslider">
            <ul class="slides">
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-w-1.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-w-2.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-w-3.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-w-4.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-w-5.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-w-6.jpg" alt=""></li>
            </ul>
          </div>
          <div id="carousel" class="flexslider">
            <ul class="slides">
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-s-1.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-s-2.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-s-3.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-s-4.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-s-5.jpg" alt=""></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/portfolio-s-6.jpg" alt=""></li>
            </ul>
          </div>          
        </div>
      </div>
      <!-- EOF Portfolio Slider-->
      <!-- Project Details -->
      <div class="five columns">
        <div class="jx-portfolio-short-details">              
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase">Описание</div>
            <div class="jx-seperator-hr"></div>
          </div>
          <!-- Section title -->               
          <?php
          the_content(__('(more...)'));
          wp_link_pages();
          edit_post_link(__('Edit This'));
          ?>
        </div>          
        <div class="jx-portfolio-details-box">
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase">Details</div>
            <div class="jx-seperator-hr"></div>
          </div>
          <!-- Section title -->                        
          <ul class="project-description-list">
            <li>Client:<span>Virtus Co.</span></li>
            <li>Value:<span>$400,000</span></li>
            <li>Location:<span>Paradise View CA 9403</span></li>
            <li>Area:<span>500,435 m<sup>2</sup></span></li>
            <li>Contractor:<span>Vacation Ltd.</span></li>
            <li>Completed Year:<span>2015</span></li>                        
          </ul>
        </div> 
      </div>
      <!-- EOF Project Details -->
    </div>
  </div>        
  <div class="jx-container jx-padding no-top-padding">
    <div class="container">
      <div class="sixteen columns">
        <div class="jx-partner-logo">         
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase">Project Partners</div>
            <div class="jx-seperator-hr"></div>
          </div>      
          <ul>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-1.png" alt=""/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-2.png" alt="" /></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-3.png" alt=""/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-4.png" alt=""/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-5.png" alt=""/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-6.png" alt=""/></a></li>
          </ul>
        </div>
      </div>
    </div>        
  </div>
  <!-- EOF Project Partners -->   
</div>
<?php endwhile; else: ?>
  <?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>
<!-- EOF Main Content -->
<?php get_footer(); ?>
