<?php get_header()?>


    <div class="main">


        <div class="container-work">

        <div class="category">
        <?php
            $tax = $wp_query->get_queried_object();
            echo '<h2>'. $tax->name . '</h2>';
        ?>
        
        </div>

            <!-- Extra content goes here -->


            <div class="work-section">

                <div class="img-group-one">

                <?php

                    while (have_posts()) :
                        the_post();
                        get_template_part('partials/content','work');
                    endwhile;

                ?>
                    
                </div>
            </div>


	        

        </div>



    </div>


<?php get_footer()?>