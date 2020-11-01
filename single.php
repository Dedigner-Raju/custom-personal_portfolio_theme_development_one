<?php get_header(); ?>

<section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">

                        
                        
                        <?php if ( have_posts() ) : while ( have_posts() ) : 
                            
                            
                            
                            the_post(); 
                                the_title(); 
                                the_content();
                             endwhile;
                        
                       else :
                     echo 'Sorry, no posts matched your criteria'; 


                       endif; ?>

                          
                                                       
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php comments_template(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>