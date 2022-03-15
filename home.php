<?php get_header(); ?>

    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">My Blog</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="<?php echo home_url()?>">Home</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">My Blog</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Blog List Start -->
    <div class="container bg-white pt-5 pb-5">
        <?php 
        while(have_posts()):
            the_post(); ?>
            <div class="row blog-item px-3 pb-5">
            <div class="col-md-5">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"><?php the_title(); ?></h3>
                <div class="d-flex mb-3">
                    <small class="mr-2 text-muted"><?php the_time('d-M-y'); ?></small>
                    <small class="mr-2 text-muted"><?php echo get_the_category_list('/'); ?></small>
                    <small class="mr-2 text-muted"><?php comments_number(); ?></small>
                </div>
                <p>
                    <?php echo wp_trim_words(get_the_content(), 18); ?>
                </p>
                <a class="btn btn-link p-0" href="<?php the_permalink();?>">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <?php endwhile;   
        ?>

        <!-- Blog List End -->
    <?php echo paginate_links(); ?>
    </div>
    
    
<?php get_footer(); ?>