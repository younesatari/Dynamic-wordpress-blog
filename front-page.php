
   <?php get_header(); ?>
   <!-- Carousel Start -->
   <div class="container p-0">
      <div id="blog-carousel" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
         <?php 
            $loop = new WP_Query(array(
               'post_type' => 'dynamic_slider',
               'posts_per_page' => 3
            ));
            while($loop-> have_posts()):
               $loop->the_post(); ?>
               <div class="carousel-item">
                  <?php the_post_thumbnail(); ?>
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <h2 class="mb-3 text-white font-weight-bold"><?php the_title();?></h2>
                     <div class="d-flex text-white">
                           <?php the_time('d/M/y'); ?>
                           <?php echo get_the_category_list('/'); ?>
                           <?php comments_number(); ?>
                     </div>
                     <a href="<?php the_permalink(); ?>" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                  </div>
               </div>
         <?php endwhile; ?>
         </div>
         <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
               <span class="carousel-control-next-icon"></span>
         </a>
      </div>
   </div>
   <!-- Carousel End -->
   
   
   <!-- Blog List Start -->
   <div class="container bg-white pt-5">
   <?php 
   $args = array('posts_per_page' => 6 );
   $the_query = new WP_Query( $args ); 
   ?>
   <?php if ( $the_query->have_posts() ) : ?>
   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <!-- Single -->
      <div class="row blog-item px-3 pb-5">
         <div class="col-md-5">
            <?php the_post_thumbnail(); ?>
         </div>
         <div class="col-md-7">
               <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"><?php the_title(); ?></h3>
               <div class="d-flex mb-3">
                  <span class="post-time mr-2">
                     <?php the_date('d-M-y'); ?>
                  </span>
                  <?php echo get_the_category_list('/'); ?>
                  <small class="ml-2 mr-2 text-muted"><i class="fa fa-comments"></i> <?php comments_number(); ?></small>
               </div>
               <p>
                  <?php echo wp_trim_words(get_the_content(), 18); ?>
               </p>
               <a class="btn btn-link p-0" href="<?php the_permalink();?>">Read More <i class="fa fa-angle-right"></i></a>
         </div>
      </div>
      <!-- End of Single -->
   <?php endwhile;
   wp_reset_postdata(); ?>
   <?php else:  ?>
   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
   <?php endif; ?>
   

   </div>
   <!-- Blog List End -->
   
   <!-- Subscribe Start -->
   <div class="container py-5 px-4 bg-secondary text-center">
      <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
      <p class="text-white">Subscribe and get my latest article in your inbox</p>
      <!-- <form class="form-inline justify-content-center">
         <div class="input-group">
               <input type="text" class="form-control" placeholder="Your Email">
               <div class="input-group-append">
               <button class="btn btn-primary" type="submit">Subscribe</button>
               </div>
            </div>
      </form> -->
      <?php echo do_shortcode('[wpforms id="252" title="false"]'); ?>
   </div>
   
   <?php get_footer(); ?>
                
                