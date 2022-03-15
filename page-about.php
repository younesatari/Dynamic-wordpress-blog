
   <?php get_header(); ?>
   <!-- Page Header Start -->
   <div class="container py-5 px-2 bg-primary">
      <div class="row py-5 px-4">
         <div class="col-sm-6 text-center text-md-left">
               <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">About Me</h1>
         </div>
         <div class="col-sm-6 text-center text-md-right">
               <div class="d-inline-flex pt-2">
                  <h4 class="m-0 text-white"><a class="text-white" href="<?php echo home_url(); ?>">
                  <?php 
                     $id_frontpage = get_option('page_on_front');
                     echo get_the_title( $id_frontpage );
                  ?>
               </a></h4>
                  <h4 class="m-0 text-white px-2">/</h4>
                  <h4 class="m-0 text-white">About Me</h4>
               </div>
         </div>
      </div>
   </div> 
   <!-- Page Header End -->
   <!-- About Start -->
   <div class="container bg-white pt-5">
      <div class="row px-3 pb-5">
         <?php while(have_posts()):
            the_post(); ?>
            <div class="col-md-12">
               <p class="m-0">
                  <?php the_content(); ?>
               </p>
         </div>
         <?php 
            endwhile;
         ?>
      </div>
   </div>
   <!-- About End -->
   <?php get_footer(); ?>