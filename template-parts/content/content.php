<?php get_header(); 




           if ( have_posts() ) : while ( have_posts() ) : 

                            the_post(); 
                                the_title(); 
                                the_content();
                             endwhile;
                        
                       else :
                     echo 'Sorry, no posts matched your criteria'; 
                       endif; 
             get_footer();
      
 ?>