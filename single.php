<?php get_header(); ?>
    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Blog Detail</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="<?php echo home_url()?>">Home</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">Blog Detail</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Blog Detail Start -->
    <div class="container py-5 px-2 bg-white">
        <div class="row px-4">
            <?php 
                while(have_posts()):
                the_post(); ?>   
                <div class="col-12">
                <?php the_post_thumbnail(); ?>
                <h2 class="mb-3 font-weight-bold"><?php the_title(); ?></h2>
                <div class="d-flex">
                    <p class="mr-3 text-muted"><i class="fa fa-calendar-alt"></i> <?php the_date('d-M-y'); ?></p>
                    <p class="mr-3 text-muted"><?php echo get_the_category_list('/'); ?></p>
                    <p class="mr-3 text-muted"><?php comments_number(); ?></p>
                </div>
                <p>
                    <?php the_content(); ?>
                    <?php comments_template(); ?>

                </p>
            </div>
                <?php endwhile;   
            ?>
        </div>
    </div>
    <!-- Blog Detail End -->
    <!-- Blog List End -->
    
    <?php echo paginate_links(); ?>
        
<?php get_footer(); ?>