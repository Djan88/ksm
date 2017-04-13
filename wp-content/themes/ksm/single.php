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
  <div class="jx-container">
    <div class="container">
      <!-- Portfolio Slider-->
      <?php if( have_rows('slider') ): ?> 
      <div class="eleven columns">            
        <div class="jx-protfolio-details">                            
          <div id="slider" class="flexslider">
            <ul class="slides">
              <?php while( have_rows('slider') ): the_row();?>
                <li><img src="<?php the_sub_field('slider_img');?>" alt=""></li>
              <?php endwhile; ?>
            </ul>
          </div>
          <div id="carousel" class="flexslider">
            <ul class="slides">
              <?php while( have_rows('slider') ): the_row();?>
                <li><img src="<?php the_sub_field('slider_img');?>" alt=""></li>
              <?php endwhile; ?>
            </ul>
          </div>          
        </div>
      </div>
      <?php endif; ?>
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
          edit_post_link(__('Edit This'));
          ?>
        </div>
        <?php if( have_rows('parametrs') ): ?>         
        <div class="jx-portfolio-details-box">
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase">Параметры</div>
            <div class="jx-seperator-hr"></div>
          </div>
          <!-- Section title -->                        
          <ul class="project-description-list">
            <?php while( have_rows('parametrs') ): the_row();?>
              <li><?php the_sub_field('parametr_title');?><span><?php the_sub_field('parametr_content');?></span></li>
            <?php endwhile; ?>
          </ul>
        </div> 
        <?php endif; ?>
      </div>
      <!-- EOF Project Details -->
    </div>
  </div>
  <?php if (get_field('recent_tech');) { ?>
  <div class="jx-container no-top-padding">
    <div class="container">
      <div class="sixteen columns">
        <div class="jx-partner-logo">         
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase">Похожая спецтехника</div>
            <div class="jx-seperator-hr"></div>
          </div>      
          <ul>
          <?php 
            $posts = get_field('recent_tech');
          if( $posts ): ?>
              <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a></li>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>        
  </div>
  <?php } ?>
  <!-- EOF Project Partners -->   
</div>
<?php endwhile; else: ?>
  <?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>
<!-- EOF Main Content -->
<?php get_footer(); ?>
