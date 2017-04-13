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
                echo the_time('j F Y');
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '<div class="jx-description">';
                echo '<div class="container">';
                echo '<div class="three columns">';
                echo '<a class="cboxElement" href="';
                echo the_post_thumbnail_url( 'medium' );
                echo '">';
                echo the_post_thumbnail('thumbnail');
                echo '</a>';
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
        <!-- Widget 01 -->          
        <div class="jx-sidebar-block mb40">          
          <div class="jx-section-title-2">
            <div class="jx-title jx-uppercase small-text">Последние новости</div>
            <div class="jx-seperator-hr"></div>
          </div>
        <!-- Section title --> 
          <div class="jx-sidebar-recent-post">
            <ul>
              <li>
                <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/stock-3.jpg" alt=""></div>
                <div class="post-content">
                  <div class="title">
                    <a href="#">Коттеджный поселок</a>
                  </div>
                  <div class="date">25 Янв 2017</div>
                </div>
              </li>
              <li>
                <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/stock-4.jpg" alt=""></div>
                <div class="post-content">
                  <div class="title">
                    <a href="#">ЖК «Садовые кварталы»</a>
                  </div>
                  <div class="date">26 Янв 2017</div>
                </div>
              </li>
              <li>
                <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/stock-5.jpg" alt=""></div>
                <div class="post-content">
                  <div class="title">
                    <a href="#">Жилой комплекс Доминион</a>
                  </div>
                  <div class="date">27 Марта 2017</div>
                </div>
              </li>               
            </ul>
          </div>
          <!-- Recent Post -->
        </div>
        <!-- Widget 02 -->                        
      </div>
    <!-- EOF Sidebar -->          
    </div>
  </div>                  
</div>
  <!-- EOF Main Content -->
<?php get_footer(); ?>
