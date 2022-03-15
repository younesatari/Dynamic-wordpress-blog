<?php get_header(); ?>
    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Contact Me</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="<?php echo home_url()?>">Home</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">Contact Me</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container bg-white pt-5">
        <div class="row px-3 pb-2">
            <?php 
                $query = new WP_Query(array(
                    'post_type' => 'contact_info'
                ));

                while($query->have_posts()):
                    $query->the_post(); ?>
                    <div class="col-sm-4 text-center mb-3">
                        <?php the_post_thumbnail(); ?>
                        <h4 class="font-weight-bold"><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div> 
                <?php endwhile;
                wp_reset_postdata();
            ?>
        </div>
        <div class="col-md-12 pb-5">
            <div class="contact-form">
                <div id="success"></div>
                <?php echo do_shortcode('[wpforms id="256" title="false"]'); ?>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php get_footer(); ?>