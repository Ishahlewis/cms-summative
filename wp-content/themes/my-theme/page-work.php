<?php get_header()?>


    <div class="main">


        <div class="container-work">

            <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('partials/content','default');
                endwhile;
            ?>

            <!-- Extra content goes here -->


            <div class="work-section">

                <div class="img-group-one">

                <?php
                    // The Query
                    $args = array('post_type'=>'work', 'posts_per_page' => -1);
                    $the_query = new WP_Query( $args );
                    
                    // The Loop
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();

                        get_template_part('partials/content','work');
                    }
                    
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?>
                    
                </div>
            </div>


	        

        </div>



    </div>


<?php get_footer()?>