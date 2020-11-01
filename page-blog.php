<?php get_header(); ?> 

        <!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Blog Area</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        
        <?php 
                        // the query
                        $the_query = new WP_Query( $args ); ?>
                        
                        <?php if ( $the_query->have_posts() ) : ?>
                        
                            <!-- pagination here -->
                        
                            <!-- the loop -->
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <h2><?php the_title(); ?></h2>
                            <?php endwhile; ?>
                            <!-- end of the loop -->
                        
                            <!-- pagination here -->
                        
                            <?php wp_reset_postdata(); ?>
                        
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif;
                        
                        
                        ?>
                                                        
    <?php comments_template(); ?>                      
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>