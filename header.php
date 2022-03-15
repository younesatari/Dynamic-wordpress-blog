<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('name'); ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                     the_custom_logo();
                  } ?>
                    <h1 class="font-weight-bold"><?php bloginfo('name'); ?></h1>
                    <p class="mb-4">
                        <?php bloginfo('description'); ?>
                    </p>
                    <div class="d-flex justify-content-center mb-5">
                        <?php 
                            $query = new WP_Query(array(
                                'post_type' => 'add_social'
                            ));

                            while($query-> have_posts()):
                                $query->the_post(); ?>
                                <a class="btn btn-outline-primary mr-2" href="<?php echo get_field('add_icon_link'); ?>"><?php echo get_field('add_icon'); ?></a>
                            <?php endwhile; 
                            wp_reset_postdata(); 
                        ?>
                        <!-- <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a> -->
                    </div>
                    <?php 
                        $query = new WP_Query(array(
                            'posts_per_page' => 1,
                            'post_type' => 'hire_info'
                        ));

                        while($query-> have_posts()):
                            $query-> the_post(); ?>
                            <a href="<?php echo get_field('hire_me'); ?>" class="btn btn-lg btn-block btn-primary mt-auto"><?php the_title(); ?></a>
                        <?php endwhile;    
                        wp_reset_postdata(); 
                    ?>
                </div>
                <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
                </div>
            </div>
            <div class="content">
                <!-- Navbar Start -->
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav m-auto">
                                <?php wp_nav_menu(array(
                                   'theme-location' => 'topMenu'
                                )); ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- Navbar End -->